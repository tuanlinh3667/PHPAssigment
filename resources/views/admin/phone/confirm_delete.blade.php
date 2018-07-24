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
    <h1>Bạn có chắc muốn xoá sản phẩm {{$phone->name}}</h1>
    <form action="/admin/phone/destroy" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$phone->id}}">
        <input type="submit" value="Yes"> hoặc <a href="/admin/phone/list">click vào đây</a> để về trang chủ.
    </form>
</body>
</html>