<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co.com/MnPN2H8/Logo-X-Transparent-White.png">
    <title>POST METHOD</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }
    </style>
</head>

<body class="text-white bg-dark">
    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-md-12">
                <h3 class="fw-bold">PHP Form using POST Method</h3>
                <hr>
                <form action="./post-action.php" method="POST">
                    <div class="form-group mb-3">
                        <label for="email" class="mb-2 fw-bold">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" required autocomplete="off">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="mb-2 fw-bold">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required autocomplete="off">
                    </div>
                    <div class="mt-5 d-grid">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>