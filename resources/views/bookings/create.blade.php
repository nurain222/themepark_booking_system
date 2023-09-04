@extends('adminlayout')

@section('content')

<!-- Begin Page Content -->
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Bookings/</span> Add New</h4>

    <!-- Create new customers-->
    <div class="col-xxl">
        <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Book a Ticket for the Customers</h5>
            <small class="float-end">
                @if(Session::has('success'))
                <p class="text-success"> Booking is added successfully. </p>
                 @endif  
            </small>
        </div>
        <hr class="my-0" />
        <div class="card-body">
            <form  method="POST" action="{{route('bookings.store')}}">
                @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" > Customer's Name </label>
                <div class="col-sm-10">
                <select id="defaultSelect" class="form-select" name="customer">
                    <option value=""> --- Choose a customer --- </option>
                        @foreach ($customers as $id => $name)
                        <option value="{{$id}}" > 
                            {{ (isset($booking['cust_id']) && $booking['cust_id'] == $id) ? ' selected' : '' }} {{$name}}
                        </option>
                        @endforeach
                </select>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" > Themepark </label>
                <div class="col-sm-10">
                <select id="defaultSelect" class="form-select" name="park">
                    <option value=""> --- Choose a themepark --- </option>
                    @foreach ($themeparks as $id => $name)
                        <option value="{{$id}}" > 
                            {{ (isset($booking['park_id']) && $booking['park_id'] == $id) ? ' selected' : '' }} {{$name}}
                        </option>
                        @endforeach
                </select>
                </div>
            </div>
            
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" > Quantity </label>
                <div class="col-sm-10">
                <input type="number" class="form-control" name="quantity" placeholder="eg: 2" />
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" >Date</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" name="date"/>
                </div>
            </div>

            <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a class="btn btn-secondary" href="{{ route('bookings.index') }}"> Back</a> 
                </div>
              </div>

            </form>
        </div>
        </div>
    </div>
<!-- End Page Content -->

@endsection





