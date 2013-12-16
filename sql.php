<?php

include('sql.php');

// SELECT
$result = mysqli_query($con,'SELECT row FROM table WHERE row2 != value');
while($row = mysqli_fetch_array($result)) {
  echo $row['row'];
}

// INSERT
$query = 'INSERT INTO table (row, row2, row3) VALUES ("' . $row . '", "' . $row2 . '", "' . $row3 . '")';
mysqli_query($con, $query);

?>
