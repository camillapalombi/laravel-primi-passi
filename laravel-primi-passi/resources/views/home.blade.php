<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <header>
        
        <h1>
            Benvenuta {{ $user_name }}!
        </h1>
        <h3>
            Spero che a {{ $birth_city }} oggi sia bel tempo..
        </h3>

        <ul>

            <li>
                <a href="{{ route('aboutUs-route') }}"> RIGUARDO A NOI </a>
            </li>

            <li>
                <a href="{{ route('workWithUs-route') }}"> LAVORA CON NOI </a>
            </li>

            <li>
                <a href="{{ route('contacts-route') }}"> CONTATTI </a>
            </li>

        </ul>
    </header>

</body>
</html>