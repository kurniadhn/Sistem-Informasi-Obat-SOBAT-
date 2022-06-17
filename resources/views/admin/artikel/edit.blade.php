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
                <form method="POST" action="{{ route('artikel.update', $artikel->id_artikel) }}" enctype="multipart/form-data">
                  @csrf

                  <div>
                      <input type="hidden" name="id" value="{{ $artikel->id }}">  
                      <input type="hidden" name="oldImage" value="{{ $artikel->image }}">  
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Judul Artikel</label>
                    <div class="col-md-10">
                      <input class="form-control" type="text" value="{{ $artikel->title }}" name="title">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-date-input" class="col-md-2 col-form-label form-control-label">Tanggal</label>
                    <div class="col-md-10">
                      <input class="form-control" type="date" value="{{ $artikel->date }}" name="date">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2 col-form-label form-control-label" for="exampleFormControlTextarea2">Deskripsi</label>
                    <div class="col-md-10">
                      <textarea class="form-control" name="description" rows="3" resize="none">{{ $artikel->description }}</textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-number-input" class="col-md-2 col-form-label form-control-label mr-3">Gambar</label>
                      <div class="custom-file col-md-5">
                        <input type="file" class="custom-file-input" name="image" id="image">
                        <label class="custom-file-label" for="customFileLang">{{ $artikel->image }}</label>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-url-input" class="col-md-2 col-form-label form-control-label">URL</label>
                    <div class="col-md-10">
                      <input class="form-control" type="url" value="{{ $artikel->url }}" name="url">
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