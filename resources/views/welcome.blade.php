<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-size: 20px;
        }

        form {
            display: flex;
            justify-content: space-between;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }

        form div {
            margin: 10px;
        }

        button {
            padding: 10px;
        }

        .my {
            margin-top: 20px;
            margin-bottom: 20px;
        }

    </style>
</head>

<body>
    <form action="/upload" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" placeholder="First Name" />
        </div>

        <div>
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" placeholder="Last Name" />
        </div>


        <div><input type="file" name="file" accept="image/png, image/jpeg" /></div>

        <div class="my">
            {{-- <input type="radio" name="type" value="1" id="block" checked />
            <label for="block">Block Storage</label> --}}

            <input type="radio" name="type" value="2" id="spaces" checked />
            <label for="block">Spaces Object Storage</label>
        </div>

        <button type="submit">Upload</button>
    </form>

    <a href="/list">View All Images</a>
</body>

</html>
