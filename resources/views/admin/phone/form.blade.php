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
    <h1>Create New Phone</h1>
    <ul>
        <li>
            <a href="/admin/phone/create">Create New</a>
        </li>
        <li>
            <a href="/admin/phone/list">List Phone</a>
        </li>
    </ul>
    <form action="{{$action}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$phone -> id}}">
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{$phone -> name}}">
        </div>
        <div>
            <label>Category</label>
            <select name="categoryId" value="{{$phone -> categoryId}}">
                <option value="1">Iphone</option>
                <option value="2">Samsung</option>
                <option value="3">Lenovo</option>
            </select>
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" value="{{$phone -> price}}">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" value="{{$phone -> description}}">
        </div>
        <div>
            <label>Image</label>
            <input type="text" name="images" value="{{$phone -> images}}">
        </div>
        <div>
            <label>Detail</label>
            <textarea name="content" cols="30" rows="10">{{$phone -> content}}</textarea>
        </div>
        <div>
            <label>Note</label>
            <input type="text" name="note" value="{{$phone -> note}}">
        </div>
        <div>
            <input type="submit" value="Save">
            <input type="reset" value="Reset">
        </div>
    </form>
</body>
</html>