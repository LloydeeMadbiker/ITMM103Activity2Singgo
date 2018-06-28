<!DOCTYPE html>
<html>
<title>itmm103activity02</title>
<body>

<h1>Assignment</h1>
<p>
	<?php
	echo "Number One";
	echo "<br>";
for ($row = 1; $row <= 5; $row++)
{
    for ($col = 1; $col <= $row; $col++)
    {
        echo '*';
    }

    echo "<br>";
}
	echo "Number Two";
	echo "<br>";
for ($row = 1; $row <= 5; $row++)
{
    for ($col = 1; $col <= 6 - $row; $col++)
    {
        echo '*';
    }

    echo "<br>";
}
	echo "Number Three";
	echo "<br>";
	echo '<p align="right">';
		for($row=1;$row<=5;$row++)
{
	echo  str_repeat('*',$row);
	echo "<br>";
}


	echo "Number Four";
	echo "<br>";
for ($row = 1; $row <= 5; $row++)
{
    for ($col = 1; $col <= 6 - $row; $col++)
    {
        echo '*';
    }

    echo "<br>";
}


?>

	
</p>

</body>
</html>