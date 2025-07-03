<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-hospital"></i>
        </div>
        <div class="sidebar-brand-text mx-3">REKAM MEDIS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item <?= ($this->uri->segment(1) == '' ? 'active' : '') ?>">
        <a class="nav-link" href="<?= base_url() ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Master Data Heading -->
    <div class="sidebar-heading">
        Master Data
    </div>

    <!-- Dokter -->
    <li class="nav-item <?= ($this->uri->segment(1) == 'dokter' ? 'active' : '') ?>">
        <a class="nav-link" href="<?= base_url('dokter') ?>">
            <i class="fas fa-user-md"></i>
            <span>Dokter</span>
        </a>
    </li>

    <!-- Pasien -->
    <li class="nav-item <?= ($this->uri->segment(1) == 'pasien' ? 'active' : '') ?>">
        <a class="nav-link" href="<?= base_url('pasien') ?>">
            <i class="fas fa-procedures"></i>
            <span>Pasien</span>
        </a>
    </li>

    <!-- Tindakan -->
    <li class="nav-item <?= ($this->uri->segment(1) == 'tindakan' ? 'active' : '') ?>">
        <a class="nav-link" href="<?= base_url('tindakan') ?>">
            <i class="fas fa-stethoscope"></i>
            <span>Tindakan</span>
        </a>
    </li>

    <!-- Rekam Medis -->
    <li class="nav-item <?= ($this->uri->segment(1) == 'rekammedik' ? 'active' : '') ?>">
        <a class="nav-link" href="<?= base_url('rekammedik') ?>">
            <i class="fas fa-file-medical"></i>
            <span>Rekam Medik</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Laporan -->
    <div class="sidebar-heading">
        Laporan
    </div>

    <!-- Cetak Laporan -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-print"></i>
            <span>Cetak Laporan</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>