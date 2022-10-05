<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical sidenav-dark bg-dark">
    <!-- Brand demo (see {{asset('assets/css/demo/demo.css')}}) -->
    <div class="app-brand demo">
        <span class="app-brand-logo demo">
            <img src="{{asset('assets/img/logo.png')}}" alt="Brand Logo" class="img-fluid">
        </span>
        <a href="index-2.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Auric</a>
        <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
            <i class="ion ion-md-menu align-middle"></i>
        </a>
    </div>
    <div class="sidenav-divider mt-0"></div>
    <ul class="sidenav-inner py-1">

        <!-- Dashboards -->
        <li class="sidenav-item">
            <a href="javascript:" class="sidenav-link">
                <i class="sidenav-icon feather icon-monitor"></i>
                <div>Dashboard</div>
            </a>
        </li>

        <!-- UI Components -->
        <li class="sidenav-divider mb-1"></li>
        <li class="sidenav-header small font-weight-semibold">Master Data</li>
        <li class="sidenav-item">
            <a href="{{url('student')}}" class="sidenav-link">
                <i class="sidenav-icon feather icon-users"></i>
                <div>Students</div>
            </a>
        </li>
        <li class="sidenav-item">
            <a href="{{url('studentclass')}}" class="sidenav-link">
                <i class="sidenav-icon feather icon-server"></i>
                <div>Classes</div>
            </a>
        </li>
        <li class="sidenav-item">
            <a href="{{url('teacher')}}" class="sidenav-link">
                <i class="sidenav-icon feather icon-users"></i>
                <div>Teachers</div>
            </a>
        </li>
        <li class="sidenav-item">
            <a href="{{url('product')}}" class="sidenav-link">
                <i class="sidenav-icon feather icon-folder"></i>
                <div>Products</div>
            </a>
        </li>
        <li class="sidenav-item">
            <a href="{{url('transaction')}}" class="sidenav-link">
                <i class="sidenav-icon feather icon-list"></i>
                <div>Transactions</div>
            </a>
        </li>
    </ul>
</div>
