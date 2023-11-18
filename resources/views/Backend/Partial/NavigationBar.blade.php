<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
            <img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Dashboard</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="index.html">Dashboard style 1</a></li>
                        <li><a href="index2.html">Dashboard style 2</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-edit2"></span><span class="mtext">Categories</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('Create.New.Category') }}">Add New Category</a></li>
                        <li><a href="{{ route('Categories.List') }}">Categories List</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-library"></span><span class="mtext">Customer</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="basic-table.html">Add New Customer</a></li>
                        <li><a href="datatable.html">Customers List</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-apartment"></span><span class="mtext">Product</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('Create.New.Product') }}">Add New Product</a></li>
                        <li><a href="{{ route('Products.List') }}">Products List</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-paint-brush"></span><span class="mtext">Brand</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('Create.New.Brand') }}">Add New Brand</a></li>
                        <li><a href="{{ route('Brand.List') }}">Brands List</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-analytics-21"></span><span class="mtext">Order</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="highchart.html">Add New Order</a></li>
                        <li><a href="knob-chart.html">Order List</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-right-arrow1"></span><span class="mtext">User</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('user.create.form') }}">Add New User</a></li>
                        <li><a href="{{ route('users.list') }}">Users List</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-browser2"></span><span class="mtext">Utility</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="400.html">Maintenance</a></li>
                        <li><a href="403.html">403</a></li>
                        <li><a href="404.html">404</a></li>
                        <li><a href="500.html">500</a></li>
                        <li><a href="503.html">503</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
