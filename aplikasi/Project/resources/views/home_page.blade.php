<x-navbar></x-navbar>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  @vite('resources/css/app.css')
</head>
<body class="h-screen bg-cover bg-center" style="background-image: url('/img/baground.jpg')">
<br><br><br><br><br>
    <div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12">
        <h1 class="text-4xl font-bold text-white mb-4">AFH Cafe</h1>
        <p class="text-lg text-white mb-8">Tempat yang nyaman untuk bersantai dan menikmati kopi</p>
        <blockquote class="text-lg text-white italic mb-8">
            "Coffee is the common man's gold, and like gold, it brings to every person the feeling of luxury and nobility." - Sheikh Abd-al-Kadir
        </blockquote>
        <a href="menus" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded animate-pulse">Explore Our Menu</a><br><br>
        <h2 class="text-3xl font-bold text-white mb-4 ">Freshly Brewed Coffee</h2>
        
    </div>
</body>
</html>