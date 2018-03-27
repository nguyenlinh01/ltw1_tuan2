<form method="GET">
	<p>Name: <input type="text" name="inputName" value="<?php if(isset($_GET['inputName'])){echo $_GET['inputName'];} ?>"/></p>
	<p>Email: <input type="text" name="inputEmail" value="<?php if(isset($_GET['inputEmail'])){echo $_GET['inputEmail'];}?>"></p>
	<p>Websides: <input type="text" name="inputWeb" value="<?php if(isset($_GET['inputWeb'])){echo $_GET['inputWeb'];}?>"></p>
	<p>Comment: <textarea name="inputComment"><?php if(isset($_GET['inputComment'])){echo htmlentities ($_GET['inputComment']);}?></textarea></p>
	<p>Gender: <input type="radio" name="Gender" <?php if(isset($_GET['Gender']) && $_GET['Gender'] == "Male"){echo "checked";}?> value="Male">Male
				<input type="radio" name="Gender" <?php if(isset($_GET['Gender']) && $_GET['Gender'] == "Female"){echo "checked";}?> value="Female">Female</p>
	<input type="submit" name="">
</form>