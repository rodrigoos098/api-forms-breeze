<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('gerarToken')}}" method="post">
        @csrf
        <input type="email" name="email" id="email">
        <input type="password" name="password" id="password">
        <button type="submit">criar token</button>
    </form>
</body>
</html>
