@extends('layouts.app')


@section('content')

    <div>
        <h1>
            Indice Comics &#8595;
        </h1>
        <div class="container">
            @foreach ($comics as $comic)
                <h3>
                    {{ $comic['title'] }}
                </h3>
                <div class="img_cont">
                    <img src="{{ $comic['thumb'] }}" alt="">
                </div>
                <div class="buttons_cont">

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

                </div>
                
            @endforeach
        </div>
    </div>
    
@endsection