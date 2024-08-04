<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Jaket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark d-flex justify-content-center">
          <div class="header-title-brand mx-auto d-flex">
              <a class="navbar-brand mx-auto" href="#">Toko Jaket</a>
          </div>
        </nav>
        @include('component.navbar')
    </header>
    <main>
      @include('component.carousel')
    </main>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>

  <style scoped>
    body {
      font-family: 'Open Sans', sans-serif;
    }
  </style>
</html>