
<h1>Login</h1>


<pre>



	<?php


	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "loginapp";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected successfully "; 

	} catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
		die();
	}

	if (isset($_POST['submit'])){

		$statement = $conn->prepare("INSERT INTO users (username, password) VALUES (:a, :b)"); //sablonas del SQL injection
		$statement->execute([
			'a' => $_POST['username'],
			'b' => $_POST['password']
		]);

		echo "New record created successfully";

	}

	$stmt = $conn->query("SELECT username, password FROM users"); 
	$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

	
	foreach ($users as $user) {
		echo $user['username'] . " " . $user['password'];
	}

	print_r($users);


	echo "<hr>";	















	?>









	<?php 
// if (isset($_POST['submit'])){
// 	$username = $_POST['username'];
// 	$password = $_POST['password'];

// 	$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
// 	if($connection) {
// 	echo "we are connected" . "<br />"; //ar galima sia zinute imesti kaip kad su JS narsykleje

// } else {
// 	die("Databe connection faled");
// }
// }

// $query = "INSERT INTO users(username, password) ";
// $query .= "VALUES ('$username', '$password')";




// $result = mysqli_query($connection, $query);

// if (!$result) {
// 		die("Query faild"); // tikrinam ar veikia duomenu perdavimas i duombaze
// 	}
// 		// echo "your name is " . $username . " and your passoword is " . $password;



	?>