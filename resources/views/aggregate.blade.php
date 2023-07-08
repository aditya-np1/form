<!DOCTYPE html>
<html lang="gu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    @foreach($data as $item)
    <h3> {{$item}} </h3>
    @endforeach
    <hr>
</body>

</html>