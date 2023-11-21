<?php
$x = 20;
$y = 17;

echo $x==$y; 
echo "<br>";
echo $x!=$y; 
echo "<br>";
echo $x>=$y;
echo "<br>";
echo $x<=$y; 
echo "<br>";
echo $x>$y; 
echo "<br>";
echo $x<$y; 
echo "<br>";

$names = array('Morteza', 'Milad', 'Yousef', 'Keyvan', 'Ali', 'Mohammad');
echo $names[2];
echo "<br>";
$ages = [29, 30, 20, 17, 19, 19];
echo $ages[2];
echo "<br>";

$gender = array();
$gender[0] = 'Male';
$gender[1] = 'Male';
$gender[2] = 'Male';
$gender[3] = 'Male';
$gender[4] = 'Male';
$gender[5] = 'Male';
echo $gender[0];
echo "<br>";

$status = array();
$status['online'] = 'yousef';
$status['offline'] = 'Keyvan';
echo $status['offline'];
echo "<br>";

$ints = array('name'=>'yousef', 'age'=>20, 'favcolor'=>'green');
echo $ints['favcolor'];
echo "<br>";

$name =  'yousef' ;
$lastname = 'ghavidel' ;
$age = 20 ;
echo $name . ' '. $lastname ;
echo '<br>' ;
echo $age ;
echo '<br>' ;
$people = array ('yousef' => array ('yousef ghavidel','20','soccer'),
'keyvan'=>array ('keyvan abdollahi','17','gamer'),
'milad' => array ('milad vahdati','30','football'),);
echo $people['yousef'][0] ;
echo "\t";
echo $people['yousef'][1] ;
echo "\t";
echo $people['yousef'][2] ;
echo '<br>' ;
echo $people['milad'][0];
echo "\t";
echo $people['milad'][1];
echo "\t";
echo $people['milad'][2];
echo '<br>' ;
echo $people['keyvan'][0];
echo "\t";
echo $people['keyvan'][1];
echo "\t";
echo $people['keyvan'][2];



?>