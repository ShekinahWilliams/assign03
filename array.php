<!DOCTYPE html>
<html>
<body>
<?php
$titles[0] = "Name";
$titles[1] = "Age";
$titles[2] = "Height";
$titles[3] = "Weight";
$titles[4] = "Position";
echo $titles[0], $titles[1],$titles[2],$titles[3],$titles[4];
$infos[0]= "Jeff";
$infos[1]= "22";
$infos[2]= "6'5";
$infos[3]= "220lbs";
$infos[4]= "Linebacker";
echo $infos[0], $infos[1],$infos[2],$infos[3],$infos[4];

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
