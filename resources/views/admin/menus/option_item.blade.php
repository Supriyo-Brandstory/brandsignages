@foreach ($menus as $menu_item)
    <option value="{{ $menu_item->id }}" {{ isset($menu) && $menu->parent_id == $menu_item->id ? 'selected' : '' }}
        {{ isset($menu) && $menu->id == $menu_item->id ? 'disabled' : '' }}>
        {{ str_repeat('— ', $depth ?? 0) }}{{ $menu_item->title }}
    </option>
    @if ($menu_item->children)
        @include('admin.menus.option_item', [
            'menus' => $menu_item->children,
            'depth' => ($depth ?? 0) + 1,
        ])
    @endif
@endforeach
