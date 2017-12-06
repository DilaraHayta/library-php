@extends('layout.main')

@section('books')
    <br>
    <div class="container">
            <ul class="list-group">
                @foreach($books as $book)
                    <li class="list-group-item">{{$book->title}} written by {{$book->writer}}</li>
                @endforeach
            </ul>
    </div>


    @stop