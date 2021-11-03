@extends('layouts.app')


@section('content')

    <div>
        <h1>
            indice comics &#8595;
        </h1>
        <div class="container">
            @foreach ($comics as $comic)
                <h3>
                    {{ $comic['title'] }}
                </h3>
                <button>
                    <a href="{{ route('comics.show', $comic['id']) }}">Dettagli</a>
                </button>
                <button>
                    <a href="{{ route('comics.edit', $comic['id']) }}">Modify</a>
                </button>
                <button>
                    <a href="">Delete</a>
                </button>
            @endforeach
        </div>
    </div>
    
@endsection