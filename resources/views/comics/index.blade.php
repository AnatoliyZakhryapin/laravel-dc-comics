@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Comics page content</h1>
                </div>
            </div>
            <div class="row row-gap-5">
                @forelse ($comics as $comic)
                    <div class="col-6">
                        <div class="card">
                            <img src="{{ $comic->thumb}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic->title }}</h5>
                                <p class="card-text">{{ $comic->description}}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Price: {{ $comic->price}}</li>
                                <li class="list-group-item">Series: {{ $comic->series}}</li>
                                <li class="list-group-item">Sale date: {{ $comic->sale_date}}</li>
                                <li class="list-group-item">Type: {{ $comic->type}}</li>
                               
                            </ul>
                        </div>
                    </div>
                @empty
                    <h2>No comics</h2>
                @endforelse
                
            </div>
        </div>
    </section>
@endsection