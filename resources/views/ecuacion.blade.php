<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Ecuación de 2do. grado</title>
    
  </head>
  <body>

    <div class="container">
      <h1>Ecuación de 2do. grado</h1>
      
      <form action="{{ route('ecuacion.solucion') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="a">A</label>
            <input class="form-control" type="number" name="a" id="a" placeholder="Ingresa A">
        </div>
        <div class="form-group">
            <label for="b">B</label>
            <input class="form-control" type="number" name="b" id="b" placeholder="Ingresa B">
        </div>
        <div class="form-group">
            <label for="c">C</label>
            <input class="form-control" type="number" name="c" id="c" placeholder="Ingresa C">
        </div>
        
        <button class="btn btn-primary">Calcular</button>
      </form>

    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

