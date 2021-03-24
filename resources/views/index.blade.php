@extends('layouts.master')
@section('content')
    <style>
        h2 {
            text-align: center;
        }
        .pull-right {
            padding: 15px 0 15px;
            margin-left: 80%;
        }
        .bg-dark {
            color: white;
        }
        th,td {
            text-align: center;
        }
    </style>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="alert alert-success">Healthy Care</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-bordered">
                <tr class="bg-dark">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Tittle</th>
                    <th>Description</th>
                    <th>Address</th>
                    <th>File</th>
                    <th width="280px">Action</th>
                </tr>
                <tbody class="bg-light">
                @foreach ($products as $key=>$product)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->tittle }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->address }}</td>
                        <td><img src="{{asset('image/img/'.$product->file)}}" alt="" width="100"height="70px"></td>
                        <td>
                            <a href="{{ route('show',['id'=>$product->id]) }}" class="btn btn-primary">Show</a>
                            <a href="{{route('edit',['id'=>$product->id])}}" class = "btn btn-info">Edit</a>
                            <a href="{{route('destroy',['id'=>$product->id])}}" class = "btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $products->links() !!}
        </div>
    </div>
@endsection