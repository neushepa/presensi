@extends('layouts.admin.app')

@section('title', 'Inbox')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Inbox</h1>
        <div class="section-header-button">
            <a href="{{ $route }}" class="btn btn-primary">Tambah Baru</a>
          </div>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item">Pesan</div>
          <div class="breadcrumb-item">Inbox</div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">DAFTAR PESAN MASUK</h2>
        <p class="section-lead">Daftar Pesan Masuk</p>
      </div>

      <div class="table-responsive">
        <table id="example" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Tanggal</th>
                    <th>Pengirim</th>
                    <th>Pesan</th>
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


