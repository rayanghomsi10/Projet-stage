@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel CRUD</h2>
            </div>
            <div class="pull-right" style="margin-bottom: 10px;">
                <a href="{{url('create')}}" class="btn btn-success">Create product</a>
            </div>
        </div>
    </div>

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>image</th>
            <th>name</th>
            <th>price</th>
            <th>description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td><img src="images/{{$product->image}}" width="100px"></td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <form action="{{route('destroy', $product->id)}}" method="post">
                        <a href="{{route('show', $product->id)}}" class="btn btn-info">show</a>

                        <a href="{{route('edit', $product->id)}}" class="btn btn-primary">edit</a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $products->links() }}

   @endsection
