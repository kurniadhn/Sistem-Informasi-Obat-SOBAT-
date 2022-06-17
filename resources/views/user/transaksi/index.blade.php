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
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <!-- <li class="breadcrumb-item"><a href="#">Tables</a></li> -->
                  <li class="breadcrumb-item active" aria-current="page">Daftar Transaksi</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <!-- <a href="#" class="btn btn-sm btn-neutral">New</a> -->
              <!-- <a href="{{ '' }}" class="btn btn-sm btn-neutral">Tambah Data</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
            
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <span class="alert-icon"><i class="ni ni-check-bold"></i></span>
              <span class="alert-text"><strong>{{ $message }}</strong></span>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif

            @if ($message = Session::get('update'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
              <span class="alert-icon"><i class="ni ni-check-bold"></i></span>
              <span class="alert-text"><strong>{{ $message }}</strong></span>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif
            
            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <span class="alert-icon"><i class="ni ni-check-bold"></i></span>
              <span class="alert-text"><strong>{{ $message }}</strong></span>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif

              <h3 class="mb-0">Daftar Transaksi</h3>
              <p class="text-sm mb-0">
                Menampilkan daftar transaksi user.
              </p>
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-buttons">
                <thead class="thead-light">
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Bukti Transaksi</th>
                    <th>Metode Pembayaran</th>
                    <th>ID Paket</th>
                    <th>ID Obat</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <!-- <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Kreatifitas</th>
                    <th>Gambar</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot> -->
                <tbody>
                  @foreach ($transaksis as $transaksi)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ date('d F Y', strtotime($transaksi->date)) }}</td>
                    <td><a href="{{ asset('img/transaksi/' . $transaksi->image) }}" target="__blank">{{ $transaksi->image }}</a></td>
                    <td>{{ $transaksi->method }}</td>
                    <td>{{ $transaksi->id_paket }}</td>
                    <td>{{ $transaksi->id_obat }}</td>
                    <td class="table-actions">
                      <a href="{{ route('user.transaksi.destroy', $transaksi->id_transaksi) }}" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                        <i class="fas fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection