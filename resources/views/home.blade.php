<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD using Query Builder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div>
        <h1 style="text-align: center; margin: 30px 0px">CRUD using Query Builder</h1>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <form action="" method="POST" >
                    @csrf              
                    <div class="mb-3">
                        <label for="name" class="form-label">
                            Name
                        </label>
                        <input type="text" class="form-control" 
                        id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">
                            City
                        </label>
                        <input type="text" class="form-control" 
                        id="city" name="city">
                    </div>
                    <div class="mb-3">
                        <label for="marks" class="form-label">
                            Marks
                        </label>
                        <input type="text" class="form-control" 
                        id="marks" name="marks">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>

                </form>
                <br>
                @if(Session::has('status'))
                <p class="alert alert-success">{{ Session('status') }}</p>
                @endif
            </div>

            <div class="col-sm-6">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col" >ID</th>
                            <th scope="col" >Name</th>
                            <th scope="col" >City</th>
                            <th scope="col" >Marks</th>
                            <th scope="col" >Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $stu )
                            <tr>
                                <th>{{ $stu->id }}</th>
                                <td>{{ $stu->name }}</td>
                                <td>{{ $stu->city }}</td>
                                <td>{{ $stu->marks }}</td>
                                <td>
                                    <a href="{{ url('/edit',$stu->id) }}" class="btn btn-info btn-sm">
                                        Edit
                                    </a>
                                    <a href="{{ url('/delete',$stu->id) }}" class="btn btn-danger btn-sm">
                                        Delete
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
