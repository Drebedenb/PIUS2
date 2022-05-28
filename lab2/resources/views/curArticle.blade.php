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
        <table class="table">
            <h2>Теги</h2>
            <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <td>{{ $tag->title }}</td>
                    <td>{{ $tag->code }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </table>
</div>
</body>
</html>
