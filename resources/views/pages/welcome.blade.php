@extends( 'layouts.app' )

@section('content')
    <h1>Card Movie</h1>

    <div class="row m-5">

        @foreach( $allMovies as $elem )
        <div class="card m-5" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$elem['title']}}</h5>
                <p class="card-text">{{$elem['date']}}</p>
            </div>
        </div>
        @endforeach

    </div>

@endsection