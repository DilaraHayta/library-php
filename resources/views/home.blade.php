<!DOCTYPE html>
<html>
<heead>
    <meta charset="UTF-8">
</heead>
<body>
    @foreach($books as $book)
        <li>{{$book->title}} written by {{$book->writer}}</li>
    @endforeach
</body>
</html>