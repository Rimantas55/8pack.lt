
<h1>Login</h1>


<pre>



	<?php


	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "loginapp";

	//sita dali nukopinam
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected successfully "; 

	} catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
		die();
	}

	if (isset($_POST['submit'])){ 

		#security password / incrypting password
		$hashFormat = "$2y$10$";
		$salt = "iusesomecrazystrings22"; //22zenklai
		$hashF_and_salt = $hashFormat . $salt;
		$_POST['password'] = crypt($_POST['password'], $hashF_and_salt);


		//ikelimas i MySQL duombaze ir darom apsauga pries MySQL injection, todel sukuriam sablona / 
		$statement = $conn->prepare("INSERT INTO users (username, password) VALUES (:a, :b)"); 
		$statement->execute([
			'a' => $_POST['username'],
			'b' => $_POST['password']
		]);

		echo "New record created successfully ";

	}
	//Pasirinkimias is duomenu bazes
	$stmt = $conn->query("SELECT username, password FROM users"); 
	$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

	//outputas is duomenu bazes
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