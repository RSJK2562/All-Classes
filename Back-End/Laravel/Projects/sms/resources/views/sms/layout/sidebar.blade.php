<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading"></div>
                <a class="nav-link" href="{{ url('/sms/dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">SMS</div>
                <a class="nav-link" href="{{ route('sms.student') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Student
                </a>
                <a class="nav-link" href="{{ route('sms.teacher') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Teacher
                </a>
                <a class="nav-link" href="{{ route('sms.courses') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Courses
                </a>
                <a class="nav-link" href="{{ route('sms.batches') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Batches
                </a>
                <a class="nav-link" href="{{ route('sms.enrollment') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Enrollment
                </a>
                <a class="nav-link" href="{{ route('sms.payment') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Payment
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <b>S.M.S</b>
        </div>
    </nav>
</div>
