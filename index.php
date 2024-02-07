<?php
$conn = mysqli_connect("localhost", "root", "", "college");

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];
  $gpa = $_POST['gpa'];
  $city = $_POST['city'];


  mysqli_query($conn,"Insert into students (Name,Gender,Age,GPA,City) VALUES( '$name', '$gender', '$age', '$gpa', '$city')");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Data</title>
  </head>
  <style>
    body{
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    padding: 150px 0px;
    }
    label{
      display: block;
    }
  </style>
  <body>
    <form  method="POST">
      <label for="">Name</label>
      <input type="text" name="name" required value="">
      <label for="">Gender</label>
      <input type="name" name="gender" required value="">
      <label for="">Age</label>
      <input type="number" name="age" required value="">
      <label for="">GPA</label>
      <input type="number" name="gpa" required value="">
      <label for="">city</label>
      <input type="name" name="city" required value="">
      <br>
     
      <button type="submit" name="submit">Submit</button>
    </form>
  </body>
</html>
