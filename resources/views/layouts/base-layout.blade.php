@vite(['resources/css/app.css', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("win-title")</title>
</head>

<body>
    @include("partials.header")
    <main>
        <h1>@yield("title")</h1>
    </main>

    @include("partials.footer")

</body>

</html>