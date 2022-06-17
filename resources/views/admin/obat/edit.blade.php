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
                <form method="POST" action="{{ route('obat.update', $obat->id_obat) }}" enctype="multipart/form-data">
                  @csrf

                  <div>
                      <input type="hidden" name="id" value="{{ $obat->id_obat }}">  
                      <input type="hidden" name="oldImage" value="{{ $obat->image }}">  
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Nama Obat</label>
                    <div class="col-md-10">
                      <input class="form-control" type="text"value="{{ $obat->obat }}" name="name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Satuan</label>
                    <div class="col-md-10">
                      <select class="form-control" name="unit">
                        <option value="Botol" {{ ( $obat->unit == "Botol" ) ? 'selected' : '' }} >Botol</option>
                        <option value="Box" {{ ( $obat->unit == "Box" ) ? 'selected' : '' }} >Box</option>
                        <option value="Pack" {{ ( $obat->unit == "Pack" ) ? 'selected' : '' }} >Pack</option>
                        <option value="Piece" {{ ( $obat->unit == "Piece" ) ? 'selected' : '' }} >Piece</option>
                        <option value="Pot" {{ ( $obat->unit == "Pot" ) ? 'selected' : '' }} >Pot</option>
                        <option value="Sachet" {{ ( $obat->unit == "Sachet" ) ? 'selected' : '' }} >Sachet</option>
                        <option value="Strip" {{ ( $obat->unit == "Strip" ) ? 'selected' : '' }} >Strip</option>
                        <option value="Suppositoria" {{ ( $obat->unit == "Suppositoria" ) ? 'selected' : '' }} >Suppositoria</option>
                        <option value="Tablet" {{ ( $obat->unit == "Tablet" ) ? 'selected' : '' }} >Tablet</option>
                        <option value="Test Kit" {{ ( $obat->unit == "Test Kit" ) ? 'selected' : '' }} >Test Kit</option>
                        <option value="Tube" {{ ( $obat->unit == "Tube" ) ? 'selected' : '' }} >Tube</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-number-input" class="col-md-2 col-form-label form-control-label">Harga</label>
                    <div class="col-md-10">
                      <input class="form-control" type="number" value="{{ $obat->price }}" name="price">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-number-input" class="col-md-2 col-form-label form-control-label mr-3">Gambar</label>
                      <div class="custom-file col-md-5">
                        <input type="file" class="custom-file-input" name="image" id="image">
                        <label class="custom-file-label" for="customFileLang">{{ $obat->image }}</label>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Jenis</label>
                    <div class="col-md-10">
                      <select class="form-control" name="type">
                        <option value="1" {{ ( $obat->id_jenis == "1" ) ? 'selected' : '' }} >Alat Kesehatan</option>
                        <option value="2" {{ ( $obat->id_jenis == "2" ) ? 'selected' : '' }} >Antibiotik Anti Jamur Antivirus</option>
                        <option value="3" {{ ( $obat->id_jenis == "3" ) ? 'selected' : '' }} >Batuk & Flu</option>
                        <option value="4" {{ ( $obat->id_jenis == "4" ) ? 'selected' : '' }} >Demam Sakit Kepala</option>
                        <option value="5" {{ ( $obat->id_jenis == "5" ) ? 'selected' : '' }} >Mata</option>
                        <option value="6" {{ ( $obat->id_jenis == "6" ) ? 'selected' : '' }} >Minyak Angin & Balsam</option>
                        <option value="7" {{ ( $obat->id_jenis == "7" ) ? 'selected' : '' }} >Mulut Tenggorokan dan Pernafasan</option>
                        <option value="8" {{ ( $obat->id_jenis == "8" ) ? 'selected' : '' }} >P3K</option>
                        <option value="9" {{ ( $obat->id_jenis == "9" ) ? 'selected' : '' }} >Saluran Pencernaan</option>
                        <option value="10" {{ ( $obat->id_jenis == "10" ) ? 'selected' : '' }} >Tekanan Darah Tinggi</option>
                      </select>
                    </div>
                  </div>
                  
                  <button type="submit" class="btn btn-primary float-right">Submit</button>
				          <a href="{{ '/admin/obat' }}" class="btn btn-secondary mr-3 float-right">Cancel</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection