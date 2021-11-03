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
                <form method="POST" action="{{ route('comics.destroy', $comic['id']) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            @endforeach
        </div>
    </div>
    
@endsection