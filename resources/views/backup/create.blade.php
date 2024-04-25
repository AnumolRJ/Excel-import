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
                    <h3 class="card-title">BackUp</h3>
                </div>

                <form action="{{route('backup.store')}}" method="post" onsubmit="function() { $('#submit').prop('disabled', true); }">
                    @csrf
                    <div class="card-body">
                    <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" id='submit' class="btn btn-primary">Download Backup</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

