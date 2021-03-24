@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row mt-5">
        <div class="col-sm-8 offset-sm-2">
            <form action="{{route('store')}}" method = "post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="firstname">Name:</label>
                    <input type="text" name = "name" id = "name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tittle">Tittle:</label>
                    <input type="text" name = "tittle" id = "username" class="form-control" required>
                </div>
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Preference</label>
                <select type="text" name="gender"class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                    <option selected>Choose...</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                <div class="form-group">
                    <label for="department">Description:</label>
                    <input type="text" name = "description" id = "description" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="lastname">Country:</label>
                    <input type="text" name = "country" id = "country" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="lastname">City:</label>
                    <input type="text" name = "city" id = "city" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phone">Address:</label>
                    <input type="text" name = "address" id = "adress" class="form-control" required>
                </div>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input"name="file">
                        <label class="custom-file-label">Choose file</label>
                    </div>
                </div><br>
                <button type = "submit" class = "btn btn-success">Submit</button>
            </form>
        </div>
    </div>
@endsection