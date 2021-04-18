<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add a student to all bootcamp courses</title>
</head>
<body>
    <h1>Add a new course</h1>
    <form action='<?php echo ('courses/add') ?>' method='post'>
        Name:<input type="text" name="name"><br>
        Description: <br><textarea rows="5" cols="30" name="description"></textarea><br>
        <input type="submit" value="Add">
    </form>
    <h1>Courses</h1>
    </body>
    <table>
        <tr>
            <th>Course Name</th>
            <th>Description</th>
            <th>Date Added</th>
            <th>Actions</th>
        </tr>
<?php foreach ($courses as $course) { ?>
        <tr>
            <td><?php echo $course['title']; ?></td>
            <td><?php echo $course['description']; ?></td>
            <td><?php echo $course['created_at']; ?></td>
            <td><a href=''>remove</a></td>
        </tr>
<?php } ?>
    </table>
</html>