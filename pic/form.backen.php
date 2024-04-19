<?php
$username = $_POST["username"];
$usersex = $_POST["usersex"];
$userschool = $_POST["userschool"];
$userthrough = $_POST["userthrough"];
$userinterest = $_POST["userinterest"];
$useremail = $_POST["useremail"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>表單結果</title>
</head>

<body bgcolor="#ECE6D6">
  <?php
if ($usersex == "男") {
    echo "<h2>{$username}先生您好</h2>";
} else {
    echo "<h2>{$username}小姐您好</h2><br>";
}

echo "您的學歷為：" . $userschool . "<br>";
echo "您的興趣如下";
echo "<ul>";

foreach ($userinterest as $value) {
    echo "<li>" . $value . "</li>";
}
echo "</ul>";

echo "即將被垃圾信件攻擊的mail:" . $useremail . "<br>";

echo "你對自己的興趣有什麼想法呢？<br>";
echo $userthrough . "<br>";
?>

</body>

</html>
