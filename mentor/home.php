<?php
session_start();
echo "<p>Session begun</p>";
?>

<!DOCTYPE html>
<html>
<head>
<title>Mentor homepage</title>
</head>

<body>
<p>Home page</p>
<p>
<?php
echo "Hello there ";
echo $_SESSION["uname"];
echo " after";

print_r($_SESSION);
?>
</p>
</body>
</html>
