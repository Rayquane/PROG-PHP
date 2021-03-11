<?php

require "classes_partiel.php";

$lot = array(new Lot(45000, "Asus", 400, 100, 20),
			 new Lot(55000, "Samsung", 100, 50, 10));


			 echo "<table border='2'";

foreach ($lot as $elem) {
	echo "<tr>";
	$elem->toHTML();
	echo "</tr>";
}
echo "</table>";

$developpeur = array(new Developpeur(550,"Le Flock", "Louis-Marie", "lmleflock@test.net",
"0606060606",2500, "Java"),
new Developpeur(650,"Chellal", "Amine", "ach@test.net", "0707070707",2750, "C++")) ;
?>

