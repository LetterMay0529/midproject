@extends('base')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-4 offset-4">
        <div class="card" style="margin-top: 30px;">
            <div class="card-header bg-danger text-white">
                <h3>Delete Item?</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/dashboard/delete/' . $item->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <h6 class="mt-2 mb-3">
                        Delete this item <strong>{{ $item->name }}</strong>? 
                    </h6>
                    
                    <div>
                        <button class="btn btn-danger" type="submit">Delete</button>
                        <a href="{{ url('/dashboard') }}" class="btn btn-warning text-white">Cancel</a>   
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection