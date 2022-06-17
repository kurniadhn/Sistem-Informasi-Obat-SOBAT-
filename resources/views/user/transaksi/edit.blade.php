@extends('user/layouts.template')

@section('content')
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Transaksi</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{ route('user.transaksi.index') }}">Daftar Transaksi</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tambah Transaksi</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <!-- <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Tambah Data</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-lg-12">
          <div class="card-wrapper">
            <!-- HTML5 inputs -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Edit Transaksi</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form method="POST" action="{{ route('user.transaksi.update', $transaksi->id_transaksi) }}" enctype="multipart/form-data">
                  @csrf

                  <input type="hidden" name="id" value="{{ $transaksi->id_transaksi }}">  
                  <input type="hidden" name="oldImage" value="{{ $transaksi->image }}">

                  <div class="form-group row">
                    <label for="example-number-input" class="col-md-2 col-form-label form-control-label">Tanggal</label>
                    <div class="col-md-10">
                      <input class="form-control" type="date" value="{{ $transaksi->date }}" name="date" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Metode Pembayaran</label>
                    <div class="col-md-10">
                      <input class="form-control" type="text" value="{{ $transaksi->method }}" name="method" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Total</label>
                    <div class="col-md-10">
                      <input class="form-control" type="text" value="{{ $transaksi->total }}" name="total" disabled>
                    </div>
                  </div>
                  <!-- Gambar -->
                  <div class="form-group row">
                    <label for="example-number-input" class="col-md-2 col-form-label form-control-label mr-3">Upload Gambar</label>
                      <div class="custom-file col-md-5">
                        <input type="file" class="custom-file-input" name="image">
                        <label class="custom-file-label" for="customFileLang">{{ $event->image }}</label>
                      </div>
                  </div>
                  
                  <button class="btn btn-primary" style="float: right;" type="submit">Submit</button>
                  <a href="{{ route('user.transaksi.index') }}" class="btn btn-secondary mr-3 float-right">Cancel</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection