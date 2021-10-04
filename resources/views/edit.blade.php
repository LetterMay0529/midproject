@extends('base')

@section('content')
<div class="container"><br><br>
<div class="row">
    <div class="col-md-5 offset-4">
        <div class="card">
            <div class="card-header text-center  text-dark">
                <h3>Update Item</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/dashboard/edit/' . $item->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name"  value="{{$item->name}}" id="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <input type="text" name="description" value="{{$item->description}}" id="description" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="price">Price</label>
                        <input type="text" name="price" value="{{$item->price}}" id="price" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="quantity">Quantity</label>
                        <input type="text" name="quantity" value="{{$item->quantity}}" id="quantity" class="form-control">
                    </div>
                    <div class="row">
                    <div class="col">
                    <button class="btn btn-success" type="submit">Done</button>
                    </div>
                    <div class="col">
                    <div class="mt-2 float-end" ><a href="{{ url('/dashboard') }}" class="btn btn-warning text-white">Cancel</a></div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection