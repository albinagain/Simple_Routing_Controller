<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hobbies</title>
</head>
<body>
    <div>
        <a href="/About Me"><button>About Me</button></a>
        <a href="/Skills"><button>Skills</button></a>
        <a href="/Hobbies"><button>Hobbies</button></a>
    </div>
    <div>
        <h1>Hobbies</h1>
        <ul>
            @foreach ($data as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>