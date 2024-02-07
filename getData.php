<!-- 
step1:make a folder in xampp->htdocs->name a folder
step2:create your php file in that folder
step3:edit the php with vscode
-->

<?php
$conn = mysqli_connect("localhost", "root", "", "college"); //connect with mysql database("localhost","root=username","password","database name where data table is created")

//query for all data in the selected database
$sql='SELECT * FROM students';

//get the result
$result=mysqli_query($conn,$sql);

//get the resulting rows in an array
$students=mysqli_fetch_all($result,MYSQLI_ASSOC); //mysqli_fetch_all('data query',mysqli_assoc=get in an array)

print_r($students);