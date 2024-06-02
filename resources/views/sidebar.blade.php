<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{ route('dashboard') }}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-trophy me-2"></i>RANGKING</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Admin</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('dashboard') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{ route('siswa') }}" class="nav-item nav-link"><i class="fa fa-user-graduate me-2"></i>Siswa</a>
            <a href="#" class="nav-item nav-link"><i class="fa fa-book me-2"></i>Nilai</a>
            <a href="#" class="nav-item nav-link"><i class="fa fa-calendar-check me-2"></i>Peringkat</a>
            <a href="#" class="nav-item nav-link"><i class="fa fa-sign-out-alt me-2"></i>Logout</a>
        </div>
    </nav>
</div>