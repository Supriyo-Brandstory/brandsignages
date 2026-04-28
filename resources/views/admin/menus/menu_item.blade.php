<li class="dd-item" data-id="{{ $menu->id }}">
    <div class="dd-handle">
        {{ $menu->title }} <span class="text-muted" style="font-size: 0.8em; margin-left: 10px;">({{ $menu->url ?? '#' }}
            - {{ $menu->menu_type }})</span>
    </div>
    <div class="dd-actions" style="position: absolute; right: 10px; top: 5px;">
        <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-sm btn-outline-primary"><i
                class="ri-pencil-fill"></i></a>
        <form method="POST" action="{{ route('menus.destroy', $menu->id) }}" class="d-inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-outline-danger show_confirm" data-toggle="tooltip"
                title='Delete'>
                <i class="ri-delete-bin-2-fill"></i>
            </button>
        </form>
    </div>
    @if ($menu->children->count() > 0)
        <ol class="dd-list">
            @foreach ($menu->children as $child)
                @include('admin.menus.menu_item', ['menu' => $child])
            @endforeach
        </ol>
    @endif
</li>
