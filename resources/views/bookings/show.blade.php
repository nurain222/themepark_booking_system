@extends('adminlayout')

@section('content')

<!-- Begin Page Content -->
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Bookings/</span> Show Details</h4>

    <!-- Show Details -->
    <div class="col-xxl">
        <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Booking Record Information</h5>
        </div>
        <hr class="my-0" />
        <div class="card-body">
            <form>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" >Customer's Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" value=" {{$booking->customer->name}}" disabled />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" >Themepark Choosen</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" value=" {{$booking->themepark->park_name}}" disabled />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" >Quantity of the Tickets </label>
                <div class="col-sm-10">
                <input type="text" class="form-control" value=" {{$booking->quantity}}" disabled />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" >Valid Date</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" value=" {{$booking->date}}" disabled />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" >Total Price (RM)</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" value=" {{$booking->total_price}}" disabled />
                </div>
            </div>

            </form>

            <div class="row mb-3">
                <div class="col-sm-10">
                <a class="btn btn-primary" href="{{ route('bookings.index') }}"> Back</a> 
                </div>
            </div>

        </div>
        </div>
    </div>
<!-- End Page Content -->

@endsection