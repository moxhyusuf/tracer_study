<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-10">
            <img src="<?= base_url('assets/img/logo/logo.png') ?>" style="width: 30px; height: 30px;">
        </div>
        <div class="sidebar-brand-text mx-2">Tracer Study</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider mt-0">

    <div class="sidebar-heading"></div>
    <li class="nav-item <?= $title == 'Respon Alumni' || $title == 'Respon Detail' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('admin') ?>">
            <i class="bi bi-people-fill"></i>
            <span>Respon Alumni</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('kuesioner') ?>">
            <span>Halaman Kuesioner</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout') ?>">
            <i class="bi bi-box-arrow-right"></i>
            <span>Logout</span>
        </a>
    </li>


    <!-- <hr class="sidebar-divider"> -->
</ul>