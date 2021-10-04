@extends('base')

@section('content')

  <div class="container" ><br>
  <a href="{{url('/logout')}}" style="margin-right: 5px;" class="btn btn-info btn-sm d-inline float-end">
                      Logout
                  </a><br><br>
    <div class="card" style="margin-top: 30px;" >
      <div class="card-body">
      <div class="mb-1 float-end">
      <a href="{{url('dashboard/create')}}" class="btn btn-primary">
        Add Item
      </a>
    </div>
  <h1 class="text-blue ">LIST OF ITEMS</h1>
  <table class="table table-striped">
      <thead class="bg-secondary text-white" style="font-size: 1.1em;">
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>&nbsp;</th>
      </thead>
      <tbody>
          @foreach($items as $i)
          <tr>
              <td>{{$i->name}}</td>
              <td>{{$i->description}}</td>
              <td>{{$i->price}}</td>
              <td>{{$i->quantity}}</td>
              <td style="width: 150px;">
                  <a href="{{ url('dashboard/edit/' . $i->id) }}" style="margin-right: 5px;" class="btn btn-primary btn-sm d-inline">
                      Edit
                  </a>
                  <a href="{{ url('dashboard/delete/' . $i->id) }}" class="btn btn-danger btn-sm" type="submit">
                      Delete
                  </a>
              </td>
          </tr>
  
          @endforeach
      </tbody>
  </table>
  </div>
  </div> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </div>

@endsection