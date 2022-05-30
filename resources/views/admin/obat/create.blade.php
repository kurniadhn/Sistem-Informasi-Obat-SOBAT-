@extends('admin/layouts.template')

@section('content')
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Form elements</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
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
                <h3 class="mb-0">HTML5 inputs</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form method="POST" action="{{ route('obat.store') }}" enctype="multipart/form-data">
                  @csrf

                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Nama Obat</label>
                    <div class="col-md-10">
                      <input class="form-control" type="text" placeholder="Masukkan Nama Obat" name="name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Satuan</label>
                    <div class="col-md-10">
                      <select class="form-control" name="unit">
                        <option value="0">Pilih Satuan Obat</option>
                        <option value="Botol">Botol</option>
                        <option value="Box">Box</option>
                        <option value="Pack">Pack</option>
                        <option value="Piece">Piece</option>
                        <option value="Pot">Pot</option>
                        <option value="Sachet">Sachet</option>
                        <option value="Strip">Strip</option>
                        <option value="Suppositoria">Suppositoria</option>
                        <option value="Tablet">Tablet</option>
                        <option value="Test Kit">Test Kit</option>
                        <option value="Tube">Tube</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-number-input" class="col-md-2 col-form-label form-control-label">Harga</label>
                    <div class="col-md-10">
                      <input class="form-control" type="number" placeholder="25.000" name="price">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-number-input" class="col-md-2 col-form-label form-control-label mr-3">Gambar</label>
                      <div class="custom-file col-md-5">
                        <input type="file" class="custom-file-input" name="image" id="image">
                        <label class="custom-file-label" for="customFileLang">Select Image</label>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Jenis</label>
                    <div class="col-md-10">
                      <select class="form-control" name="type">
                        <option value="0">Pilih Jenis Obat</option>
                        @foreach($jenis_obats as $jenis_obat)
                        <option value="{{ $jenis_obat->id_jenis }}">{{ $jenis_obat->type }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  
                  <button class="btn btn-primary" style="float: right;" type="submit">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection