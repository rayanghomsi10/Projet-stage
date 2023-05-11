@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a href="{{url('/')}}" class="btn btn-primary">back</a>
            </div>
        </div>
    </div>


    <form action="{{route('update', $product->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="col">
            <div class="col-xs-12 col md-12">
                <div class="form-group">
                    <strong>image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="/images/{{$product->image}}" >
                </div>
            </div>

            <div class="col-xs-12 col md-12">
                <div class="form-group">
                    <strong>name:</strong>
                    <input type="text" name="name" value="{{$product->name}}" class="form-control" placeholder="name">
                </div>
            </div>
            <div class="col-xs-12 col md-12">
                <div class="form-group">
                    <strong>price:</strong>
                    <input type="number" name="price" value="{{$product->price}}" class="form-control" placeholder="price">
                </div>
            </div>
            <div class="col-xs-12 col md-12">
                <div class="form-group">
                    <strong>description:</strong>
                    <textarea class="form-control" style="height: 150px" name="description" style="height: 150px" placeholder="desc">{{$product->description}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col md-12 text-center">
                <button type="submit" class="btn btn-primary">submit</button>
            </div>
        </div>
    </form>
@endsection
