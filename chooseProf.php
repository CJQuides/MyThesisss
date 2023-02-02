<?php
require_once "config.php";


// select statement for display
$sqlFaculty = "SELECT * FROM facultyinfotbl";
$sqlStudent = "SELECT * FROM studentsinfotbl";
if($resultFaculty = mysqli_query($link, $sqlFaculty)){
    if(mysqli_num_rows($resultFaculty) > 0){
        echo '<table class="table table-striped intable">';
        echo "<thead>";
        echo "<tr>";
        // echo "<th>#</th>";
        echo "<th>Age</th>";
        echo "<th>Gender</th>";
        echo "<th></th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while($row = mysqli_fetch_array($resultFaculty)){
            echo "<tr>";
            // echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['facultyName'] . "</td>";
            echo "<td>" . $row['course'] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";                            
        echo "</table>";
        mysqli_free_result($resultFaculty);
    } else{
        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
    }
} else{
    echo "Oops! Something went wrong. Please try again later.";
}

mysqli_close($link);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

</body>
</html>