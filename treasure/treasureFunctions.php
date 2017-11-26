<?php


function treasureForm($row)
{
	/*
	 *
	 CREATE TABLE Treasure (
		 id int PRIMARY KEY,
		 treasurename varchar(100) NOT NULL,
		 locat_long int NOT NULL,
		 locat_lat int NOT NULL,
		 points int CHECK (points > 0),
		 user_id_creator int REFERENCES User (id),
		 CONSTRAINT unique_treasure UNIQUE (treasurename)
	 );
	 */
	if ($row) {
?>
		<form action="/user.php" method="post">
			<div class="col-sm-4 col-sm-offset-4">
				<label for="treasure-id-i">Treasure ID:</label>
				<input type="text" class="form-control" value="<?php echo $row['id'];?>" readonly name="treasure-id-i"  style="margin-bottom:4%">
				<label for="treasure-treasurename-s">Treasure Name:</label>
				<input type="text" class="form-control" value="<?php echo $row['treasurename'];?>" name="treasure-treasurename-s"  style="margin-bottom:4%">
				<label for="treasure-locat_lat-d">Latitude (Please do not edit this unless you are sure of what you are doing!):</label>
				<input type="text" class="form-control" value="<?php echo $row['locat_lat'];?>" name="treasure-locat_lat-d"  style="margin-bottom:4%">
				<label for="treasure-locat_long-d">Longitude (Please do not edit this unless you are sure of what you are doing!):</label>
				<input type="text" class="form-control" value="<?php echo $row['locat_long'];?>" name="treasure-locat_long-d"  style="margin-bottom:4%">
				<label for="treasure-points-i">Rewards:</label>
				<input type="text" class="form-control" value="<?php echo $row['points'];?>" name="treasure-points-i"  style="margin-bottom:4%">
				<center>
					<button type="submit" class="btn btn-default" style="background:#69f0ae"><strong>Update</strong></button>
				</center>
			</div>
		</form>
<?php
	} else {
?>
	<form action="/user.php" method="post" style="margin-top: 50px;">
		<div class="col-sm-4 col-sm-offset-4">
			<div>Please not that the location of your treasure will be where you are at the moment you submit this form!</div>
			<label for="treasure-treasurename-s">Treasure Name:</label>
			<input type="text" class="form-control" name="treasure-treasurename-s"  style="margin-bottom:4%">
			<label for="treasure-points-i">Rewards:</label>
			<input type="text" class="form-control" name="treasure-points-i"  style="margin-bottom:4%">
			<center>
				<button type="submit" class="btn btn-default" style="background:#69f0ae"><strong>Update</strong></button>
			</center>
		</div>
	</form>
<?php
	}
	/* echo "<div style='width: 100px; height: 300px;'></div>"; */
}
/* End of file treasureFunctions.php */