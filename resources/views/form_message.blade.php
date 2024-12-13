<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Prueba superada</h1>
        @if($messages->isEmpty())
            <p>No hay mensajes en la base de datos</p>
        @else
        @foreach ($messages as $message)
            <form action="{{route('eliminarMensaje',$message->id)}}" method="delete">
                @csrf
                @method('DELETE')
                <label for="mensaje">{{$message->text}}</label>
                <input type="checkbox" name="mensaje" id="" value="{{$message->id}}">
        @endforeach
                <button type="submit">Eliminar</button>
            </form>
        @endif
    </div>
</body>
</html>