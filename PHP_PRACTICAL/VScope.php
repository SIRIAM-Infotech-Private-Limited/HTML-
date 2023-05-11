<!DOCTYPE html>
<html>
<body>

<?php
$x = 15; // global scope
 
function Scope() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
} 
Scope();

echo "<p>Variable x outside function is: $x</p>";
?>

</body>
</html>


