<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('cssfile/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="body-bg">
<div>
<nav class="navbar navbar-expand-lg bg-success p-2 text-white bg-opacity-75">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Vital Basket Grocery Store</a>
    <link rel="stylesheet" href="{{asset('style/css/style.css')}}">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>

</nav>
    <div>
    @yield('layout')
    </div>
    <script src="style/js/bootstrap.bundle.min.js"></script>
</body>
</html>