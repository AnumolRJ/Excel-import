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
                <h3 class="card-title">Update Account Category</h3>
              </div>
              
                <form action="{{route('account_categories.update',$category->ac_id)}}" method="post" >
                @csrf
                @method("PATCH")
                <div class="card-body">
                  <div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Category</label>
                        <input type="text" class="form-control" name="account_category" value="{{$category->account_category}}"  placeholder="" required>
                      </div>
                  </div>
                  
                           
                <!-- /.card-body -->
        
                <div class="card-footer">
                  <button type="submit" id='update' class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
        
        </div>
 
    </div>
</div>    

@endsection
