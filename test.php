<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Нэр оруулах шаардлагатай";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Цахим шуудан оруулах шаардлагатай";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $websiteErr = "Нууц үг оруулах шаардлагатай";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form action="testu.php" method="post">
<h2>БҮРТГҮҮЛЭХ</h2>
<p><span class="error">* Заавал бөглөх талбар</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Овог: <input type="text" name="firstname">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Нэр: <input type="text" name="lastname">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Ц-Шуудан: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Нууц үг: <input type="password" name="password">
  <span class="error">* <?php echo $websiteErr;?></span>
  <br><br>
  <input type="submit" name="Бүртгүүлэх" value="Бүртгүүлэх">
</form>



</body>
</html>