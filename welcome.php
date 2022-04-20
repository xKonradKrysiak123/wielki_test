<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Witamy na stronie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Cześć <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Witamy na stronie !<h1>
    <p>
        <a href="logout.php" class="btn btn-danger ml-3">Wyloguj się ze swojego konta</a>
    </p>

    <form action="<?php echo($_SERVER['PHP_SELF'])?>" method="POST">
    <div class="kalkulator">
         
         r = <input onkeydown="return noNumbers(event)" name="promien" placeholder="Wprowadz promien" id="promien" type="text"  >
        <input type="button" onclick="oblicz2()" value="oblicz"><br>
         <div class="wynik">
        V = <input onkeydown="return noNumbers(event)" name="wynik" id="wynik" placeholder="wynik" type="text">
    </div>
   <input type="button" onclick="clean()" value="wyczyść"><br>
    <br>
    </form>
    <script src="script.js"></script>
</body>
</html>