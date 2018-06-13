<?php  	
if( isset($_POST["add"]) ){
	
	$title = $_POST["title"];
	$content = $_POST["content"];
	$excerpt = $_POST["excerpt"];
	$img_src = "images/" . $_FILES['image']['name'];

	if( isset($_FILES["image"]) ){

		$img_src = "images/" . $_FILES["image"]["name"];
		$file_path = "../" . $img_src;

		move_uploaded_file($_FILES["image"]["tmp_name"], $file_path);
	}

	$db = mysqli_connect("localhost", "root", "usbw", "albert");
	$sql = "
		INSERT INTO `shop`
			(title, excerpt ,content, img_src)
		VALUES
			('$title', '$excerpt', '$content', '$img_src')
	";
	$r = mysqli_query($db, $sql);

	if($r){
		echo "News Successfuly Inserted";
	}
	else{
		echo "db error";
	}
}

if( isset($_POST["update"]) ){

	$id = $_POST['id'];
	$title = $_POST["title"];
	$content = $_POST["content"];
	$excerpt = $_POST["excerpt"];	

	$db = mysqli_connect("localhost", "root", "usbw", "albert");

	$sql = "
		UPDATE `shop`
		SET title = '$title',excerpt = '$excerpt',content = '$content'
		WHERE id = $id
	";

	$r = mysqli_query($db, $sql);

	if($r){
		echo "News Successfuly Updated";
	}
	else{
		echo "db error";
	}
}


if( isset($_GET['action']) && $_GET['action'] == "delete"){
	$id = $_GET['id'];

	$db = mysqli_connect("localhost", "root", "usbw", "albert");
	$sql = "DELETE FROM shop WHERE id = $id";
	
	$r = mysqli_query($db, $sql);


	if($r){
		echo "News Successfuly Updated";
	}
	else{
		echo "db error";
	}

}

?>