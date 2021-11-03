@extends('layouts.app')

@section('content')

    <form action="{{ route('comics.update', $comics['id']) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div>
            <label for="">Title</label>
            <input value="{{ $comics['title'] }}" type="text" name="title" placeholder="Comic's title">
        </div>
        <div>
            <label for="">Description</label>
            <input value="{{ $comics['description'] }}" type="text" name="description" placeholder="Comic's description">
        </div>
        <div>
            <label for="">Thumb</label>
            <input value="{{ $comics['thumb'] }}" type="text" name="thumb" placeholder="Comic's thumb">
        </div>
        <div>
            <label for="">Price</label>
            <input value="{{ $comics['price'] }}" type="text" name="price" placeholder="Comic's price">
        </div>
        <div>
            <label for="">Series</label>
            <input value="{{ $comics['series'] }}" type="text" name="series" placeholder="Comic's series">
        </div>
        <div>
            <label for="">Sale date</label>
            <input value="{{ $comics['sale_date'] }}" type="text" name="sale_date" placeholder="Comic's sale_date">
        </div>
        <div>
            <label for="">Type</label>
            <input value="{{ $comics['type'] }}" type="text" name="type" placeholder="Comic's type">
        </div>
        <button type="submit">Submit</button>
    </form>
    
@endsection

