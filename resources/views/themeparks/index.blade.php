@extends('adminlayout')

@section('content')
    
<!-- Begin Page Content -->
<div class="card">
    <h5 class="card-header">Themeparks Database
      <a href="{{route('themeparks.create')}}" class="float-end btn btn-success btn-md">Add New + </a>
    </h5>
    
    <div>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th width="600px">Details</th>
            <th>Price</th>
            <th width="200px">Actions</th>
          </tr>
        </thead>
        
        <tbody class="table-border-bottom-0">
            
          @foreach ($data as $d)
          <tr>
            <td> {{$d->id}} </td>
            <td> {{$d->park_name}} </td>
            <td> {{$d->park_details}} </td>
            <td> {{$d->park_price}} </td>
            <td>
                <form action="{{ route('themeparks.destroy',$d->id) }}" method="POST">

                    <a href="{{ route('themeparks.show',$d->id) }}" class="btn btn-info btn-sm">
                      <i class="bx bx-show"></i> </a>

                    <a href="{{ route('themeparks.edit',$d->id) }}"  class="btn btn-primary btn-sm">
                      <i class="bx bx-edit-alt me-1"></i>  </a>

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
              <p class="text-danger"> Themepark is deleted successfully. </p>
           @endif  
          </small>
      </div>

    </div>
  </div>
<!-- End Page Content -->
@endsection
