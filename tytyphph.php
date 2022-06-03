if(file_exists('$username.jpg')){
	echo '<img src ="$username.jpg">';
}
else{
	
	echo "<img src='.png'>";
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";
}

// go to the database and fectch me stuff
$result = $conn->query("select * from profil where username='$username'");
		if($result->num_rows){
			$row = $result->fetch_array(MYSQLI_ASSOC);
			echo $row['aboutme'];
		}
		else{
			echo 'nothing yet in the about';
			echo "<br/>";
	echo "<br/>";
	echo "<br/>";
		}
		
		
		
		if(isset($_POST['post'])){
			
			$postmess = $_POST['text'];
			if($postmess != ""){
		$rest = $conn->query("select * from profil where username = '$username'");
			if($rest->num_rows){
			$conn->query("update profil set aboutme = '$postmess' where username='$username'");
			}
				else{
					$conn->query("insert into profil values('$username','','$postmess') ");
				}
				
			}
			}
			
			
			
	if(file_exists('$username.jpg')){
	echo '<img src ="$username.jpg">';
}
else{
	
	echo "<img src='.png'>";
	echo "<br/>";
	echo "<br/>";
	echo "<br/>";
}

// go to the database and fectch me stuff
$result = $conn->query("select * from profil where username='$username'");
		if($result->num_rows){
			$row = $result->fetch_array(MYSQLI_ASSOC);
			echo $row['aboutme'];
		}
		else{
			echo 'nothing yet in the about';
			echo "<br/>";
	echo "<br/>";
	echo "<br/>";
		}
		
		
		
		if(isset($_POST['post'])){
			
			$postmess = $_POST['text'];
			if($postmess != ""){
		$rest = $conn->query("select * from profil where username = '$username'");
			if($rest->num_rows){
			$conn->query("update profil set aboutme = '$postmess' where username='$username'");
			}
				else{
					$conn->query("insert into profil values('$username','','$postmess') ");
				}
				
			}
			}
			
			
			
	