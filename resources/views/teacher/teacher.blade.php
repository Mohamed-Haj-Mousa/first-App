<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Hello In Teacher Page....</h1>
    <form action="/teacher/show" method="POST">
        @csrf
        <input type="text" name='teacher_name' placeholder="Enter Name Teacher">
        <input type="submit" value="submit">
    </form>
</body>

</html>
