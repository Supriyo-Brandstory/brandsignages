<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item {{ Route::is('admin.dashboard') ? 'active' : ''}}">
            <a class="nav-link " href="{{route('admin.dashboard')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item {{ Route::is('categories*') ? 'active' : ''}}">
            <a class="nav-link " href="{{route('categories.index')}}">
                <i class="bi bi-grid"></i>
                <span>Category</span>
            </a>
        </li>
        
        <li class="nav-item {{ Route::is('blogs*') ? 'active' : ''}}">
            <a class="nav-link " href="{{route('blogs.index')}}">
                <i class="bi bi-grid"></i>
                <span>Blogs</span>
            </a>
        </li>
        
        <li class="nav-item {{ Route::is('seo*') ? 'active' : ''}}">
            <a class="nav-link " href="{{route('seo.index')}}">
                <i class="bi bi-grid"></i>
                <span>Seo</span>
            </a>
        </li>
        <li class="nav-item {{ Route::is('sitemap*') ? 'active' : ''}}">
            <a class="nav-link " href="{{route('sitemap.index')}}">
                <i class="bi bi-grid"></i>
                <span>Sitemap</span>
            </a>
        </li>

        

       
        

    </ul>

</aside>