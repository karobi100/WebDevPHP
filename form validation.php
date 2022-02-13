<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>

</head>
<style>
    body{
        background-color: royalblue;
        margin-top:100px ;
    }
    .container{
        width:1024px;
        margin:0 auto;
    }
    label{
        color:rgb(255,255,255);
    }
    .card{
        background-color:rgba(255,255,255,0.7) ;
        width:450px;
        margin: 0 auto;
        padding: 30px 30px
        -webkit-box-shadow: -1px 9px 27px 5px rgba(0,0,0,0.75);
        -moz-box-shadow: ; -1px 9px 27px 5px rgba(0,0,0,0.75);
        -o-box-shadow: ;-1px 9px 27px 5px rgba(0,0,0,0.75);
    }
   .img_container {
          text-align: center;
          text-align: center;
          margin-bottom: 15px;
      }
    img{
        border-radius:50%;
        width:100px;
        margin:0 auto;
    }/
    form{
        text-align:center;
        display: compact;
    }
    input{
        width:300px;
        border:none;
        border-radius:30px;
        padding: 10px 20px;
        margin-bottom: 10px;

    }
    h2{
        text-align: center; color: #fff;
        font-weight: normal;
        margin-bottom: 20px;
    }
    p{
        text-align:center ;
    }
    .register_button{
        background-color: blue;
        color: #fff;
    }
    span{
        color:red;
        /*display: block;*/
    }

</style>
<body>
<?php
// Define variables by setting empty variables
$nameError=$usernameError=$passwordError="";
$name=$username=$password="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
}
?>
<?php
//Define variables by setting empty values
$nameError=$usernameError=$passwordError="";
 $name=$username=$password="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
       $nameError = "Please enter your name <br>";
    } else {
        $name = test_input($_POST["name"]);
    }
    if (empty($_POST["username"])) {
        $usernameError = "please enter your username";
    } else {
        $username = test_input($_POST["username"]);
    }
    if (empty($_POST["password"])) {
        $passwordError = "Please enter a password that contains 8 characters";
    } else {
        $password = test_input($_POST["password"]);
    }
}
?>
<?php
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
<h2> Sign In </h2>
<div>
    <div class="container">
        <div class="card">
            <div class="img_container"><img src="user%20avatar.png">--
        <p><span class="error"> *Fill in all required filled*</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <p><span class="error"> <?php echo $nameError;?></span></p>
    <input type="names" placeholder="Enter your name" name="name">
            <span>*</span>
<!--   <span class="error">* --><?php //echo $nameError;?><!--</span>-->
    <br><br>
           <p><span class="error"><?php echo $usernameError;?></span></p>
    <input type="username" placeholder="Enter your username" name="username">
            <span>*</span>
<!--    <span class="error">* --><?php //echo $usernameError;?><!--</span>-->
    <br><br>
            <p><span class="error"><?php echo $passwordError;?></span></p>
    <input type="password" placeholder="Enter your password" name="password">
            <span>*</span>
<!--    <span class="error">* --><?php //echo $passwordError;?><!--</span>-->
    <br><br>
    <input class="register_button" type="submit" value="SUBMIT">
</form>
</div>
<?php
echo "<h2>Results:</h2>";
echo $name;
echo "<br>";
echo $username;
echo "<br>";
echo $password;
?>
</body>
</html>