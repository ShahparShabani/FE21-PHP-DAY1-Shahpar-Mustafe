<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced - Day 1</title>
</head>

<body>

    <?php $charactersAsso = array("cartoon-1"=> "Mickey Mouse", "game"=> "Super Mario",
    "cartoon-2"=> "Bugs Bunny", "cartoon-3"=> "Daffy Duck", "animation-1" => "Homer Simpson",
    "animation-2" => "Garfield",  "animation-3" => "Shrek"
);

$charactersAsso2 = ["0"=> "Mickey Mouse", "1"=> "Super Mario",
    "2"=> "Bugs Bunny", "3"=> "Daffy Duck", "4" => "Homer Simpson",
    "5" => "Garfield",  "6" => "Shrek"
];

$charactersMulti2 = [
    ["Mickey Mouse", 1970],
    ["Super Mario", 1995],
    ["Bugs Bunny", 1985],
    ["Daffy Duck", 1998], 
    ["Homer Simpson", 2009],
    ["Garfield", 2011], 
    ["Shrek", 2010]
];

// Print associative array
    foreach($charactersAsso2 as $key => $value) {
      echo "<p><b>Number $key</b></p>";
      echo "<ul>";
     
        echo "<li>".$value."</li>";
      
      echo "</ul>";
    }

    echo '<hr>';

// Print multidimensional array
    for ($i = 0; $i < count($charactersMulti2); $i++) {
        echo "<p><b>Number $i</b></p>";
        echo "<ul>";
        for ($j = 0; $j < 2; $j++) {
          echo "<li>".$charactersMulti2[$i][$j]."</li>";
        }
        echo "</ul>";
      }
    

?>



</body>

</html>