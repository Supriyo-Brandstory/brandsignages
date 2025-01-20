<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item {{ Route::is('admin.dashboard') ? 'active' : ''}}">
            <a class="nav-link " href="{{route('admin.dashboard')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        
        <li class="nav-item {{ Route::is('seo*') ? 'active' : ''}}">
            <a class="nav-link " href="{{route('seo.index')}}">
                <i class="bi bi-grid"></i>
                <span>Seo</span>
            </a>
        </li>
        

       
        

    </ul>

</aside>