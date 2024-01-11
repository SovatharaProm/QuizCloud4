<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
	<a href="/">Return Home</a>
    <table border=2 style="width: 100%">
        <thead>
            <td>ID</td>
            <td>Name</td>
            <td>Type</td>
            <td>Image</td>
        </thead>
        <tbody>
            @foreach ($images as $image)
            <tr>
                <td>{{ $image->id }}</td>
                <td>{{ $image->first_name." ".$image->last_name }}</td>
                <td>{{ $image->type == 1 ? "block" : "spaces object" }}</td>
                <td><a href="{{$image->img_src}}" target="_blank"><img height="30" src="{{$image->img_src}}"/></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

