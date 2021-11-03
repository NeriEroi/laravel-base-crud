@extends('layouts.app')

@section('content')

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        @method('POST')
        
        <div>
            <label for="">Title</label>
            <input type="text" name="title" placeholder="Comic's title">
        </div>
        <div>
            <label for="">Description</label>
            <input type="text" name="description" placeholder="Comic's description">
        </div>
        <div>
            <label for="">Thumb</label>
            <input type="text" name="thumb" placeholder="Comic's thumb">
        </div>
        <div>
            <label for="">Price</label>
            <input type="text" name="price" placeholder="Comic's price">
        </div>
        <div>
            <label for="">Series</label>
            <input type="text" name="series" placeholder="Comic's series">
        </div>
        <div>
            <label for="">Sale date</label>
            <input type="text" name="sale_date" placeholder="Comic's sale_date">
        </div>
        <div>
            <label for="">Type</label>
            <input type="text" name="type" placeholder="Comic's type">
        </div>
        <button type="submit">Submit</button>
    </form>
    
@endsection