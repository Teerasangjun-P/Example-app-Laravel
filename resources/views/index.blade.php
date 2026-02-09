<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="bg-gray-800 text-white p-6">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Welcome To Index</h1>
            <ul class="flex space-x-4">
                <li><a href="{{ route('welcome') }}" class="hover:text-gray-300">Home</a></li>
                <li><a href="{{ route('index') }}" class="hover:text-gray-300">Index</a></li>
            </ul>
        </div>
    </nav>
</body>
</html>