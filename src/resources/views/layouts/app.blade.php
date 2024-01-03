<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <meta name="title" content="{{ $metaTitle }}" />
    <meta name="description" content="{{ $metaDescription }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js', 'vendor/dianagung/larawinds/src/resources/js/app.js'])
</head>
<body>
    {{ $slot }}
    <div class="md:w-11/12 w-full md:px-8 px-4 mx-auto">
        {{ $content }}
    </div>
</body>
</html>