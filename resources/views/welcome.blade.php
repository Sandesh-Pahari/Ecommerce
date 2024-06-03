<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
  <h1 class="text-3xl bg-red-100 font-bold underline" x-data="{open: false}">
    <button @click="open=!open">click me
</button>

   <div x-show="open">Hello world!</div>
  </h1>
</body>
</html>