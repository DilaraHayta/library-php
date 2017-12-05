@extends('layout.main')

@section('books')
    @foreach($books as $book)
        <li>{{$book->title}} written by {{$book->writer}}</li>
    @endforeach

    @stop