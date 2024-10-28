<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
  <h1 class="text = 3x1 text-red-600 font-bold bg-red-100 items-center p-4 flex justify-center">
    Hello. Im {{ $name }}!!!
  </h1>
  <p class= "text-2xl p-4">
    I live in {{ $address}}, and my email is {{ $email }}
  </p>
</body>
</html>