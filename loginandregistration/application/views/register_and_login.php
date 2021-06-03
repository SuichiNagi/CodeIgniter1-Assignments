<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration and Login</title>
</head>
<style>
    form{
        width: 205px;
        padding: 5px;
        border: 2px solid black;
    }
        input{
            margin: 5px;
        }
    p{
        color: red;
    }
    h4{
        color: green;
    }
</style>
<body>
    <h1>Login</h1>
    <?php 
    if($this->session->flashdata('login_error')){
        echo "<p>" . $this->session->flashdata('login_error') . "</p>";
    }
    ?>
    <form action="/students/login" method="post">
        Email Address: <input type="email" name="email">
        Password: <input type="password" name="password">
        <input type="submit" name="login" value="Login">
    </form>
    <h1>Register</h1>
    <?php 
    if($this->session->flashdata('validation_errors')){
        echo "<p>" . $this->session->flashdata('validation_errors') . "</p>";
    }
    elseif($this->session->flashdata('login_valid')){
        echo "<h4>" . $this->session->flashdata('login_valid') . "</h4>";
    }
    ?>
    
    <form action="/students/register" method="post">
        First Name: <input type="text" name="first_name">
        Last Name: <input type="text" name="last_name">
        Email Address: <input type="email" name="email">
        Password: <input type="password" name="password">
        Confirm Password: <input type="password" name="confirm_password">
        <input type="submit" name="register" id="Register">
    </form>
</body>
</html>