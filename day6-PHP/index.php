<?php 

echo "<br><h4>1. Using for loop"."</h4><br/>";
for($i=1;$i<6;$i++)
{
    echo $i."<br/>";
}

echo "<br><h4>2. Using while and ++</h4><br/>";

$i=1;
while($i!=6)
{
    echo $i."<br/>";
    $i++;
}

echo "<br><h4>3. Code for printing power of 2 till 5</h4><br/>";
$i=1;
while($i!=6)
{
    $res = 1;
    $j=0;
    while($j!=$i)
    {
        $res *=2;
        $j++;
    }
    echo "For iteration ".$i.", result is: ".$res."<br/>";

    $i++;
}



?>