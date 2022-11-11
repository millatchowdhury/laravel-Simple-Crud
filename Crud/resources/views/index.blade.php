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
    
<div class="data-info">
    <div class="container">
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-6">
              <a href="{{ route('add_New') }}"><button type="button" class="btn btn-primary">Add New</button></a>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Serial</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">User</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($personData as $personData)
                        <tr>
                            <th>{{ $personData['id'] }}</th>
                            <td>{{ $personData['first_name'] }}</td>
                            <td>{{ $personData['last_name'] }}</td>
                            <td>{{ $personData['user'] }}</td>
                            <td><a href="{{ "/update"."/".$personData['id'] }}">Update</a></td>
                            <td><a href="{{"delete/".$personData['id']}}">Delete</a></td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>


</body>
</html>