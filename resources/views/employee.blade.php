<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="" style="margin: 100px">
            <form action="{{ route('addimage') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group" >
                    <label for="">Name</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="Enter name...">
                </div>
                <div class="form-group">
                    <label for="">Surname</label>
                    <input type="text" name="surname" id="" class="form-control" placeholder="Enter surname...">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" id="" class="form-control" placeholder="Enter email...">
                </div>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="photo" id="" value="null">
                        <label for="" class="custom-file-label">Choose File</label>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary"> Save Data</button>
            </form>
        </div>
    </div>
</body>
</html>