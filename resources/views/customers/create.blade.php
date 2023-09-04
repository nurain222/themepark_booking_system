@extends('adminlayout')

@section('content')

<!-- Begin Page Content -->
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Customers/</span> Add New</h4>

    <!-- Create new customers-->
    <div class="col-xxl">
        <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Customer's Information</h5>
            <small class="float-end">
                @if(Session::has('success'))
                <p class="text-success"> Customer is added successfully. </p>
                 @endif  
            </small>
        </div>
        <hr class="my-0" />
        <div class="card-body">
            <form method="POST" action="{{route('customers.store')}}">
                @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" >Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="eg: James Bucky Barnes"/>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" >Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" name="email" placeholder="eg: wintersoldier@gmail.com"/>
                </div>
            </div>
            
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" >Phone Number </label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="phone" placeholder="eg: 017-32557038" />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" >Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" name="password" placeholder="*Minumum 8 characters" />
                </div>
            </div>

            <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a class="btn btn-secondary" href="{{ route('customers.index') }}"> Back</a> 
                </div>
              </div>

            </form>
        </div>
        </div>
    </div>
<!-- End Page Content -->

@endsection





