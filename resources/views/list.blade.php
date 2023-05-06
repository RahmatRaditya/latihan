<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>List User</title>
    </head>

    <body>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                <h3>List Users</h3>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                            <a href="{{ route('users.edit', $user->id) }}">
                            <button type="button" class="btn btn-warning">Edit</button>
                            </a>
                            </td>
                            <td>
                            <form action="{{ route('users.destroy', $user->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <a href="{{ route('users.create') }}"><button class="btn btn-primary">Tambah User</button></a>
                </div>
            </div>
        </div>
    </body>
</html>