@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row row-gap-5">
                <div class="col-12">
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
            </div>
        </div>
    </section>
@endsection