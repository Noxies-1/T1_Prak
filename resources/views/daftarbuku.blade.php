<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DaftarBuku</h1>
    @foreach ($book->bookshelfs as $bookshelfs)
    <div>
        Buku : {{$bookshelfs->id}}
        Buku : {{$bookshelfs->name}}
    </div>
    @empty
    <div>
        Tidak ada buku
    </div>
    @endforeach
</body>
</html>