<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
</head>
    <style>
        form{
            width: 250px;
        }
    </style>
<body>
    <h2>Add a new course</h2>
    <form action="courses/add" method="post" required>
        <label>Name: </label><input type="text" name="course_name" required>
        <label>Description :</label><textarea type="text" name="description" rows="4" cols="50"></textarea>
        <input type="submit" name="submit" value="Add">
    </form>

    <h2>Courses</h2>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Course Name</th>
                <th>Description</th>
                <th>Date Added</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($course as $row) { ?>
            <tr>
                <th><?= $row['id']; ?></th>
                <td><?= $row['course_name']; ?></td>
                <td><?= $row['description']; ?></td>
                <td><?= $row['created_at']; ?></td>
                <td><a href="courses/destroy/<?= $row['id']?>">Remove</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>