<?php
include('./dbcon.php');
$stmt = $conn->prepare("SELECT *
FROM students");
$stmt->execute();
$data = $stmt-> fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2> SELECT</h2>
  <p>Students Table:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Contact_info</th>
        <th>Email</th>
        <th>update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        <?php
        foreach($data as $k){
           
            echo "
             <tr>
            <td>{$k ['Name']}</td>
            <td>{$k ['Contact_info']}</td>
            <td>{$k['Email']}</td>
            <td>
            <a href='./update.php?id={$k['student_id']}'>Edit</a>
            </td>
            <td>
            <a href='./delete.php?id={$k['student_id']}'>Delete</a>
            </td>
          </tr>";
        }
        ?>
      
    </tbody>
  </table>
</div>

</body>
</html 