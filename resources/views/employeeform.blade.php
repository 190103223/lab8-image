<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>all employees here</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container" >
        <div class="jumbotron" style="margin: 100px">
            <h1>Labwork #8</h1>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Photo</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee )
                    <tr>
                        <th scope="row">{{ $employee->id }}</th>
                        <th scope="row">{{ $employee->name }}</th>
                        <th scope="row">{{ $employee->surname }}</th>
                        <th scope="row">{{ $employee->email }}</th>
                        <th ><img src="{{ asset('uploads/employee/'.$employee->photo )}}" alt="images" 
                            style="width: 100px; height:100px"></th>
                      </tr>
                    @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>
</body>
</html>