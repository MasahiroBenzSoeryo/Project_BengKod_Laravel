@extends('layout.app')

@section('title', 'Tambah Obat')

@section('nav-item')
    <li class="nav-item">
        <a href="/dokter/dashboard" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="nav-item">
      <a href="/dokter/memeriksa" class="nav-link">
        <i class="nav-icon fas fa-solid fa-stethoscope"></i>
        <p>Memeriksa</p>
      </a>
    </li><li class="nav-item">
      <a href="/dokter/obat" class="nav-link">
        <i class="nav-icon fas fa-solid fa-capsules"></i>
        <p>Obat</p>
      </a>
    </li>
@endsection

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Obat</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Obat</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Form tambah obat</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="/dokter/obat">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_obat">Nama Obat</label>
                            <input type="text" class="form-control" id="nama_obat" name="nama_obat" placeholder="Masukkan nama obat">
                        </div>
                        <div class="form-group">
                            <label for="kemasan">Kemasan</label>
                            <input type="text" class="form-control" id="kemasan" name="kemasan" placeholder="Masukkan kemasan obat">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan harga obat">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection