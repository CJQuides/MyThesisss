<?php 
/* 
$answer1 = $_POST['rate1'];
$answer2 = $_POST['rate2'];
$answer3 = $_POST['rate3']; */
//$preds = "n";

/* if(isset($_POST['sendPred'])){
    $preds = $_POST['sendPred'];
} else {
    do {
        $preds = $_POST['sendPred'];
      } while (!isset($_POST['sendPred']));
} */
/* 
if ($answer1 != null) {
    echo $answer1, "\n";
}

if ($answer2 != null) {
    echo $answer2, "\n"; 
}

if ($answer3 != null) {
    echo $answer3, "\n"; 
} */
/* 
$answer1 = (int)$answer1;
$answer2 = (int)$answer2;
$answer3 = (int)$answer3; */
/* 
echo $preds; */
/* 
echo "\nResult [ (", $answer1, "+", $answer2, "+", $answer3, ") / 3 = ", ($answer1 + $answer2 + $answer3) / 3, "]";
 */
require_once "config.php";

if(isset($_POST['sendPred']) && isset($_POST['sendRate1']) && isset($_POST['sendRate2']) && isset($_POST['sendRate3'])){
    
    $answer1 = $_POST['sendRate1'];
    $answer2 = $_POST['sendRate2'];
    $answer3 = $_POST['sendRate3']; 
    $preds = $_POST['sendPred'];

    $sql = "INSERT INTO evaluationresult (rate1, rate2, rate3, comment) VALUES (?, ?, ?, ?)";

    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, 'iiis', $param_rate1, $param_rate2, $param_rate3, $param_comments);
        
        // Set parameters
        $param_rate1 = $answer1;
        $param_rate2 = $answer2;
        $param_rate3 = $answer3;
        $param_comments = $preds;
        
        if(mysqli_stmt_execute($stmt)){
            // Records created successfully. Redirect to landing page
            /* header("location: index.php"); */
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
    /*         mysqli_stmt_close($stmt);
        }
        
        mysqli_close($link);
    } */
} else {/* header("location: index.php"); */}

?>
<!-- GAGAMITIN KO TO header("location: records-eng.php"); papunta sa main -->