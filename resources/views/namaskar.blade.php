<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Styles -->

<style>
    body {
        font-family: 'Nunito', sans-serif;
    }

    aside  {

        font-size: 2rem;
    }
    aside * {
        text-decoration:none;
        list-style-type: none;
        padding: 0 0 0 .3rem;
        margin: 0;
        color: #234;
        line-height : 1;
        font-size: .9em;
    }

    aside > ul >li >a, aside > ul >li > ul >li >a {
        font-weight: bold;
    }

    aside a.active {

        color: #000!important;
        text-decoration: underline;

    }

</style>
  </head>
  <body>
  <div class="container-full">
  <div class="row">
  @if ($sidemenu ?? false)
        <aside class="col-3">
        @include('sidemenu', ['menuitems' => $sidemenu, 'subsite' => $subsite, 'maxlevels' => 1])
        </aside>
    @endif
     <main  class="col">
     <h1>{{$title}}</h1>
     {!! $main !!}
     </main>
  </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>



