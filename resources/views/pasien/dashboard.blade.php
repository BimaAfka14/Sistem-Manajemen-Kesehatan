@include('layouting.header', ['title' => 'Dashboard Pasien'])
<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item menu-open">
      <a href="{{ route('dashboardPasien') }}" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('periksaPasien') }}" class="nav-link">
        <i class="nav-icon fas fa-search"></i>
        <p>Periksa</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="nav-icon fas fa-lock"></i>
        <p>Logout</p>
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </li>
  </ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

<!-- Content Wrapper -->
<div class="content-wrapper">
  <!-- Content Header -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-teal">Dashboard Pasien</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  <section class="content">
    <div class="container-fluid">

      <!-- Notifikasi -->
      <div class="alert alert-info">
        <i class="fas fa-pills"></i> Jangan lupa minum obat hari ini pukul 08:00 dan 20:00!
      </div>

      <!-- Stat Box -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="small-box" style="background-color: #e0f7fa; color: #004d40;">
            <div class="inner">
              <h3>{{ $jumlahRiwayat ?? 0 }}</h3>
              <p>Riwayat Pemeriksaan</p>
            </div>
            <div class="icon">
              <i class="fas fa-notes-medical"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box" style="background-color: #d0f0c0; color: #33691e;">
            <div class="inner">
              <h3>{{ $kunjunganHariIni ?? 0 }}</h3>
              <p>Kunjungan Hari Ini</p>
            </div>
            <div class="icon">
              <i class="fas fa-user-check"></i>
            </div>
            <a href="#" class="small-box-footer text-dark">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box" style="background-color: #f1f8e9; color: #558b2f;">
            <div class="inner">
              <h3>{{ $jumlahPasien ?? 0 }}</h3>
              <p>Pasien Terdaftar</p>
            </div>
            <div class="icon">
              <i class="fas fa-user-plus"></i>
            </div>
            <a href="#" class="small-box-footer text-dark">Lihat Semua <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="small-box" style="background-color: #e3f2fd; color: #1565c0;">
            <div class="inner">
              <h3>{{ $jumlahPengunjung ?? 0 }}</h3>
              <p>Pengunjung Unik</p>
            </div>
            <div class="icon">
              <i class="fas fa-users"></i>
            </div>
            <a href="#" class="small-box-footer text-dark">Statistik <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>

      <!-- Kartu Informasi Tambahan -->
      <div class="row">
        <div class="col-md-6">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-header bg-light">
              <h3 class="card-title text-success">Jadwal Kontrol Berikutnya</h3>
            </div>
            <div class="card-body">
              <p><strong>Tanggal:</strong> {{ $jadwalKontrol ?? 'Belum ada jadwal' }}</p>
              <p><strong>Dokter:</strong> {{ $namaDokter ?? '-' }}</p>
              <p><strong>Poli:</strong> {{ $namaPoli ?? '-' }}</p>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-header bg-light">
              <h3 class="card-title text-info">Pesan Dokter</h3>
            </div>
            <div class="card-body">
              <p>{{ $pesanDokter ?? 'Tidak ada pesan terbaru.' }}</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>

@include('layouting.footer')
