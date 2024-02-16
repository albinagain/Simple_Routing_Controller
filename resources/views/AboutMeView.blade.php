<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Me</title>
</head>
<body>
    <div>
        <a href="/About Me"><button>About Me</button></a>
        <a href="/Skills"><button>Skills</button></a>
        <a href="/Hobbies"><button>Hobbies</button></a>
    </div>
    <div>
        <h1>About Me</h1>
        <p>Hello there, my name is {{$data['name']}}.</p>
        <p>I am now {{$data['age']}} years old.</p>
        <p>My address is {{$data['address']}}.</p>
    </div>
</body>
</html>