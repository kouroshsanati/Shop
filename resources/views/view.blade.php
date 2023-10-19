<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <label>FirstName</label>
    <input type="text" name="first_name">
    <label>LastName</label>
    <input type="text" name="last_name">

    <label>Email</label>
    <input type="text" name="email">

    <label>City</label>
    <input type="text" name="city">
    <input type="submit" value="submit">


</form>

</body>
</html>
