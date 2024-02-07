<!-- 
step1:make a folder in xampp->htdocs->name a folder
step2:create your php file in that folder
step3:edit the php with vscode
-->

<?php
$conn = mysqli_connect("localhost", "root", "", "college"); //connect with mysql database("localhost","root=username","password","database name where data table is created")

//isset($_POST['submit']) means if submit button is clicked
if(isset($_POST['submit'])){

//here each variable for each column name
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $age = $_POST['age'];
  $gpa = $_POST['gpa'];
  $city = $_POST['city'];

//here mysqli_query is for post method to insert data in database
  mysqli_query($conn,"Insert into students (Name,Gender,Age,GPA,City) VALUES( '$name', '$gender', '$age', '$gpa', '$city')");
}
?>

//html code start
<!DOCTYPE html>
<html lang="en" dir="ltr">
  //head optional
  <head>
    <meta charset="utf-8">
    <title>Insert Data</title>
  </head>
  //style optional
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
    //form tag for form data and method attribute for post the data
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
      //submit button for submit the data
    </form>
  </body>
</html>
