@extends('user/layouts.template')

@section('content')
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Setting</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}"><i class="fas fa-home"></i></a></li>
                  <!-- <li class="breadcrumb-item"><a href="#">Forms</a></li> -->
                  <li class="breadcrumb-item active" aria-current="page">My profile</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <!-- <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
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
                <h3 class="mb-0">My Profile</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                
              @if ($message = Session::get('update'))
              <div class="alert alert-info alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-check-bold"></i></span>
                <span class="alert-text"><strong>{{ $message }}</strong></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif

                <form method="POST" action="{{ route('user.updateProfile') }}" enctype="multipart/form-data">
                  @csrf

                  @foreach($users as $user)
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Nama Lengkap</label>
                    <div class="col-md-10">
                      <input class="form-control" type="text" value="{{ $user->name }}" name="name" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-number-input" class="col-md-2 col-form-label form-control-label">No HP</label>
                    <div class="col-md-10">
                      <input class="form-control" type="number" value="{{ $user->phone }}" name="phone" maxlength="15" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Alamat</label>
                    <div class="col-md-10">
                      <input class="form-control" type="text" value="{{ $user->address }}" name="address" required>
                    </div>
                  </div>
                  @endforeach
                  <!-- Image -->
                  <!-- <div class="form-group row">
                    <label for="example-number-input" class="col-md-2 col-form-label form-control-label mr-3">Gambar</label>
                      <div class="custom-file col-md-5">
                        <input type="file" class="custom-file-input" name="image" id="image">
                        <label class="custom-file-label" for="customFileLang">Select Image</label>
                      </div>
                  </div> -->
                  
                  <button class="btn btn-primary" style="float: right;" type="submit">Submit</button>
                  <a href="{{ route('user.dashboard') }}" class="btn btn-secondary mr-3 float-right">Cancel</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection