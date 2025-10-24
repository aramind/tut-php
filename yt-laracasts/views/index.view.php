<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-900">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- ✅ Load TailwindCSS first -->
     
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> 
    <style>
  :root {
    color-scheme: light;
  }
  html {
    background-color: white !important;
    color: black !important;
  }
</style>
    
  </head>
  <body class="h-full">
<div class="min-h-full">
  
  <?php require("partials/nav.php") ?>
  <header class="relative bg-gray-800 after:pointer-events-none after:absolute after:inset-x-0 after:inset-y-0 after:border-y after:border-white/10">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-white">Dashboard</h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
       <p>Hello welcome to the HOMEPAGE</p>
    </div>
  </main>
</div>

  </body>
</html>
