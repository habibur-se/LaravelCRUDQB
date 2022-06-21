<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD using Query Builder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <form action="" method="POST" >
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">
                            Name
                        </label>
                        <input type="text" class="form-control" 
                        id="name" name="name" value="{{ $student->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">
                            City
                        </label>
                        <input type="text" class="form-control" 
                        id="city" name="city" value="{{ $student->city }}">
                    </div>
                    <div class="mb-3">
                        <label for="marks" class="form-label">
                            Marks
                        </label>
                        <input type="text" class="form-control" 
                        id="marks" name="marks" value="{{ $student->marks }}">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Update  
                    </button>

                </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
