<!-- [ navigation menu ] start -->
@section('sidenav')
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="index.html" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div>
                    <span class="b-title">School Veil</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project"
                        class="nav-item pcoded-hasmenu {{Route::is('dashboard') ? 'active' : ''}}">
                        <a href="{{route('dashboard')}}" class="nav-link"><span class="pcoded-micon"><i
                                    class="fas fa-home"></i></span><span
                                class="pcoded-mtext">Dashboard</span></a>
                    </li>
                    <li data-username="Vertical Horizontal Box Layout RTL fixed static Collapse menu color icon dark"
                        class="nav-item pcoded-hasmenu {{Route::is('students.index') ? 'active' : ''}}">
                        <a href="{{route('students.index')}}" class="nav-link"><span class="pcoded-micon"><i
                                    class="fas fa-user-graduate"></i></span><span
                                class="pcoded-mtext">Students</span></a>
                    </li>
                    <li data-username="widget Statistic Data Table User card Chart"
                        class="nav-item pcoded-hasmenu {{Route::is('subjects.index') ? 'active' : ''}}">
                        <a href="{{route('subjects.index')}}" class="nav-link"><span class="pcoded-micon"><i
                                    class="fas fa-book"></i></span><span
                                class="pcoded-mtext">Subjects</span></a>
                    </li>
                    <li data-username="widget Statistic Data Table User card Chart"
                        class="nav-item pcoded-hasmenu {{Route::is('assessments.index') ? 'active' : ''}}">
                        <a href="{{route('assessments.index')}}" class="nav-link"><span class="pcoded-micon"><i
                                    class="fas fa-book-open"></i></span><span
                                class="pcoded-mtext">Assessments</span></a>
                    </li>
                    <li data-username="widget Statistic Data Table User card Chart" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-layers"></i></span><span class="pcoded-mtext">Grading</span></a>
                    </li>
                    <li data-username="widget Statistic Data Table User card Chart" class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i
                                    class="feather icon-layers"></i></span><span class="pcoded-mtext">Reports</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@show
<!-- [ navigation menu ] end -->
