<?php
require_once 'core/connect.php'; 
include 'includes/head.php';
include 'includes/validations.php';
?>

<div class="card white bg-green" style="background-image: url(Images/butterflies.jpg);">
  <div class="card-body">
    <div class="text-center"><h4>Fill Our Survey</h4> </div>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
<div class="form-group">
  <label for="name"><b>Personal Details:</b></label>
  <input class="form-control" type="text" name="surname" placeholder="Surname">
  <span class="error"><?php echo $surname_error; ?></span>
</div>

<div class="form-group">
  <label for="name">Full Name:</label>
  <input class="form-control" type="text" name="fullName"  placeholder="First Names">
  <div class="error"><?= $fullName_error ?></div>
</div>

        <div class="form-group" >
  <label for="name">Contact:</label>
  <input class="form-control" type="text" name="contact" placeholder="Contact">
  <div class="error"><?= $contact_error ?></div>
</div>

<div class="form-group">
  <label for="name">Date:</label>
  <input class="form-control" type="date" name="date">
  <div class="error"><?= $date_error ?></div>
</div>

<div class="form-group">
  <label for="name">Age:</label>
  <input class="form-control" type="number" name="age" placeholder="Age">
  <div class="error"><?= $age_error ?></div>
</div>

<label><b>What is your favourite food? (You can choose more than 1 answer)</b></label><br>

<input type="checkbox" name="food[]" value="pizza">
<label for="pizza">  Pizza</label><br>

<input type="checkbox" name="food[]" value="pasta">
<label for="pasta">  Pasta</label><br>

<input type="checkbox" name="food[]" value="Pap and Wors">
<label for="pap">  Pap and Wors</label><br>

<input type="checkbox" name="food[]" value="Chicken stir fry">
<label for="chicken">  Chicken stir fry</label><br>

<input type="checkbox" name="food[]" value="Beef stir fry">
<label for="beef"> Beef stir fry</label><br>

<input type="checkbox" name="food[]" value="other">
<label for="other"> Other</label><br>

<p><b>On a scale of 1 to 5 indicate whether you strongly agree to strongly disagree</b></p>
<table class="table table-bordered">
  <thead>
    <tr>
      <th></th>
      <th>Strongly Agree (1)</th>
      <th>Agree (2)</th>
      <th>Neutral (3)</th>
      <th>Disagree (4)</th>
      <th>Strongly disagree (5)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><b>I like to eat out</b></td>
      <td class="ml-4"><input type="radio" name="eatout" value="1" ></td>
      <td><input type="radio" name="eatout" value="2"></td>
      <td><input type="radio" name="eatout" value="3"></td>
      <td><input type="radio" name="eatout" value="4"></td>
      <td><input type="radio" name="eatout" value="5"></td>
    </tr>
    <tr>
      <td><b>I like to watch movies</b></td>
      <td class="ml-4"><input type="radio" name="movies" value="1"></td>
      <td><input type="radio" name="movies" value="2"></td>
      <td><input type="radio" name="movies" value="3"></td>
      <td><input type="radio" name="movies" value="4"></td>
      <td><input type="radio" name="movies" value="5"></td>
    </tr>
    <tr>
      <td><b>I like to watch TV</b></td>
      <td class="ml-4"><input type="radio" name="tv" value="1"></td>
      <td><input type="radio" name="tv" value="2"></td>
      <td><input type="radio" name="tv" value="3"></td>
      <td><input type="radio" name="tv" value="4"></td>
      <td><input type="radio" name="tv" value="5"></td>
    </tr>
    <tr>
      <td><b>I like to listen to the radio</b></td>
      <td class="ml-4"><input type="radio" name="radio" value="1"></td>
      <td><input type="radio" name="radio" value="2"></td>
      <td><input type="radio" name="radio" value="3"></td>
      <td><input type="radio" name="radio" value="4"></td>
      <td><input type="radio" name="radio" value="5"></td>
    </tr>
  </tbody>
</table><br>
<div class="text-center" style="background-image: url(Images/butterflies.jpg);">
    <button type="submit" name="submit" class="btn btn-primary">Submit Survey</button>
    
</div><br>
  </form>
 </div>
 </div>

<?php include 'includes/footer.php'; ?>