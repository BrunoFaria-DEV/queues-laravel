<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    @for($i = 0; $i <= $value; $i++)
        <p>
            <b>Linha: </b> {{ $i }}   
        </p>
    @endfor
</body>
</html>