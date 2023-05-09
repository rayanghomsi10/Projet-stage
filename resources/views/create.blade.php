@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>New product</h2>
            </div>
            <div class="pull-right">
                <a href="{{url('/')}}" class="btn btn-primary">back</a>
            </div>
        </div>
    </div>


    @if($errors->any())
        <div class="alert alert-danger">
            <strong>whoops!</strong>problem<br><br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="col">
            <div class="col-xs-12 col md-12">
                <div class="form-group">
                    <strong>image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                </div>
            </div>

            <div class="col-xs-12 col md-12">
                <div class="form-group">
                    <strong>name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="name">
                </div>
            </div>
            <div class="col-xs-12 col md-12">
                <div class="form-group">
                    <strong>price:</strong>
                    <input type="number" name="price" class="form-control" placeholder="price">
                </div>
            </div>
            <div class="col-xs-12 col md-12">
                <div class="form-group">
                    <strong>description:</strong>
                    <textarea class="form-control" name="description" style="height: 150px" placeholder="desc"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col md-12 text-center">
                <button type="submit" class="btn btn-primary">submit</button>
            </div>
        </div>
    </form>
@endsection
