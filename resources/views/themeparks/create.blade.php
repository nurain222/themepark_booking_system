@extends('adminlayout')

@section('content')

<!-- Begin Page Content -->
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Themeparks/</span> Add New</h4>

    <!-- Create new themepark -->
    <div class="col-xxl">
        <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Themepark Information</h5>
            <small class="float-end">
                @if(Session::has('success'))
                <p class="text-success"> Themepark is added successfully. </p>
                 @endif  
            </small>
        </div>
        <hr class="my-0" />
        <div class="card-body">
            <form method="POST" action="{{route('themeparks.store')}}">
                @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" >Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="Name of the themepark (eg: Marine Park)"/>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Details</label>
                <div class="col-sm-10">
                <textarea class="form-control" name="details" placeholder="Description of the themepark"></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" >Price (RM) </label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="price" placeholder="Price per ticket in (eg: 42.00)" />
                </div>
            </div>

            <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a class="btn btn-secondary" href="{{ route('themeparks.index') }}"> Back</a> 
                </div>
              </div>

            </form>
        </div>
        </div>
    </div>
<!-- End Page Content -->

@endsection





