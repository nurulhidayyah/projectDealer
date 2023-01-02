<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-1">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted">
            <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/cars*') ? 'active' : '' }}" href="/dashboard/cars">
                    <span data-feather="truck"></span> My Car
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/galleries*') ? 'active' : '' }}" href="/dashboard/galleries">
                    <span data-feather="grid"></span>
                    Galleries
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/brosurs*') ? 'active' : '' }}" href="/dashboard/brosurs/">
                    <span data-feather="file-text"></span>
                    Brosur
                </a>
            </li>
        </ul>
    </div>
</nav>
