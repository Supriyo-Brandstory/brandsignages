<?php

namespace App\Http\Controllers\admin\query;

use App\Http\Controllers\Controller;
use App\Models\CustomInquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class coustomQuery extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = CustomInquiry::latest()->paginate(10);
        return view('admin.query.customInquery', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contact =CustomInquiry ::findOrFail($id);
        if ($contact->image) {
            Storage::disk('public')->delete($contact->image);
        }
        $contact->delete();
        return redirect()->back()->with('msg', ' deleted successfully!');
    }
}
