<?php

include "./db.php";

if (isset($_POST['submit']) && isset($_POST['reg_num'])) {
    $sql = "SELECT * FROM certificate WHERE reg_num = '" . $_POST['reg_num'] . "'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if (strtolower($row['reg_num']) == strtolower($_POST['reg_num'])) {
        $_SESSION['reg_num'] = $row['reg_num'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['link'] = $row['link'];
        $image = $row['link'];
        $image = str_replace("https://drive.google.com/file/d/", "", $image);
        $image = str_replace("/view?usp=sharing", "", $image);
        $_SESSION['image'] = $image;
    } else {
        echo "<script>alert('No Certificate Found');</script>";
        echo "<script>window.location.href = './index.php';</script>";
    }
}

?>

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
    <title><?php echo $_SESSION["name"]; ?> | VITFAM</title>
</head>

<body style="background-image: linear-gradient(rgba(0, 0, 0, .35), rgba(0, 0, 0, .35)), url('./VITFAM.png');">
    <div id="particles-js"></div>
    <div class="certificate-container position-absolute top-50 start-50 translate-middle">
        <h3>Welcome <?php echo $_SESSION["name"]; ?></h3>
        <div class="image">
            <?php echo '<img src="https://drive.google.com/uc?id=' . $_SESSION['image'] . '" alt="' . $_SESSION['name'] . '">'; ?>
        </div>
        <a href="<?php echo $_SESSION["link"]; ?>" class="btn btn-danger mt-4">Download</a>

    </div>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="./js/particle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>