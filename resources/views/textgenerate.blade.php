<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

   <form action="{{ route('aid')}}" method="POST">
    {{ csrf_field() }}
    <input type="text" name="text">
    <input type="submit" name="submit">

   </form>


    @if (isset($generate))
    <form action="{{ route('aisave')}}" method="POST">
     {{ csrf_field() }}
    {{-- <div>{{ $generate}}</div> --}}
    <input type="text" value="{{ $generate}}"  name="content"><br>
    <input type="submit" value="save">
    </form>

    @endif


</body>
</html>
