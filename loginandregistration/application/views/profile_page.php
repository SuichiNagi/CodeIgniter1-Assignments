<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<style>
    div{
        padding: 15px;
        border: 1px solid black;
        width: 200px;
        margin-bottom: 15px;
    }
</style>
<body>
    <h1>Welcome <?= $this->session->userdata('user')['student_first_name']; ?>!</h1>
    <div>
    First Name: <?= $this->session->userdata('user')['student_first_name']; ?>
    Last Name: <?= $this->session->userdata('user')['student_last_name']; ?>
    Email Address: <?= $this->session->userdata('user')['student_email']; ?>
    </div>
    <a href="/students/logout/">Log Out</a>
</body>
</html>