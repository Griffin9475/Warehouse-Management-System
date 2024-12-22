@php
    $usr = Auth::guard('web')->user();
@endphp
<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar menu-light  ">
    <div class="navbar-wrapper ">
        <div class="navbar-content scroll-div ">
            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Menu</label>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-home"></i></span><span class="pcoded-mtext">Home</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('home.dash') }}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-monitor"></i></span>
                        <span class="pcoded-mtext">Dashboard</span></a>
                </li>

                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link"><span class="pcoded-micon"><i
                                class=" feather icon-align-center"></i></span><span class="pcoded-mtext">Issue Item
                            Out</span></a>
                    <ul class="pcoded-submenu">
                        <li class="nav-item pcoded-hasmenu">
                            <a href="{{ route('Issue-out') }}" class="nav-link "><span class="pcoded-mtext">Initiate
                                    Request</span></a>
                        </li>
                        <li class="nav-item pcoded-hasmenu">
                            <a href="{{ route('item-issued-out') }}" class="nav-link "><span
                                    class="pcoded-mtext">Authorized Request
                                </span></a>
                        </li>
                        <li class="nav-item pcoded-hasmenu">
                            <a href="{{ route('aggregated-item') }}" class="nav-link "><span
                                    class="pcoded-mtext">Pending Issurance
                                </span></a>
                        </li>
                        {{-- <li class="nav-item pcoded-hasmenu">
                            <a href="{{ route('all-items-confirmed-issued') }}" class="nav-link "><span
                                    class="pcoded-mtext">Search Invoice
                                </span></a>
                        </li> --}}
                        <li class="nav-item pcoded-hasmenu">
                            <a href="{{ route('all-items-confirmed-issued') }}" class="nav-link "><span
                                    class="pcoded-mtext">Issued Request
                                </span></a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('personal-view') }}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-monitor"></i></span>
                        <span class="pcoded-mtext">Personnel</span></a>
                </li> --}}
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                class="feather icon-grid"></i></span><span class="pcoded-mtext">Instock
                            Items</span></a>
                    <ul class="pcoded-submenu">
                        <li class="nav-item pcoded-hasmenu">
                            <a href="{{ route('view-index') }}" class="nav-link "><span
                                    class="pcoded-mtext">Category</span></a>
                        </li>
                        <li class="nav-item pcoded-hasmenu">
                            <a href="{{ route('view-subcategory') }}" class="nav-link "><span class="pcoded-mtext">Sub
                                    Category</span></a>
                        </li>
                        <li class="nav-item pcoded-hasmenu">
                            <a href="{{ route('view-item') }}" class="nav-link "><span class="pcoded-mtext">Stock
                                    Item</span></a>
                        <li class="nav-item pcoded-hasmenu">
                            <a href="{{ route('viewpurchase') }}" class="nav-link "><span class="pcoded-mtext">Restock
                                    Item</span></a>
                        <li class="nav-item pcoded-hasmenu">
                            <a href="{{ route('viewsupp') }}" class="nav-link "><span
                                    class="pcoded-mtext">Supplier</span></a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                class="feather icon-settings"></i></span><span class="pcoded-mtext">
                            Setting</span></a>
                    <ul class="pcoded-submenu">
                        <li class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link "><span class="pcoded-mtext">Branch</span></a>
                            <ul class="pcoded-submenu">
                                <li>
                                    <a href="{{ route('view-unit') }}">Branch</a>
                                </li>
                                <li><a href="{{ route('add-unit') }}">Add Branch</a></li>
                            </ul>
                        </li>
                        <li class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link "><span class="pcoded-mtext">Roles and
                                    Permission</span></a>
                            <ul class="pcoded-submenu">
                                <li>
                                    <a href="{{ route('index-roles') }}">All Roles</a>
                                </li>
                                <li><a href="{{ route('create-roles') }}">Add Role</a></li>
                            </ul>
                        </li>
                        <li class="nav-item pcoded-hasmenu">
                            <a href="#!" class="nav-link "><span class="pcoded-mtext">Manage
                                    Users</span></a>
                            <ul class="pcoded-submenu">
                                <li>
                                    <a href="{{ route('index-user') }}">User List</a>
                                </li>
                                <li><a href="{{ route('create-user') }}">Add User</a></li>
                                <li>
                                    <a href="{{ route('audit.trail') }}">Audit
                                        Trail</a>
                                </li>
                                <li class="nav-item pcoded">
                                    <a href="{{ route('login_and_logout_activities') }}">User Logs
                                        Activies</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item pcoded">
                    <a href="{{ route('logout') }}" class="nav-link"><span class="pcoded-micon"><i
                                class="fas fa-sign-out-alt"></i></span><span class="pcoded-mtext">Logout</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
