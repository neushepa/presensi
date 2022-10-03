@extends('layouts.admin.app')

@section('title', 'Mesin Finger')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>{{ $title }}</h1>
        <div class="section-header-button">
            <a href="{{ $route }}" class="btn btn-primary">Pengaturan</a>
          </div>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item">Pengaturan</div>
          <div class="breadcrumb-item">Mesin Finger</div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">{{ $section_title }}</h2>
        <p class="section-lead">{{ $section_lead }}</p>
      </div>

      <div class="table-responsive">
        <table id="example" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Mode Komunikasi</th>
                    <th>IP Adress</th>
                    <th>Password Komunikasi</th>
                    <th>NO Mesin</th>
                    <th>PORT</th>
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


