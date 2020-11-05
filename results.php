<?php
require_once 'core/connect.php'; 
include 'includes/head.php';

$query = "SELECT ROUND(AVG(age)) AS avg FROM users ";
$ageAverage = $db->query($query);

$query = "SELECT MAX(age) AS age FROM users ";
$ageMax = $db->query($query);

$query = "SELECT MIN(age) AS age FROM users ";
$ageMin = $db->query($query);

$query = "SELECT ROUND(AVG(eatout),1) AS eatout FROM users ";
$eatOut = $db->query($query);

$query = "SELECT ROUND(AVG(movies),1) AS watc FROM users ";
$watch = $db->query($query);

$query = "SELECT ROUND(AVG(tv),1) AS tvi FROM users ";
$watchTv = $db->query($query);

$query = "SELECT ROUND(AVG(radio),1) AS rad FROM users ";
$wave = $db->query($query);


?>



  <div class="jumbotron">
    <h1 class="display-4 text-center">View Survey</h1>
    <p class="lead text-center">
       Trusted results
    </p>
     
    </div>

<div class="card white bg- dark mt-4" style="max-width: 150rem;">
  <h5 class="card-header">Survey</h5>
  <div class="card-body">
    <p class="card-text">
        <?php 
            $sql2 = "SELECT id FROM users ORDER BY id";
            $result = mysqli_query($db, $sql2);
            $rows = mysqli_num_rows($result);
            echo '<p>Total number of surveys: '.$rows.'</p>';
            //$total = ($rows / $res)*100;
           
        ?>
        </p>
    <p class="card-text">
        <?php
          while ($row  = mysqli_fetch_assoc($ageAverage)){
              $ave = $row['avg'];
              echo '<p>Average age: '.$ave.'</p>';
          }
        ?>
    </p>
    <p class="card-text">
           <?php
          while ($row  = mysqli_fetch_assoc($ageMax)){
              $max = $row['age'];
              echo '<p>Oldest person who participated in survey: '.$max.'</p>';
          }
        ?>
    </p>
    <p class="card-text">
             <?php
          while ($row  = mysqli_fetch_assoc($ageMin)){
              $min = $row['age'];
              echo '<p>Youngest person who participated in survey: '.$min.'</p>';
          }
        ?>
    </p><br>
    <p class="card-text">Percentage of people who like Pizza:
            <?php
            $sq = "SELECT count(food)as pizza FROM `users` WHERE food LIKE '%pizza%'";
           $res = mysqli_query($db, $sq);
           while ($ro = $res->fetch_assoc()) {
            echo ROUND($total = $ro['pizza'] / $rows * 100,2);
            }
            ?> 
        %
    </p>
    <p class="card-text">Percentage of people who like Pasta:
              <?php
            $sq = "SELECT count(food)as pasta FROM `users` WHERE food LIKE '%pasta%'";
           $res = mysqli_query($db, $sq);
           while ($ro = $res->fetch_assoc()) {
            echo ROUND($total = $ro['pasta'] / $rows * 100,2); 
            }
            ?> 
        %
    </p>
    <p class="card-text">Percentage of people who like Pap and Wors:
            <?php
            $sq = "SELECT count(food)as pap FROM `users` WHERE food LIKE '%pap and wors%'";
           $res = mysqli_query($db, $sq);
           while ($ro = $res->fetch_assoc()) {
            echo ROUND($total = $ro['pap'] / $rows * 100,2);
            }
            ?> 
           %
    </p><br>
    <p class="card-text">
         <?php
          while ($row  = mysqli_fetch_assoc($eatOut)){
              $eat = $row['eatout'];
              echo '<p>People like to eat out: '.$eat.'</p>';
          }
        ?>   
    </p>
    <p class="card-text">
            <?php
          while ($row  = mysqli_fetch_assoc($watch)){
              $wat = $row['watc'];
              echo '<p>People like to watch movies: '.$wat.'</p>';
          }
        ?>       
    </p>
    <p class="card-text">
             <?php
          while ($row  = mysqli_fetch_assoc($watchTv)){
              $tv = $row['tvi'];
              echo '<p>People like to watch TV: '.$tv.'</p>';
          }
        ?>     
    </p>
    <p class="card-text">
               <?php
          while ($row  = mysqli_fetch_assoc($wave)){
              $radio = $row['rad'];
              echo '<p>People like to listen to the radio: '.$radio.'</p>';
          }
        ?>       
    </p>
  </div>
<div class="card-footer text-center">
    <a href="index.php"><button type="button" name="submit" class="btn btn-lg btn-outline-success">OK</button></a>
</div>
</div>

<?php include 'includes/footer.php'; ?>