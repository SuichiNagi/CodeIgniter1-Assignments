<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
</head>
<body>
    <h3>Are you sure you want to delete following course?</h3>
    <table>
        <tr>
            <td>Name:</td><td><?= $course_details['course_name'] ?></td>
        </tr>
        <tr>
            <td>Description:</td><td><?= $course_details['description'] ?></td>
        </tr>
    </table>   
    <div>
        <p><a href="/">No</a></p>
        <p><a href="courses/remove/<?= $course_details['id']?>">Yes! I want to delete this</a></p>
    </div> 
</body>
</html>