<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
</form>
<br>
<table>
    <tr>
        <th>NOMBRE</th>
        <th>Correo</th>
    </tr>
    @forelse ($autores as $author)
    <tr>
        <td>{{$author->name}}</td>
        <td>{{$author->email}}</td>
    </tr>   
    @empty
        <h1>Esta vacio!</h1>
    @endforelse
</table>
</body>
</html>