<?php
if (isset($_POST['btnjam'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = $num1 + $num2;
}
if (isset($_POST['btntafrigh'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = $num1 - $num2;
}
if (isset($_POST['btnzarb'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = $num1 * $num2;
}
if (isset($_POST['btntaghsim'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $result = $num1 / $num2;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>calculator</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-3">
                <form method="post">
                    <div class="form-group">
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="num1" name="num1">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="num2" name="num2">
                    </div>
                    <p class="text-center">حاصل محاسبه شما : <?php echo @$result;?></p>
                    <button type="submit" class="btn btn-primary" name="btnjam">+</button>
                    <button type="submit" class="btn btn-danger" name="btntafrigh">-</button>
                    <button type="submit" class="btn btn-success" name="btnzarb">*</button>
                    <button type="submit" class="btn btn-info" name="btntaghsim">/</button>

                </form>
            </div>
        </div>
    </div>
</body>
</html>