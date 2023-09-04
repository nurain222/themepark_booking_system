@extends('adminlayout')

@section('content')
    
<!-- Begin Page Content -->
<div class="card">
    <h5 class="card-header">Booking Records Database
      <a href="{{route('bookings.create')}}" class="float-end btn btn-success btn-md">Add New + </a>
    </h5>

    @php
        echo $total;
    @endphp
    
    <div>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Customer's Name</th>
            <th>Themepark Name</th>
            <th>Quantity</th>
            <th>Date</th>
            <th>Total Price (RM)</th>
            <th width="200px">Actions</th>
          </tr>
        </thead>
        
        <tbody class="table-border-bottom-0">
            
          @foreach ($data as $d)
          <tr>
            <td> {{$d->id}} </td>
            <td> {{$d->customer->name }} </td>
            <td> {{$d->themepark->park_name}} </td>
            <td> {{$d->quantity}} </td>
            <td> {{$d->date}} </td>
            <td> {{$d->total_price}} </td>
            <td>
                <form action="{{ route('bookings.destroy',$d->id) }}" method="POST">

                    <a href="{{ route('bookings.show',$d->id) }}" class="btn btn-info btn-sm">
                      <i class="bx bx-show"></i> </a>
                      
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm"><i class="bx bx-trash me-1"></i> </button>

                </form>

            </td>
          </tr>
          @endforeach
        
        </tbody>
      </table>


      <div>
        <small class="float-end">
          @if(Session::has('success'))
              <p class="text-danger"> The booking record is deleted successfully. </p>
           @endif  
          </small>
      </div>

    </div>
  </div>
<!-- End Page Content -->
@endsection
