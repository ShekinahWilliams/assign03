<!DOCTYPE html>
<html>
<body>
<?php
$description = array ("Name", "Age", "Height", "Weight","Position");
echo $description;

$persons = array
(array("Name" => "Jeff","Age" => "22", "Height" => "6'5","Weight" => "220lbs", "Position" => "Linebacker"),
array("Name" => "Fred","Age" => "21", "Height" => "5'11","Weight" => "195lbs", "Position" => "Safety"),
array("Name" => "Sam","Age" => "22", "Height" => "6'0","Weight" => "202lbs", "Position" => "Tight End"),
array("Name" => "Justin","Age" => "21", "Height" => "5'8","Weight" => "220lbs", "Position" => "Defensive End"),
);
echo "<table><tr><th>Name</th><th>Age</th><th>Height</th><th>Weight</th><th>Position</th></tr>";
foreach ($persons as $person){
echo "<tr><td>" . $person['Name'] . "</td>";
echo "<td>" . $person['Age'] . "</td>";
echo "<td>" .  $person['Height'] . "</td>";
echo "<td>" . $person['Weight'] . "</td>";
echo "<td>" . $person['Position'] . "</td></tr>";
}

echo "</table>";
?>
</body>
</html>
