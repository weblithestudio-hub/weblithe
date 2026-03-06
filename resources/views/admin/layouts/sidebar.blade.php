    <div class="main-sidebar">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="{{ route('admin.dashboard') }}">Admin Panel</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="{{ route('admin.dashboard') }}"></a>
            </div>

            <ul class="sidebar-menu">

                <li class=""><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i>
                        <span>Dashboard</span></a></li>

                <li class="nav-item dropdown active">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-vector-square"></i><span>Dropdown
                            Items</span></a>
                    <ul class="dropdown-menu">
                        <li class="active"><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Item 1</a>
                        </li>
                        <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Item 2</a>
                        </li>
                    </ul>
                </li>

                <li class=""><a class="nav-link" href="setting-logo.html"><i class="fas fa-cog"></i>
                        <span>Setting</span></a></li>

                <li class=""><a class="nav-link" href="form.html"><i class="fab fa-wpforms"></i> <span>Form</span></a>
                </li>

                <li class=""><a class="nav-link" href="table.html"><i class="fas fa-border-all"></i>
                        <span>Table</span></a></li>

                <li class=""><a class="nav-link" href="invoice.html"><i class="fas fa-receipt"></i>
                        <span>Invoice</span></a></li>
                <li>
                    <form method="POST" action="{{ route('admin.logout') }}">
    @csrf
    <a class="dropdown-item" href="{{ route('admin.logout') }}"
        onclick="event.preventDefault(); this.closest('form').submit();"><i class="fas fa-sign-out-alt"></i>
        Logout</a>
</form>
                </li>

            </ul>
        </aside>
    </div>
