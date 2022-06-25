<?php
// 1
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "education_host_pk";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
	if ($_POST["role"]=="Admin") {
		if ($_POST["operation"]=="Add Admin") {
			$admin_email = $_POST["admin_email"];
			$admin_first_name = $_POST["admin_first_name"];
			$admin_second_name = $_POST["admin_second_name"];
			$admin_password = $_POST["admin_password"];
			if (isset($admin_email) && isset($admin_first_name) && 
				isset($admin_second_name) && isset($admin_password)) {

				$query = "SELECT email FROM admin_table WHERE 
						 email='".$admin_email."'";
			  	$result=mysqli_query($conn,$query);
			  	 if(mysqli_num_rows($result)!=0){
					echo "<script>
					alert('Admin Exist With This Email');
					window.location.href='../admin/add_admin.php';
					</script>";
			  	 }
			  	else{
			  		$query2 = "INSERT INTO admin_table(email, first_name, second_name, 
					password) 
					VALUES ('".$admin_email."','".$admin_first_name."',
							'".$admin_second_name."','".$admin_password."')";
	
					// $result2=mysqli_query($conn,$query2);
					if (mysqli_query($conn, $query2)) {
						echo "<script>
						alert('New Admin Created Successfully');
						window.location.href='../admin/add_admin.php';
						</script>";
					} 
					else {
				   		echo "<script>
						alert('Cannot Insert Record Please Try Again');
						window.location.href='../admin/add_admin.php';
						</script>";
					}
			  	}
			}

		}
		else if ($_POST["operation"]=="Delete Admin") {
			$admin_email = $_POST["admin_email"];
			if (isset($admin_email)) {
				$query = "SELECT email FROM admin_table WHERE 
						 email='".$admin_email."'";
			  	$result=mysqli_query($conn,$query);
			  	if(mysqli_num_rows($result)==0){
					echo "<script>
					alert('No Admin Exist With This Email');
					window.location.href='../user/delete_user.php';
					</script>";
			  	}
				else{
					$query = "DELETE FROM admin_table WHERE 
						 email='".$admin_email."'";
				  	if(mysqli_query($conn,$query)){
						echo "<script>
						alert('Admin is Deleted');
						window.location.href='../admin/delete_admin.php';
						</script>";
				  	}
				  	else{
				  		echo "<script>
						alert('Error Try Again Later Please');
						window.location.href='../admin/delete_admin.php';
						</script>";
				  	}
				}
			}

		}
		else if ($_POST["operation"]=="Update Admin") {

			$id = $_POST["id"];
			$email = $_POST["email"];
			$first_name = $_POST["first_name"];
			$second_name = $_POST["second_name"];

			$sql = "UPDATE admin_table SET first_name = '".$first_name."',
   				    second_name = '".$second_name."', email='".$email."' 
					WHERE id = '".$id."'
			";
				if (mysqli_query($conn, $sql)) {
				    echo "<script>
					alert('Admin Updated Successfully');
					window.location.href='../admin/update_admin.php';
					</script>";
				} 
				else {
					echo "<script>
					alert('Error updating record Please Try Again Later');
					window.location.href='../admin/update_admin.php';
					</script>";
				    // echo "Error updating record: " . mysqli_error($conn);
				}


		}
	}
	// 2
	else if ($_POST["role"]=="User") {
		if ($_POST["operation"]=="Add User")  {
			$user_email = $_POST["user_email"];
			$user_first_name = $_POST["user_first_name"];
			$user_second_name = $_POST["user_second_name"];
			$user_password = $_POST["user_password"];
			if (isset($user_email) && isset($user_first_name) && 
				isset($user_second_name) && isset($user_password)) {

				$query = "SELECT email FROM users_table WHERE 
						 email='".$user_email."'";
			  	$result=mysqli_query($conn,$query);
			  	 if(mysqli_num_rows($result)!=0){
					echo "<script>
					alert('User Exist With This Email');
					window.location.href='../user/add_user.php';
					</script>";
			  	 }
			  	else{
			  		$query2 = "INSERT INTO users_table(first_name, second_name, 
					email,password) 
					VALUES ('".$user_first_name."','".$user_second_name."',
							'".$user_email."','".$user_password."')";
	
					// $result2=mysqli_query($conn,$query2);
					if (mysqli_query($conn, $query2)) {
						echo "<script>
						alert('New User Created Successfully');
						window.location.href='../user/add_user.php';
						</script>";
					} 
					else {
				   		echo "<script>
						alert('Cannot Insert Record Please Try Again');
						window.location.href='../user/add_user.php';
						</script>";
					}
			  	}
			}

		}
		else if ($_POST["operation"]=="Delete User") {
			$user_email = $_POST["user_email"];
			if (isset($user_email)) {
				$query = "SELECT email FROM users_table WHERE 
						 email='".$user_email."'";
			  	$result=mysqli_query($conn,$query);
			  	 if(mysqli_num_rows($result)==0){
					echo "<script>
					alert('No User Exist With This Email');
					window.location.href='../user/delete_user.php';
					</script>";
			  	 }
			  	else{
					$query = "DELETE FROM users_table WHERE 
							 email='".$user_email."'";
				  	if(mysqli_query($conn,$query)){
						echo "<script>
						alert('User is Deleted');
						window.location.href='../user/delete_user.php';
						</script>";
				  	}
				  	else{
				  		echo "<script>
						alert('Error Try Again Later Please');
						window.location.href='../user/delete_user.php';
						</script>";
				  	}
			  	}
			}

		}
		else if ($_POST["operation"]=="Update User")  {

			$id = $_POST["id"];
			$email = $_POST["email"];
			$first_name = $_POST["first_name"];
			$second_name = $_POST["second_name"];

			$sql = "UPDATE users_table SET first_name = '".$first_name."',
   				    second_name = '".$second_name."', email='".$email."' 
					WHERE user_id = '".$id."'
			";
				if (mysqli_query($conn, $sql)) {
				    echo "<script>
					alert('Admin Updated Successfully');
					window.location.href='../user/update_user.php';
					</script>";
				} 
				else {
					echo "<script>
					alert('Error updating record Please Try Again Later');
					window.location.href='../user/update_user.php';
					</script>";
				    // echo "Error updating record: " . mysqli_error($conn);
				}


		}
	}
	// 3
	else if ($_POST["role"]=="Province") {
		if ($_POST["operation"]=="Add Province") {
			$province_name = $_POST["province_name"];
			if (isset($province_name)) {

				$query = "SELECT province_name FROM province_table WHERE 
						 province_name='".$province_name."'";
			  	$result=mysqli_query($conn,$query);
			  	 if(mysqli_num_rows($result)!=0){
					echo "<script>
					alert('Province Exist With This Name');
					window.location.href='../province/add_province.php';
					</script>";
			  	 }
			  	else{
			  		$query2 = "INSERT INTO province_table(province_name) 
					VALUES ('".$province_name."')";
	
					// $result2=mysqli_query($conn,$query2);
					if (mysqli_query($conn, $query2)) {
						echo "<script>
						alert('New Province Created Successfully');
						window.location.href='../province/add_province.php';
						</script>";
					} 
					else {
				   		echo "<script>
						alert('Cannot Insert Record Please Try Again');
						window.location.href='../province/add_province.php';
						</script>";
					}
			  	}
			}

		}
		else if ($_POST["operation"]=="Delete Province"){
			$province_name = $_POST["province_name"];
			if (isset($province_name)) {

				$query = "SELECT province_name FROM province_table WHERE 
						 province_name='".$province_name."'";
			  	$result=mysqli_query($conn,$query);
			  	 if(mysqli_num_rows($result)==0){
					echo "<script>
					alert('No Province Exist With This Name');
					window.location.href='../province/delete_province.php';
					</script>";
			  	 }
			  	 else{
			  	 	$query = "DELETE FROM province_table WHERE 
						 province_name='".$province_name."'";
					  	if(mysqli_query($conn,$query)){
							echo "<script>
							alert('Province is Deleted');
							window.location.href='../province/delete_province.php';
							</script>";
					  	}
					  	else{
					  		echo "<script>
							alert('Error Try Again Later Please');
							window.location.href='../province/delete_province.php';
							</script>";
				  		}
			  	 }
				
			}

		}
		else if ($_POST["operation"]=="Update Province")   {

			$id = $_POST["id"];
			$province_name = $_POST["province_name"];

			$sql = "UPDATE province_table SET province_name = '".$province_name."'
					WHERE id = '".$id."'
			";
				if (mysqli_query($conn, $sql)) {
				    echo "<script>
					alert('Province Updated Successfully');
					window.location.href='../province/update_province.php';
					</script>";
				} 
				else {
					echo "<script>
					alert('Error updating record Please Try Again Later');
					window.location.href='../province/update_province.php';
					</script>";
				    // echo "Error updating record: " . mysqli_error($conn);
				}


		}
	}
	// 4
	else if ($_POST["role"]=="City") {
		if ($_POST["operation"]=="Add City") {
			$city_name = $_POST["city_name"];
			$province_name = $_POST["province_name"];
			if (isset($province_name)) {

				$query = "SELECT city_name FROM city_table WHERE 
						 city_name='".$city_name."'";
			  	$result=mysqli_query($conn,$query);
			  	 if(mysqli_num_rows($result)!=0){
					echo "<script>
					alert('City Exist With This Name');
					window.location.href='../city/add_city.php';
					</script>";
			  	 }
			  	else{
			  		$query2 = "INSERT INTO city_table(city_name,province_name) 
					VALUES ('".$city_name."','".$province_name."')";
	
					// $result2=mysqli_query($conn,$query2);
					if (mysqli_query($conn, $query2)) {
						echo "<script>
						alert('New City Created Successfully');
						window.location.href='../city/add_city.php';
						</script>";
					} 
					else {
				   		echo "<script>
						alert('Cannot Insert Record Please Try Again');
						window.location.href='../city/add_city.php';
						</script>";
					}
			  	}
			}

		}
		else if ($_POST["operation"]=="Delete City") {
			$city_name = $_POST["city_name"];
			$province_name = $_POST["province_name"];
			if (isset($city_name) && isset($province_name)) {

				$query = "SELECT city_name FROM city_table WHERE 
						 city_name='".$city_name."' AND
						 province_name='".$province_name."'";
			  	$result=mysqli_query($conn,$query);
			  	 if(mysqli_num_rows($result)==0){
					echo "<script>
					alert('No City Exist With This Name');
					window.location.href='../city/delete_city.php';
					</script>";
			  	 }
			  	 else{
			  	 	$query = "DELETE FROM city_table WHERE 
						 city_name='".$city_name."' AND 
						 province_name='".$province_name."'";
					  	if(mysqli_query($conn,$query)){
							echo "<script>
							alert('City is Deleted');
							window.location.href='../city/delete_city.php';
							</script>";
					  	}
					  	else{
					  		echo "<script>
							alert('Error Try Again Later Please');
							window.location.href='../city/delete_city.php';
							</script>";
				  		}
			  	 }
				
			}

		}
		else if ($_POST["operation"]=="Update City")  {

			$id = $_POST["id"];
			$city_name = $_POST["city_name"];
			$province_name = $_POST["province_name"];

			$sql = "UPDATE city_table SET city_name = '".$city_name."',
					province_name = '".$province_name."' WHERE id = '".$id."'
			";
				if (mysqli_query($conn, $sql)) {
				    echo "<script>
					alert('City Updated Successfully');
					window.location.href='../city/update_city.php';
					</script>";
				} 
				else {
					echo "<script>
					alert('Error updating record Please Try Again Later');
					window.location.href='../city/update_city.php';
					</script>";
				    // echo "Error updating record: " . mysqli_error($conn);
				}


		}
	}
	// 5
	else if ($_POST["role"]=="University") {
		if ($_POST["operation"]=="Add University") {
			$province_name = $_POST["province_name"];
			$city_name = $_POST["city_name"];
			$university_name = $_POST["university_name"];
			// $university_logo = $_POST["university_logo"];
			$field_name = $_POST["field_name"];
			$field_title = $_POST["field_title"];
			$field_description = $_POST["field_description"];
			$field_roadmap = $_POST["roadmap"];
			$website_link = $_POST["website_link"];
			
			if (isset($province_name)) {

				$query = "SELECT id FROM uni_details_table WHERE 
						 province_name = '".$province_name."' AND
						 city_name = '".$city_name."' AND
						 uni_name = '".$university_name."' AND
						 field = '".$field_name."'";
			  	$result=mysqli_query($conn,$query);
			  	 if(mysqli_num_rows($result)!=0){
					echo "<script>
					alert('University Exist With These Details');
					window.location.href='../university/add_university.php';
					</script>";
			  	 }
			  	else{
			  		$filename = $_FILES['university_logo']['name'];
					$filetmpname = $_FILES['university_logo']['tmp_name'];
					$folder = 'upload_images/';
					move_uploaded_file($filetmpname, $folder.$filename);
			  		$query2 = "INSERT INTO uni_details_table(
			  				   province_name,city_name,uni_logo,uni_name,
			  				   field,field_title,field_description,
			  				   field_roadmap) 
					VALUES ('".$province_name."','".$city_name."',
							'".$filename."','".$university_name."',
							'".$field_name."','".$field_title."',
							'".$field_description."','".$field_roadmap."')";
	
					// $result2=mysqli_query($conn,$query2);
					if (mysqli_query($conn, $query2)) {
						echo "<script>
						alert('New University Created Successfully');
						window.location.href='../university/add_university.php';
						</script>";
					} 
					else {
				   		echo "<script>
						alert('Cannot Insert Record Please Try Again');
						window.location.href='../university/add_university.php';
						</script>";
  					    // echo "Error updating record: " . mysqli_error($conn);
					}
			  	}
			}

		}
		else if ($_POST["operation"]=="Delete University") {
			$id = $_POST["id"];
			if (isset($id)) {

				$query = "SELECT id FROM uni_details_table WHERE id='".$id."'";
			  	$result=mysqli_query($conn,$query);
			  	 if(mysqli_num_rows($result)==0){
					echo "<script>
					alert('No University Exist With These Details');
					window.location.href='../university/delete_university.php';
					</script>";
			  	 }
			  	 else{
			  	 	$query = "DELETE FROM uni_details_table WHERE id='".$id."'";
					  	if(mysqli_query($conn,$query)){
							echo "<script>
							alert('University is Deleted');
							window.location.href='../university/delete_university.php';
							</script>";
					  	}
					  	else{
					  		echo "<script>
							alert('Error Try Again Later Please');
							window.location.href='../university/delete_university.php';
							</script>";
				  		}
			  	 }
				
			}

		}
		else if ($_POST["operation"]=="Update University")  {

			$id = $_POST["id"];
			$province_name = $_POST["province_name"];
			$city_name = $_POST["city_name"];
			$uni_logo = $_POST["uni_logo"];
			$uni_name = $_POST["uni_name"];
			$field_name = $_POST["field_name"];
			$field_title = $_POST["field_title"];
			$field_description = $_POST["field_description"];
			$field_roadmap = $_POST["field_roadmap"];

			$sql = "UPDATE uni_details_table SET 
						   province_name = '".$province_name."',
						   city_name = '".$city_name."',
						   uni_logo = '".$uni_logo."',
						   uni_name = '".$uni_name."',
						   field = '".$field_name."',
						   field_title = '".$field_title."',
						   field_description = '".$field_description."',
						   field_roadmap = '".$field_roadmap."'
					WHERE id = '".$id."'
			";
				if (mysqli_query($conn, $sql)) {
				    echo "<script>
					alert('University Updated Successfully');
					window.location.href='../university/update_university.php';
					</script>";
				    // echo "Error updating record: " . mysqli_error($conn);
					
				} 
				else {
					echo "<script>
					alert('Error updating record Please Try Again Later');
					window.location.href='../university/update_university.php';
					</script>";
				    // echo "Error updating record: " . mysqli_error($conn);
				}


		}
	}
	// 6
	else if ($_POST["role"]=="Field") {
		if ($_POST["operation"]=="Add Field") {
			$field_name = $_POST["field_name"];
			
			if (isset($field_name)) {

				$query = "SELECT field_name FROM field_table WHERE 
						 field_name = '".$field_name."'";
			  	$result=mysqli_query($conn,$query);
			  	 if(mysqli_num_rows($result)!=0){
					echo "<script>
					alert('Field Exist With This Name');
					window.location.href='../field/add_field.php';
					</script>";
			  	 }
			  	else{
			  		$query2 = "INSERT INTO field_table(field_name) 
					VALUES ('".$field_name."')";
	
					// $result2=mysqli_query($conn,$query2);
					if (mysqli_query($conn, $query2)) {
						echo "<script>
						alert('New Field Created Successfully');
						window.location.href='../field/add_field.php';
						</script>";
					} 
					else {
				   		echo "<script>
						alert('Cannot Insert Record Please Try Again');
						// window.location.href='../field/add_field.php';
						</script>";
					}
			  	}
			}

		}
		else if ($_POST["operation"]=="Delete Field") {
			$field_name = $_POST["field_name"];
			if (isset($field_name)) {
				$query = "SELECT field_name FROM field_table WHERE 
						 field_name='".$field_name."'";
			  	$result=mysqli_query($conn,$query);
			  	if(mysqli_num_rows($result)==0){
					echo "<script>
					alert('No Field Exist With This Name');
					window.location.href='../field/delete_field.php';
					</script>";
			  	}
				else{
					$query = "DELETE FROM field_table WHERE 
						 field_name='".$field_name."'";
				  	if(mysqli_query($conn,$query)){
						echo "<script>
						alert('Field is Deleted');
						window.location.href='../field/delete_field.php';
						</script>";
				  	}
				  	else{
				  		echo "<script>
						alert('Error Try Again Later Please');
						window.location.href='../field/delete_field.php';
						</script>";
				  	}
				}
			}

		}
		else if ($_POST["operation"]=="Update Field")  {

			$id = $_POST["id"];
			$field_name = $_POST["field_name"];

			$sql = "UPDATE field_table SET field_name = '".$field_name."'
					WHERE id = '".$id."'
			";
				if (mysqli_query($conn, $sql)) {
				    echo "<script>
					alert('Field Updated Successfully');
					window.location.href='../field/update_field.php';
					</script>";
				} 
				else {
					echo "<script>
					alert('Error updating record Please Try Again Later');
					window.location.href='../field/update_field.php';
					</script>";
				    // echo "Error updating record: " . mysqli_error($conn);
				}


		}
	}
	// 7
	else if ($_POST["role"]=="Map") {
		if ($_POST["operation"]=="Add Map") {
			$province_name = $_POST["province_name"];
			$city_name = $_POST["city_name"];
			$university_name = $_POST["university_name"];
			$map_link = $_POST["map_link"];
			
			if (isset($province_name)) {

				$query = "SELECT uni_name FROM map_table WHERE 
						 province_name = '".$province_name."' AND
						 city_name = '".$city_name."' AND
						 uni_name = '".$university_name."' AND
						 map_link = '".$map_link."'";
			  	$result=mysqli_query($conn,$query);
			  	 if(mysqli_num_rows($result)!=0){
					echo "<script>
					alert('Map Exist With These Details');
					window.location.href='../map/add_map.php';
					</script>";
			  	 }
			  	else{
			  		$query2 = "INSERT INTO map_table(province_name, 
			  				   city_name,uni_name,map_link) 
					VALUES ('".$province_name."','".$city_name."',
							'".$university_name."','".$map_link."')";
	
					// $result2=mysqli_query($conn,$query2);
					if (mysqli_query($conn, $query2)) {
						echo "<script>
						alert('New Map Created Successfully');
						window.location.href='../map/add_map.php';
						</script>";
					} 
					else {
				   		echo "<script>
						alert('Cannot Insert Record Please Try Again');
						window.location.href='../map/add_map.php';
						</script>";
					}
			  	}
			}

		}
		else if ($_POST["operation"]=="Delete Map") {
			$university_name = $_POST["university_name"];
			$city_name = $_POST["city_name"];
			$province_name = $_POST["province_name"];
			$map_link = $_POST["map_link"];
			
			if (isset($university_name)&& isset($city_name) && 
				isset($province_name) && isset($map_link)) {

				$query = "SELECT uni_name FROM map_table WHERE 
						 uni_name='".$university_name."' AND
						 city_name='".$city_name."' AND
						 province_name='".$province_name."' AND
						 map_link='".$map_link."'";
			  	$result=mysqli_query($conn,$query);
			  	 if(mysqli_num_rows($result)==0){
					echo "<script>
					alert('No Map Exist With These Details');
					window.location.href='../map/delete_map.php';
					</script>";
			  	 }
			  	 else{
			  	 	$query = "DELETE FROM map_table WHERE 
						 uni_name='".$university_name."' AND
						 city_name='".$city_name."' AND
						 province_name='".$province_name."' AND
						 map_link='".$map_link."'";
					  	if(mysqli_query($conn,$query)){
							echo "<script>
							window.location.href='../map/delete_map.php';
							alert('Map is Deleted');
							</script>";
					  	}
					  	else{
					  		echo "<script>
							alert('Error Try Again Later Please');
							window.location.href='../map/delete_map.php';
							</script>";
				  		}
			  	 }
				
			}

		}
		else if ($_POST["operation"]=="Update Map")   {

			$id = $_POST["id"];
			$province_name = $_POST["province_name"];
			$city_name = $_POST["city_name"];
			$uni_name = $_POST["uni_name"];
			$map_link = $_POST["map_link"];

			$sql = "UPDATE map_table SET province_name = '".$province_name."',
						   city_name = '".$city_name."',
						   uni_name = '".$uni_name."',
						   map_link = '".$map_link."'
					WHERE id = '".$id."'
			";
				if (mysqli_query($conn, $sql)) {
				    echo "<script>
					alert('Map Updated Successfully');
					window.location.href='../map/update_map.php';
					</script>";
				} 
				else {
					echo "<script>
					alert('Error updating record Please Try Again Later');
					window.location.href='../map/update_map.php';
					</script>";
				    // echo "Error updating record: " . mysqli_error($conn);
				}
		}
	}
	// 8
	else if ($_POST["role"]=="Culture") {
		if ($_POST["operation"]=="Add Culture") {
			$province_name = $_POST["province_name"];
			$image_url = $_POST["image_url"];
			$culture_title = $_POST["culture_title"];
			$culture_content = $_POST["culture_content"];
			$map_link = $_POST["map_link"];
			
			if (isset($province_name)) {

				$query = "SELECT province_name FROM culture WHERE 
						 province_name = '".$province_name."' AND
						 image = '".$image_url."' AND
						 title = '".$culture_title."' AND
						 content = '".$culture_content."' AND
						 map = '".$map_link."'";
			  	$result=mysqli_query($conn,$query);
			  	 if(mysqli_num_rows($result)!=0){
					echo "<script>
					alert('Culture Exist With These Details');
					window.location.href='../culture/add_culture.php';
					</script>";
			  	 }
			  	else{
			  		$query2 = "INSERT INTO culture(province_name, 
			  				   image,title,content,map) 
					VALUES ('".$province_name."','".$image_url."',
							'".$culture_title."','".$culture_content."','".$map_link."')";
	
					// $result2=mysqli_query($conn,$query2);
					if (mysqli_query($conn, $query2)) {
						echo "<script>
						alert('New Culture Created Successfully');
					window.location.href='../culture/add_culture.php';

						</script>";
					} 
					else {
				   		echo "<script>
						alert('Cannot Insert Record Please Try Again');
					window.location.href='../culture/add_culture.php';
						</script>";
					}
			  	}
			}

		}
		else if ($_POST["operation"]=="Delete Culture") {
			$province_name = $_POST["province_name"];
			
			if (isset($province_name)) {

				$query = "SELECT province_name FROM culture WHERE 
						 province_name='".$province_name."'";
			  	$result=mysqli_query($conn,$query);
			  	 if(mysqli_num_rows($result)==0){
					echo "<script>
					alert('No Culture Exist With These Details');
					window.location.href='../culture/delete_culture.php';
					</script>";
			  	 }
			  	 else{
			  	 	$query = "DELETE FROM culture WHERE 
						 province_name='".$province_name."'";
					  	if(mysqli_query($conn,$query)){
							echo "<script>
							window.location.href='../culture/delete_culture.php';
							alert('Culture is Deleted');
							</script>";
					  	}
					  	else{
					  		echo "<script>
							alert('Error Try Again Later Please');
							window.location.href='../culture/delete_culture.php';
							</script>";
				  		}
			  	 }
				
			}

		}
		else if ($_POST["operation"]=="Update Culture")   {

			$id = $_POST["id"];
			$province_name = $_POST["province_name"];
			$image = $_POST["image_url"];
			$title = $_POST["title"];
			$content = $_POST["content"];
			$map = $_POST["map"];

			$sql = "UPDATE culture SET 
				province_name = '".$province_name."', 
				image = '".$image."',
				title = '".$title."', 
				content = '".$content."', 
				map = '".$map."'
				WHERE id = '".$id."'
			";
				if (mysqli_query($conn, $sql)) {
				    echo "<script>
					alert('Culture Updated Successfully');
					window.location.href='../culture/update_culture.php';
					</script>";
				} 
				else {
					echo "<script>
					alert('Error updating record Please Try Again Later');
					window.location.href='../culture/update_culture.php';
					</script>";
				    // echo "Error updating record: " . mysqli_error($conn);
				}
		}
	}
	// 9
	else if ($_POST["role"]=="Subscriber") {
		if ($_POST["operation"]=="Add Subscriber") {
			$email = $_POST["email"];
			
			if (isset($email)) {

				$query = "SELECT email FROM subscribe WHERE 
						 email = '".$email."'";
			  	$result=mysqli_query($conn,$query);
			  	 if(mysqli_num_rows($result)!=0){
					echo "<script>
					alert('Email Exist With These Details');
					window.location.href='../subsciption/add_subsciption.php';
					</script>";
			  	 }
			  	else{
			  		$query2 = "INSERT INTO subscribe(email) 
					VALUES ('".$email."')";
	
					// $result2=mysqli_query($conn,$query2);
					if (mysqli_query($conn, $query2)) {
						echo "<script>
						alert('New Subscriber Created Successfully');
					window.location.href='../subsciption/add_subsciption.php';

						</script>";
					} 
					else {
				   		echo "<script>
						alert('Cannot Insert Record Please Try Again');
					window.location.href='../subsciption/add_subsciption.php';
						</script>";
					}
			  	}
			}

		}
		else if ($_POST["operation"]=="Delete Subscriber") {
			$email = $_POST["email"];

			if (isset($email)) {

				$query = "SELECT email FROM subscribe WHERE 
						 email = '".$email."'";
			  	$result=mysqli_query($conn,$query);
			  	 if(mysqli_num_rows($result)==0){
					echo "<script>
					alert('No Subscriber Exist With These Details');
					window.location.href='../subsciption/delete_subsciption.php';
					</script>";
			  	 }
			  	 else{
			  	 	$query = "DELETE FROM subscribe WHERE 
						 email='".$email."'";
					  	if(mysqli_query($conn,$query)){
							echo "<script>
							window.location.href='../subsciption/delete_subsciption.php';
							alert('Subscriber is Deleted');
							</script>";
					  	}
					  	else{
					  		echo "<script>
							alert('Error Try Again Later Please');
							window.location.href='../subsciption/delete_subsciption.php';
							</script>";
				  		}
			  	 }
				
			}

		}
		else if ($_POST["operation"]=="Update Subscriber")   {

			$id = $_POST["id"];
			$email = $_POST["email"];

			$sql = "UPDATE subscribe SET email = '".$email."' 
				WHERE id = '".$id."' ";
				if (mysqli_query($conn, $sql)) {
				    echo "<script>
					alert('Subscriber Updated Successfully');
					window.location.href='../subsciption/update_subsciption.php';
					</script>";
				} 
				else {
					echo "<script>
					alert('Error updating record Please Try Again Later');
					window.location.href='../subsciption/update_subsciption.php';
					</script>";
				    // echo "Error updating record: " . mysqli_error($conn);
				}
		}
	}
	// 10
	else if ($_POST["role"]=="Feedback") {
		if ($_POST["operation"]=="Add Feedback") {
			$email = $_POST["email"];
			$feedback = $_POST["feedback"];
			
			if (isset($email) && isset($feedback)) {

				// $query = "SELECT email FROM feedback WHERE 
				// 		 email = '".$email."'";
			 //  	$result=mysqli_query($conn,$query);
			 //  	 if(mysqli_num_rows($result)!=0){
				// 	echo "<script>
				// 	alert('Email Exist With These Details');
				// 	window.location.href='../feedback/add_feedback.php';
				// 	</script>";
			 //  	 }
			 //  	else{
			  		$query2 = "INSERT INTO feedback(email,feedback) 
					VALUES ('".$email."','".$feedback."')";
	
					// $result2=mysqli_query($conn,$query2);
					if (mysqli_query($conn, $query2)) {
						echo "<script>
						alert('New Feedback Inserted Successfully');
					window.location.href='../feedback/add_feedback.php';

						</script>";
					} 
					else {
				   		echo "<script>
						alert('Cannot Insert Record Please Try Again');
					window.location.href='../feedback/add_feedback.php';
						</script>";
					}
			  	// }
			}

		}
		else if ($_POST["operation"]=="Delete Feedback") {
			$id = $_POST["id"];

			if (isset($id)) {

				$query = "SELECT id FROM feedback WHERE 
						 id = '".$id."'";
			  	$result=mysqli_query($conn,$query);
			  	 if(mysqli_num_rows($result)==0){
					echo "<script>
					alert('No Feedback Exist With These Details');
					window.location.href='../feedback/delete_feedback.php';
					</script>";
			  	 }
			  	 else{
			  	 	$query = "DELETE FROM feedback WHERE 
						 id='".$id."'";
					  	if(mysqli_query($conn,$query)){
							echo "<script>
							alert('Feedback is Deleted');
							window.location.href='../feedback/delete_feedback.php';
							</script>";
					  	}
					  	else{
					  		echo "<script>
							alert('Error Try Again Later Please');
							window.location.href='../feedback/delete_feedback.php';
							</script>";
				  		}
			  	 }
				
			}

		}
		else if ($_POST["operation"]=="Update Feedback")   {

			$id = $_POST["id"];
			$email = $_POST["email"];
			$feedback = $_POST["feedback"];

			$sql = "UPDATE feedback 
					SET email = '".$email."',feedback='".$feedback."' 
					WHERE id = '".$id."' ";
				if (mysqli_query($conn, $sql)) {
				    echo "<script>
					alert('Feedback Updated Successfully');
					window.location.href='../feedback/update_feedback.php';
					</script>";
				} 
				else {
					echo "<script>
					alert('Error updating record Please Try Again Later');
					window.location.href='../feedback/update_feedback.php';
					</script>";
				    // echo "Error updating record: " . mysqli_error($conn);
				}
		}
	}
	// 11
	else if ($_POST["role"]=="Post") {
		if ($_POST["operation"]=="Add Post") {
			$post_link = $_POST["post_link"];
			$post_title = $_POST["post_title"];
			$page_content = $_POST["page_content"];

				
			if (isset($post_link) && isset($post_title) && isset($page_content)) {
				$query = "SELECT id FROM post_table WHERE 
						 story_link = '".$post_link."' AND
						 story_title = '".$post_title."' AND
						 story_content = '".$page_content."'";
			  	$result=mysqli_query($conn,$query);
			  	 if(mysqli_num_rows($result)!=0){
					echo "<script>
					alert('Post Exist With These Details');
					window.location.href='../post/add_post.php';
					</script>";
			  	 }
			  	else{
			  		$filename = $_FILES['uploadfile']['name'];
					$filetmpname = $_FILES['uploadfile']['tmp_name'];
					$folder = 'upload_images/';
					move_uploaded_file($filetmpname, $folder.$filename);

			  		$query2 = "INSERT INTO post_table(story_link,story_title,story_image,story_content) 
					VALUES ('".$post_link."','".$post_title."',
							'".$filename."','".$page_content."')";

					if (mysqli_query($conn, $query2)) {
						echo "<script>
						alert('New Post Created Successfully')
						window.location.href='../post/add_post.php';
					</script>";
					} 
					else {
				   		// echo mysqli_error($conn);
				   		echo "<script>
						alert('Cannot Insert Post Please Try Again Later')
						window.location.href='../post/add_post.php';
					</script>";
					}
			  	}
			}
			else{
				echo "<script>
						alert('Cannot Insert Post Please Try Again Later')
						window.location.href='../post/add_post.php';
					</script>";
			}
		}
		else if ($_POST["operation"]=="Delete Post") {
			$story_id = $_POST["story_id"];
			$story_link = $_POST["story_link"];
			
			if (isset($story_id)&& isset($story_link)) {

				$query = "SELECT id FROM post_table WHERE 
						 id='".$story_id."' AND
						 story_link='".$story_link."'";
			  	$result=mysqli_query($conn,$query);
			  	 if(mysqli_num_rows($result)==0){
					echo "<script>
					alert('No Post Exist With These Details');
					window.location.href='../post/delete_post.php';
					</script>";
			  	 }
			  	 else{
			  	 	$query = "DELETE FROM post_table WHERE 
						 id='".$story_id."' AND
						 story_link='".$story_link."'";
					  	if(mysqli_query($conn,$query)){
							echo "<script>
							alert('Post is Deleted');
							window.location.href='../post/delete_post.php';
							</script>";
					  	}
					  	else{
					  		echo "<script>
							alert('Error Try Again Later Please');
							window.location.href='../post/delete_post.php';
							</script>";
				  		}
			  	 }
				
			}

		}
		else if ($_POST["operation"]=="Update Post")  {

			$id = $_POST["id"];
			$story_link = $_POST["story_link"];
			$story_title = $_POST["story_title"];
			$story_image = $_POST["story_image"];
			$story_content = $_POST["story_content"];

			$sql = "UPDATE post_table SET story_link = '".$story_link."',
						   story_title = '".$story_title."',
						   story_image = '".$story_image."',
						   story_content = '".$story_content."'
					WHERE id = '".$id."'
			";
				if (mysqli_query($conn, $sql)) {
				    echo "<script>
					alert('Post Updated Successfully');
					window.location.href='../post/update_post.php';
					</script>";
				    // echo "Error updating record: " . mysqli_error($conn);
					
				} 
				else {
					echo "<script>
					alert('Error updating record Please Try Again Later');
					window.location.href='../post/update_post.php';
					</script>";
				    // echo "Error updating record: " . mysqli_error($conn);
				}


		}
	}
	// 12
	else if ($_POST["role"]=="Contact") {
		if ($_POST["operation"]=="Add Contact") {
			$name = $_POST["name"];
			$phone = $_POST["phone"];
			$email = $_POST["email"];
			$message = $_POST["message"];
			
			if (isset($name) && isset($phone) &&
				isset($email) && isset($message)) {

				// $query = "SELECT email FROM feedback WHERE 
				// 		 email = '".$email."'";
			 //  	$result=mysqli_query($conn,$query);
			 //  	 if(mysqli_num_rows($result)!=0){
				// 	echo "<script>
				// 	alert('Email Exist With These Details');
				// 	window.location.href='../feedback/add_feedback.php';
				// 	</script>";
			 //  	 }
			 //  	else{
			  		$query2 = "INSERT INTO contact_us_table(name,phone,email,message) 
					VALUES ('".$name."','".$phone."','".$email."','".$message."')";
	
					// $result2=mysqli_query($conn,$query2);
					if (mysqli_query($conn, $query2)) {
						echo "<script>
						alert('New Contact Inserted Successfully');
					window.location.href='../contact/add_contact.php';

						</script>";
					} 
					else {
				   		echo "<script>
						alert('Cannot Insert Record Please Try Again');
					window.location.href='../contact/add_contact.php';
						</script>";
					}
			  	// }
			}

		}
		else if ($_POST["operation"]=="Delete Contact") {
			$id = $_POST["id"];

			if (isset($id)) {

				$query = "SELECT id FROM contact_us_table WHERE 
						 id = '".$id."'";
			  	$result=mysqli_query($conn,$query);
			  	 if(mysqli_num_rows($result)==0){
					echo "<script>
					alert('No Contact Exist With These Details');
					window.location.href='../contact/delete_contact.php';
					</script>";
			  	 }
			  	 else{
			  	 	$query = "DELETE FROM contact_us_table WHERE 
						 id='".$id."'";
					  	if(mysqli_query($conn,$query)){
							echo "<script>
							alert('Contact is Deleted');
							window.location.href='../contact/delete_contact.php';
							</script>";
					  	}
					  	else{
					  		echo "<script>
							alert('Error Try Again Later Please');
							window.location.href='../contact/delete_contact.php';
							</script>";
				  		}
			  	 }
				
			}

		}
		else if ($_POST["operation"]=="Update Contact")   {

			$id = $_POST["id"];
			$name = $_POST["name"];
			$phone = $_POST["phone"];
			$email = $_POST["email"];
			$message = $_POST["message"];

			$sql = "UPDATE contact_us_table 
					SET name = '".$name."',
						phone = '".$phone."',
						email = '".$email."',
						message='".$message."' 
					WHERE id = '".$id."' ";
				if (mysqli_query($conn, $sql)) {
				    echo "<script>
					alert('Contact Updated Successfully');
					window.location.href='../contact/update_contact.php';
					</script>";
				} 
				else {
					echo "<script>
					alert('Error updating record Please Try Again Later');
					</script>";
				    echo "Error updating record: " . mysqli_error($conn);
				}
		}
	}







}
?>