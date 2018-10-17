<!DOCTYPE html>
<html>
<body>
<?php
$descrips = array("Name", "Age", "Height","Weight", "Postion");
echo "<table><tr><th>Name</th><th>Age</th><th>Height</th><th>Weight</th><th>Position</th></tr>";
foreach ($descrips as $descrip){
echo "<tr><td>" . $descrips['Jeff'] . "</td>";
echo "<td>" . $descrips['22'] . "</td>";
echo "<td>" .  $descrips['6"5'] . "</td>";
echo "<td>" . $descrips['220lbs'] . "</td>";
echo "<td>" . $descrips['Linebacker'] . "</td></tr>";
}
echo "</table>";


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
