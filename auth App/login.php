<?php
         session_start();   

    if(isset($_GET['submit'])  && !empty($_GET['username']) 
    && !empty($_GET['password'])){

        if ($_GET['username'] == $_SESSION['name'] && 
        $_GET['password'] == $_SESSION['password']) {
        $_SESSION['valid'] = true;
        header('Location: dashboard.php');      
     }else {
        echo '<h3>Wrong username or password</h3>';
     }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>         
    <form action="<?php if(isset($_SERVER['PHP_SELF'])) ?>" method="get">
        <label for="username">Username :</label>
        <input type="text" name="username"><br><br>
        <label for="username">Password :</label>
        <input type="password" name="password"><br><br>
        <input type="submit" name= "submit">
    </form>
</body>
</html>