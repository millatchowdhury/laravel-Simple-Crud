<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="form-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-2"></div>
                <div class="col-xl-6">
                    <form method="POST" action="{{ route('formSubmit') }}">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">First Name</label>
                          <input name="first_name" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Last Name</label>
                          <input name="last_name" type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">User</label>
                          <input name="user" type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>