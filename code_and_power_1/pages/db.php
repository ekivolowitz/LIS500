<html lang="en">
    <?php include '../template/header.php'?>
    <body>
    <?php include '../template/navbar.php'?>
		<?php
			class MyDB extends SQLite3
			{
				function __construct() {
					$this->open('../code_and_power_1.db');
				}
			}

			$db = new MyDB();

			if(isset($_POST['user_input'])) {
				if($_POST['user_input'] !== "") {
					$s = "INSERT INTO Review VALUES (" . $_POST['user_input']. ")";
					$db->exec($s);
				} else {
					echo "Must enter values 1 to 5.";
				}
			}

		?>	
		
		<form action="db.php" method="post">
			Rating: <input name="user_input" type="number" min="1" max="5">
			<input type="submit">
		</form>
		<form action="db.php" method="get">
			<button type="submit" formmethod="get">Get Average Inclusivness Rating</button>
		</form>
		<?php
			if($_SERVER['REQUEST_METHOD'] === 'GET') {
				$query = "SELECT AVG(INTEGER) FROM Review;";
				$ret = $db->query($query);
				while($row = $ret->fetchArray()) {
					echo "<h1>Average inclusiveness rating: {$row['AVG(INTEGER)']}</h1>";
				}
		}	
		?>

	</body>
</html>
