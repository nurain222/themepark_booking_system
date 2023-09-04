@extends('adminlayout')

@section('content')

<!-- Begin Page Content -->
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Themeparks/</span> Show Details</h4>

    <!-- Show Details -->
    <div class="col-xxl">
        <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Themepark Information</h5>
        </div>
        <hr class="my-0" />
        <div class="card-body">
            <form>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" >Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" value="{{$themepark->park_name}}" disabled />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-message">Details</label>
                <div class="col-sm-10">
                <textarea class="form-control" disabled> {{$themepark->park_details}} </textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" >Price (RM) </label>
                <div class="col-sm-10">
                <input type="text" class="form-control" value="{{$themepark->park_price}}" disabled />
                </div>
            </div>
            </form>

            <div>
                <div class="col-sm-10">
                <a class="btn btn-primary" href="{{ route('themeparks.index') }}"> Back</a> 
                </div>
            </div>

        </div>
        </div>
    </div>
<!-- End Page Content -->

@endsection