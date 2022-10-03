@extends('layouts.admin.app')

@section('title', 'Mata Pelajaran')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Mata Pelajaran</h1>
        <div class="section-header-button">
            <a href="{{ $route }}" class="btn btn-primary">Tambah Baru</a>
          </div>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item">Master Data</div>
          <div class="breadcrumb-item">Mata Pelajaran</div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">Daftar Mata Pelajaran</h2>
        <p class="section-lead">Daftar Mata Pelajaran yang diampu Guru</p>
      </div>

      <div class="table-responsive">
        <table id="example" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Mata Pelajaran</th>
                    <th>Kelas</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        </div>
    </section>
  </div>
@endsection

@section('script')

<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
        'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>

@endsection


