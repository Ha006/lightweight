<?php

include('sql.php');

$result = mysqli_query($con,'SELECT row FROM table WHERE row2 != value');
while($row = mysqli_fetch_array($result)) {
  echo $row['row'];
}

?>
