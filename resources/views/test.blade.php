<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade Components</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <x-alert
        type="warning"
        dismissible
        id="my-alert"
        class="mt-4"
        role="flash"
    >
        {{ $component->icon() }}
        <p class="mb-0">Data has been removed.
            {{ $component->link('Undo') }}
        </p>
    </x-alert>

    <x-form action="/images" method="POST">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </x-form>
</body>
</html>
