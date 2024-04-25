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
                <h3 class="card-title">Image Upload</h3>
              </div>

                <form action="{{route('image_upload.store')}}" method="post" enctype="multipart/form-data" onsubmit="function() { $('#submit').prop('disabled', true); }">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Image</label>
                            <input class="form-control" type="file" name="image" id="formFile">
                             @error('image')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" id='submit' class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        </div>

    </div>
</div>


@endsection
