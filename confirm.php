<?php 
    if($_GET['email']){
        $email = $_GET['email'];
    }else{
        header('Location: ./login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial scale 1.0">
    <meta name="keywords" content="HTML, PHP, Password, Transactional Mail">
    <meta name="author" content="Alexa">
    <title>Confirm</title>
    <!-- CSS ONLY -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row-justify-content-md-center" style="margin-top: 15%;">
            <form class="col-3" action="./php/verify.php" method="POST">
                <h2>Veify Account</h2>
                <div class="mb-3">
                    <label for="c" class="fomr-label">Verification Code</label>
                    <input type="number" class="form-control" id="c" name="code">
                    <input type="hidden" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                </div>
                <button type="submit" class="btn btn-primary">verify</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>