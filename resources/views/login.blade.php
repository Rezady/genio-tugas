<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="col-md-4 offset-md-4 mt-5">
            <div class="card">
                <div class="card-header bg-light">
                    <h3 class="text-center">Form Login</h3>
                </div>
                <form action="/login" method="post">
                @csrf
                <div class="card-body">                                        
                    
                    <div class="form-group">
                        <label for=""><strong>Email</strong></label>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Password</strong></label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group float-right">                        
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>

                </div>
                
                </form>
            </div>
        </div>
    </div>
</body>
</html>