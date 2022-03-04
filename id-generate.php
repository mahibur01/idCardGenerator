<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $img_name = $_FILES['up_image']['name'];
    $tmp_name = $_FILES['up_image']['tmp_name'];
    move_uploaded_file($tmp_name, "upload/" . $img_name);
}

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>
         Student ID Card Generator
      </title>
      <style>
         body {
         font-family: Arial, Helvetica, sans-serif;
         margin: 0;
         padding-top: 50px;
         }
         .card {
         box-shadow: 0 5px 5px 5px #e1e1e1;
         max-width: 350px;
         padding: 15px;
         border-radius: 5px;
         margin: auto;
         text-align: center;
         background: white;
         }
         img {
         width: 50%;
         border: 5px solid #e1e1e1;
         border-radius: 50%;
         }
         table, table tr td {
         width: 290px;
         margin: 0 auto;
         border: 1px solid #e1e1e1;
         text-align: left;
         }
      </style>
   </head>
   <body>
      <div class="card">
         <img src="./upload/<?php if (isset($img_name)) {
    echo $img_name;
}?>" alt="image" />
         <h1><?php if (isset($name)) {echo $name;}?></h1>
         <table>
            <tr>
               <td><strong>Phone</strong></td>
               <td><?php if (isset($phone)) {echo $phone;}?></td>
            </tr>
            <tr>
               <td><strong>Email</strong></td>
               <td><?php if (isset($email)) {echo $email;}?></td>
            </tr>
            <tr>
               <td><strong>Course</strong></td>
               <td><?php if (isset($course)) {echo $course;}?></td>
            </tr>
            <tr>
               <td><strong>Batch</strong></td>
               <td><?php if (isset($batch)) {echo $batch;}?></td>
            </tr>
         </table>
      </div>
   </body>
</html>