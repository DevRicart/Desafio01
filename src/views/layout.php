<!doctype html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <title>Desafio 01</title>
</head>
    <body class="antialiased font-sans bg-gray-200 overflow-hidden align-middle h-screen">

        <?= $content ?>

        <footer class="bg-white absolute bottom-0 w-screen h-52 text-center flex flex-col items-center">
            <div class="border-t-2 border-black w-96 text-center py-6 mt-5">
                <a href=""><i class="uil uil-instagram text-6xl"></i></a>
                <a href=""><i class="uil uil-facebook-f text-6xl"></i></a>
                <a href=""><i class="uil uil-twitter-alt text-6xl"></i></a>
                <a href=""><i class="uil uil-youtube text-6xl"></i></a>
            </div>
            <p class="text-lg">Copyright ©2024 - Meu site</p>
        </footer>
    </body>
</html>