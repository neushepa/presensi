@extends('layouts.admin.app')

@section('title', 'Kelas')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>{{ $title }}</h1>
        <div class="section-header-button">
            <a href="{{ $route }}" class="btn btn-primary">Tambah Baru</a>
          </div>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item">Master Data</div>
          <div class="breadcrumb-item">Kelas</div>
        </div>
      </div>
      <div class="section-body">
        <h2 class="section-title">{{ $section_title }}</h2>
        <p class="section-lead">{{ $section_lead }}</p>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card mb-0">
            <div class="card-body">
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link active mr-4" href="">Jumlah Kelas <span class="badge badge-white"></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Pending <span class="badge badge-primary"></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="table-responsive">
        <table id="example" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Kelas</th>
                    <th>Wali Kelas</th>
                    <th>Telp Wali Kelas</th>
                    <th>Telp KM</th>
                    <th>Status</th>
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
