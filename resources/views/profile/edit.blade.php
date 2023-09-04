@extends('adminlayout')

@section('content')

<!-- Begin Page Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> Profile Settings</h4>

    <div class="row">
      <div class="col-md-12">
        <div class="card mb-4">

          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Profile Details</h5>
            <small class="float-end">
                @if(Session::has('success'))
                <p class="text-success"> Profile is updated successfully. </p>
                @endif   
            </small>
        </div>

          <!-- Account -->
          <hr class="my-0" />
          <!-- Edit Details -->
            <div class="card-body">
                <form method="POST" action="{{route('profile.update', auth()->user()->id)}}">
                    @csrf
                    @method('PUT')
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" >Name</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="{{$profile->name}}" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" >Email</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" value="{{$profile->email}}" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" >Phone Number </label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="phone"  value="{{$profile->phone_number}}" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" >Password </label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" name="password"  placeholder="*******" />
                    </div>
                </div>

                <div class="row justify-content-end">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <a class="btn btn-secondary" href="{{ route('dashboard') }}"> Back</a> 
                    </div>
                  </div>

                </form>
            </div>
          <!-- /Account -->
        </div>

      </div>
    </div>
  </div>

<!-- End Page Content -->
@endsection