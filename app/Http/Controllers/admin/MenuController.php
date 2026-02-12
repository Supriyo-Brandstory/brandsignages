<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::whereNull('parent_id')->with('children')->orderBy('order')->get();
        return view('admin.menus.index', compact('menus'));
    }

    public function updateOrder(Request $request)
    {
        $menuTree = $request->input('menu');
        $this->updateMenuStructure($menuTree);
        return response()->json(['success' => true]);
    }

    private function updateMenuStructure($menus, $parentId = null)
    {
        foreach ($menus as $index => $menuItem) {
            $menu = Menu::find($menuItem['id']);
            if ($menu) {
                $menu->order = $index + 1;
                $menu->parent_id = $parentId;
                $menu->save();

                if (isset($menuItem['children'])) {
                    $this->updateMenuStructure($menuItem['children'], $menu->id);
                }
            }
        }
    }

    public function create()
    {
        $menus = Menu::whereNull('parent_id')->with('children')->orderBy('order')->get();
        return view('admin.menus.create', compact('menus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'nullable|string|max:255',
            'parent_id' => 'nullable|exists:menus,id',
        ]);

        Menu::create($request->all());

        return redirect()->route('menus.index')->with('msg', 'Menu created successfully.');
    }

    public function edit(Menu $menu)
    {
        $menus = Menu::whereNull('parent_id')->with('children')->orderBy('order')->get();
        return view('admin.menus.edit', compact('menu', 'menus'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'nullable|string|max:255',
            'parent_id' => 'nullable|exists:menus,id',
        ]);

        $menu->update($request->all());

        return redirect()->route('menus.index')->with('msg', 'Menu updated successfully.');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menus.index')->with('msg', 'Menu deleted successfully.');
    }
}
