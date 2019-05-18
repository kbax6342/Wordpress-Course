<?php

$names = array('Brad', 'John','Jane','Meowsalot');
$count = 0;

while ($count < count($names)) {
  echo "<p>Hi, my name is $names[$count]</p>";
  $count++;
}
?>

<p>Hi, my name is <?php echo $names[3];?>.</p>
