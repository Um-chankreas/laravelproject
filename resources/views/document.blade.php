    @extends ('header.link')
    @extends ('Layouts.master')
    <style>
        .card {
            width: 78%;
            height: auto;
            margin: auto;
            margin-top: 10%;
        }
        .card-body {
            text-align: center;
        }
    </style>


@include('header.navba')
@section('content')
    @foreach ($products as $product)
        <div class="card mb-3">
            <img src="{{asset('image/img/'.$product->file)}}" class="card-img-top" class="img-fluid" alt="Responsive image">
            <div class="card-body">
                <h3 class="card-title">{{ $product->tittle }}</h3>
                <p class="card-text">{{ $product->description }}</p>
                <p class="card-text"><small class="text-muted">{{ $product->created_at }}</small></p>
            </div>
        </div>
    @endforeach
@endsection

