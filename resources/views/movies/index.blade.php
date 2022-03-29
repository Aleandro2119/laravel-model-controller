@extends('layouts.main')


@section('content')
<div class="container">

    <div class="row">
        @forelse ($movies as $movie)
        <div class="col">
            <div">
                <div>{{ $movie->title }}</div>
                <div>
                    <h4>Vote: {{ $movie->vote }}</h4>
                    <p>Published: {{ date('d M Y', strtotime($movie->date)) }}</p>
                </div>
        </div>
    </div>
    @empty
    @endforelse
</div>
</div>
@endsection