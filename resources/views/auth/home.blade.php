@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Anda berhasil login!') }}
                    <p></p>
                    Silahkan klik <a href="{{ route('dashboard') }}">disini</a> untuk menuju Dashboard.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
