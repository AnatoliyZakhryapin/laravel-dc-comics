@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-auto me-auto">
                    <h1>Comics page content</h1>
                </div>
                <div class="col-auto">
                    <a href="{{ route('comics.create') }}" class="btn btn-sm btn-primary">Nuovo comics </a>
                </div>
            </div>
            <div class="row row-gap-5">
                @forelse ($comics as $comic)
                    <div class="col-3">
                        <div class="card">
                            <img src="{{ $comic->thumb}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{ route('comics.show', $comic) }}">
                                        {{ $comic->title }}
                                    </a>
                                </h5>
                                <p class="card-text">{{ $comic->description}}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Price: {{ $comic->price}}</li>
                                <li class="list-group-item">Series: {{ $comic->series}}</li>
                                <li class="list-group-item">Sale date: {{ $comic->sale_date}}</li>
                                <li class="list-group-item">Type: {{ $comic->type}}</li>
                            </ul>
                            <div class="card-body">
                                <form 
                                    action="{{ route('comics.destroy', $comic)}}"
                                    method="POST">

                                        @csrf

                                        @method('delete')

                                    <input type="submit" value="Delete">
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <h2>No comics</h2>
                @endforelse
                
            </div>
        </div>
    </section>
@endsection