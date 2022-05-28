<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>
<body class="antialiased">
<div>

    <table class="table">
        <h2>Статьи</h2>
        <tbody>
        @foreach ($articles as $article)
            <tr>
                <td>{{ $article->title }}</td>
                <td>{{ $article->code }}</td>
                <td>{{ $article->body }}</td>
                <td>{{ $article->createDateTime }}</td>
                <td>{{ $article->author }}</tdli
            </tr>
        @endforeach
        </tbody>
        {{$articles->links()}}
    </table>


</div>
</body>
</html>
