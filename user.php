<?php

include 'header.php';
myHeader(currentUser());
include 'treasure/treasureFunctions.php';

if ($_POST['treasure-id-i']) {
	// update treasure using sql bindings
	updateObjects($link, "Treasure", $_POST);
} elseif ($_POST['treasure-treasurename-s'] && $_POST['treasure-points-i']) {
	// create new treasure
}


?>

<div class="col-sm-8">
<center>
	<h1 class="byUser" id="hints" style="margin-bottom:8%">Hints</h1>
</center>
<?php
$result = userObjects($link, "Treasure");
if ($result->num_rows > 0) {
?>
<center>
	<h1 class="byUser" id="hints" style="margin-bottom:8%">Treasure</h1>
</center>
<?php
	while($row = $result->fetch_assoc()) {
		treasureForm($row);
	}
}
?>

</div>
<?php
include "footer.php";
/* End of file user.php */