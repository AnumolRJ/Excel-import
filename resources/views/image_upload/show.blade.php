@extends('layouts.side')

@section('content')

<div>
    <div class="container-fluid">
        <div class="card card-primary">
            @if(session('success'))
                <div class="alert alert-success d-flex align-items-center" role="alert">
                  <i class="fas fa-check-circle"></i>
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                    {{ session('success') }}
                    </div>
                </div>
            @endif
            <div class="card-header">
                <h3 class="card-title">View Image</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="row" id="hide_image">
                        <div class="form-group col-md-6" id="imageContainer">
                            <img src="{{ asset('pictures/' . $image->image) }}" alt="Uploaded Image" name="image" id="uploadedImage">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>    

@endsection
