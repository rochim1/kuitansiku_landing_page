<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4 mt-2" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow mt-n5 mt-sm-n5 mt-md-n5 mt-lg-n5 mt-xl-0 mt-xxl-0" href="#" data-bs-toggle="dropdown">
                    <span class="mr-2 d-lg-inline text-gray-600 small">
                        {{ auth()->user()->name }}
                        <i class='bx bx-chevron-down mt-n1'></i>
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    @if (auth()->user()->super_user)
                        @can('super_user')
                            <li>
                                <a class="dropdown-item" href="{{ url('admin/profil') }}">
                                    <i class="bx bx-user me-2"></i>
                                    <span class="align-middle">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                        @endcan
                    @endif
                    <li>
                        <a class="dropdown-item" href="{{ url('admin/logout') }}" id="btn_logout">
                            <i class="bx bx-power-off me-2"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>