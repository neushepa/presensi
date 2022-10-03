<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html"><img src="{{ asset('/assets/img/Logo.png') }}" style="height: 45px; margin-top: 10px;"></a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">PB</a>
      </div>
      <ul class="sidebar-menu">

        <div class="mt-4 p-3 hide-sidebar-mini">
            <a href="/" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-th-large"></i> Dashboard
            </a>
          </div>

        <li class="dropdown active">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Data Master</span></a>
          <ul class="dropdown-menu">
            <li class=active><a class="nav-link" href="{{ route('mapel.index') }}">Mata Pelajaran</a></li>
            <li><a class="nav-link" href="{{ route('guru_staff.index') }}">Guru/Staff</a></li>
            <li><a class="nav-link" href="{{ route('kelas.index') }}">Kelas</a></li>
            <li><a class="nav-link" href="{{ route('guru_mapel.index') }}">Guru Mapel</a></li>
            <li><a class="nav-link" href="{{ route('jadwal.index') }}">Jadwal</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Presensi</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('absensi_guru.index') }}">Absensi Guru</a></li>
            <li><a class="nav-link" href="{{ route('absensi_staff.index') }}">Absensi Staff</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Pesan</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('inbox.index') }}">Inbox</a></li>
            <li><a class="nav-link" href="{{ route('outbox.index') }}">Outbox</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Pengaturan</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('whatsapp_gateway.index') }}">Whatshapp Gateway</a></li>
            <li><a class="nav-link" href="{{ route('mesin_finger.index') }}">Mesin Finger</a></li>
            <li><a class="nav-link" href="{{ route('pengguna.index') }}">Pengguna</a></li>
         </ul>
        </li>
  </div>
