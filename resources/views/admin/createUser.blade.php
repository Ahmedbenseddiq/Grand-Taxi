<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="<KEY>" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
</head>
<body>
    <div class="form-body">
        <div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Add user</h3>
                        <div>
                            @if ($errors->any())
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                        <form method="POST" action="{{ route('admin.createStore') }}" class="requires-validation" novalidate enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="password" name="password" placeholder="Password" required>
                            </div>

                            <div class="col-md-12 mt-3">
                                <input class="form-control" type="password" name="confirm_password" placeholder="Confirm Password" required>
                            </div>

                            <div class="col-md-12">
                                <select class="form-select mt-3" name="role" required>
                                    <option value="driver">Driver</option>
                                    <option value="client">Client</option>
                                </select>
                            </div>

                            <div class="col-md-12 mt-3">
                                <input class="form-control" type="file" accept="image" name="image" placeholder="Image" required>
                            </div>

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{URL::asset('js/main.js')}}"></script>
</body>
</html>