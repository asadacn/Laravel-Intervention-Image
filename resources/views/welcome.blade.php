<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Laravel Intervention!</title>
  </head>
  <body style="background: {{ session('color') }}">
  <div class="container ">
    <div class="h1 text-center text-uppercase my-2 bg-primary text-white rounded shadow-sm">Laravel Intervention</div>
      <div class="my-1">
    <form action="/upload" method="POST" enctype="multipart/form-data" class="bg-light border p-5 shadow-sm rounded">
        @csrf
        <div class="form-group">
          <label class="text-primary h3" for="exampleFormControlFile1">Please select an image</label>
          <input type="file" class="bg-white border border-light form-control-file mb-2" name="photo" id="exampleFormControlFile1" required>
          <input class="btn btn-primary" type="submit" value="Upload">
        </div>
      </form>

      @if (session('status'))
    <h1 class="alert h3 my-2 alert-success">
        {{ session('status') }}
    </h1>
    <br>
    <div>
    <img  class="img-thumbnail p-2" src=" {{ session('image') }}" >
    </div>
@endif
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>