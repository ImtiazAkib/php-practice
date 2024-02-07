<!-- 
step1:make a folder in xampp->htdocs->name a folder
step2:create your php file in that folder
step3:edit the php with vscode
step4:to render the file in browser go to http://localhost/folder name/your php file
-->

<?php
$conn = mysqli_connect("localhost", "root", "", "college"); //connect with mysql database("localhost","root=username","password","database name where data table is created")

//query for all data in the selected database
$sql='SELECT * FROM students';

//get the result
$result=mysqli_query($conn,$sql);

//get the resulting rows in an array
$students=mysqli_fetch_all($result,MYSQLI_ASSOC); //mysqli_fetch_all('data query',mysqli_assoc=get in an array)

//free result from memory(optional)
mysqli_free_result($result);

//close connection(optional)
mysqli_close($conn);

// print_r($students);

?>
<!-- html started -->
<!DOCTYPE html>
<html lang="en">
    <!-- head optional -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            display:flex;
            flex-wrap:wrap;
        }

    </style>
</head>
<body>
    <!-- div for conatiner -->
    <div>
        <!-- foreach loop for get each student data from students array -->
            <?php foreach($students as $student){?>
                <!-- ul for group each row data -->
                <ul>
                    <!-- echo for print the data and htmlspecialchars for get the exact same data get from database -->
                    <!-- here $student['Name'] means student is the single row from students table and name is the data that will be shown here-->
                    <li><?php echo htmlspecialchars($student['Name']); ?></li>
                    <li><?php echo htmlspecialchars($student['Roll']); ?></li>
                    <li><?php echo htmlspecialchars($student['Gender']); ?></li>
                    <li><?php echo htmlspecialchars($student['Age']); ?></li>
                    <li><?php echo htmlspecialchars($student['GPA']); ?></li>
                    <li><?php echo htmlspecialchars($student['City']); ?></li>
                </ul>

                <?php }?>
        
    </div>
</body>
</html>