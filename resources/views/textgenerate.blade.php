<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

   <form action="{{ route('ai')}}" method="POST">
    {{ csrf_field() }}
    <input type="text" name="text">
    <input type="submit" name="submit">
   </form>
   @if (isset($generate))
            <div>output</div>
            <div>{{ $generate}}</div>

            @endif

</body>
</html>
