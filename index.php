<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
$myname = "Adam Gyarmati";                              /*exercise 1*/
echo "<h1 class= 'name'>".$myname."</h1>";

$d = date("D");                                         /*exercise 2 */
if ($d=="Mon" )
echo "<h2 class= 'monday'>Happy Monday</h2>";
elseif ($d=="Tue")
echo "<h2 class= 'tuesday'>Happy Tuesday</h2>";         /*exercise 3 */
elseif ($d=="Wed")
echo "<h2 class= 'wednesday'>Happy Wednesday</h2>";
elseif ($d=="Thu")
echo "<h2 class= 'thursday'>Happy Thursday</h2>";
elseif ($d=="Fri")
echo "<h2 class= 'friday'>Happy Friday</h2>";
elseif ($d=="Sat")
echo "<h2 class= 'saturday'>Happy Saturday</h2>";
elseif ($d=="Sun")
echo "<h2 class= 'sunday'>Happy Sunday</h2>";
else
echo "Have a nice day!" ;

                                                        /*exercise 4 */

for( $i=0; $i<50; $i++ )                                    
{
echo "<h3>".$myname."</h3>"; 
}

$i = 0;
while( $i < 50)
{
$i ++;
echo "<h3>".$myname."</h3>"; 
}

$x = 0;
do {
    echo "$x Adam Gyarmati<br>";
    $x++;
} while ($x <= 50);

$myn = array("Adam Gyaramti");
foreach( $myn as $my)
{
    echo "<h3>".$my."</h3>"; 
}

$ten_elements = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);      /*exercise 5 */
foreach( $ten_elements as  $value )
{
echo "The element is: $value <br />";
}

                                                            /*exercise 6 */
$anime_age = array("Goku"=>"35", "Vegita"=>"37", "Bulma"=>"28", "Robert"=>"37", "Micky"=>"36",
 "Mini"=>"18", "Pluto"=>"21", "Donald"=>"58", "Balu"=>"89", "Bubu"=>"6");
 echo "<br />Goku is " . $anime_age['Goku'] . " years old.<br />";
 echo "Vegita is " . $anime_age['Vegita'] . " years old.<br />";
 echo "Bulma is " . $anime_age['Bulma'] . " years old.<br />";
 echo "Robert is " . $anime_age['Robert'] . " years old.<br />";
 echo "Micky is " . $anime_age['Micky'] . " years old.<br />";
 echo "Mini is " . $anime_age['Mini'] . " years old.<br />";
 echo "Pluto is " . $anime_age['Pluto'] . " years old.<br />";
 echo "Donald is " . $anime_age['Donald'] . " years old.<br />";
 echo "Balu is " . $anime_age['Balu'] . " years old.<br />";
 echo "Bubu is " . $anime_age['Bubu'] . " years old.<br />";


 
?>
</body>
</html>
