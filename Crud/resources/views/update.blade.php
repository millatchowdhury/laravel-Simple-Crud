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
                    <form method="POST" action="{{ route('updateData') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$updateShowingData['id']}}">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">First Name</label>
                          <input name="first_nme" type="text" value="{{$updateShowingData['first_name']}}" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Last Name</label>
                          <input name="last_nme" type="text" value="{{$updateShowingData['last_name']}}" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">User</label>
                          <input name="use" type="text" value="{{$updateShowingData['user']}}" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>