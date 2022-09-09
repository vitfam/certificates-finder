<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Certificates | VITFAM</title>
</head>

<body style="background-image: linear-gradient(rgba(0, 0, 0, .35), rgba(0, 0, 0, .35)), url('./VITFAM.png');">

    <div id="particles-js"></div>
    <div class="main-container position-absolute top-50 start-50 translate-middle">
        <form action="./certificate.php" method="POST">
            <label for="reg_num" class="form-label">Register Number</label>
            <div class="d-flex align-items-center">
                <input type="text" class="form-control" id="reg_num" name="reg_num" required
                    style="text-transform: uppercase;">
                <button type="submit" name="submit" class="btn btn-info">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="./js/particle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>