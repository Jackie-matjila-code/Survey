<?php
$surname_error = $fullName_error = $contact_error = $date_error = $age_error = "";
$surname = $fullName = $contact =  "";
$date;
$age ;



  if($_SERVER["REQUEST_METHOD"] == "POST")
  {    
    $surname = $_POST['surname'];
    $fullName = $_POST['fullName'];
    $contact = $_POST['contact'];
    $date = $_POST['date'];
    $age = $_POST['age'];
   
    
    
    if(empty($surname)){
        $surname_error = "Surname is required";
    }elseif (empty ($fullName)) {
        $fullName_error = "Full name is required";
    }elseif (empty ($contact)) {
        $contact_error = "Contact is required";
    } elseif (empty ($date)) {
    $date_error = "Date is required";
    }elseif (empty ($age)) {
        $age_error = "Age is required";
    } elseif ($age < 5 || $age > 120) {
      $age_error = "Enter age that is not less than 5 and greater than 120";
    }else {
        $movies = $_POST['movies'];
        $tv = $_POST['tv'];
        $radio = $_POST['radio'];
        $eatout = $_POST['eatout'];
        $food = $_POST['food'];
        $b = implode(',', $food);
   
         $sql = "INSERT INTO users(`surname`,`fullName`,`contact`,`date`,`age`,`food`,`eatout`,`movies`,`tv`,`radio`)"
            . " VALUES('$surname','$fullName','$contact','$date','$age','$b','$eatout','$movies','$tv','$radio')";
         mysqli_query($db, $sql);
         header('Location:index.php');
    } 
           
  }
       function test_input($data){
          $data = trim($data);
          $data = $stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
      }
?>

