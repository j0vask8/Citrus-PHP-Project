<?php

	if(isset($_POST['btnSubmit'])){
		$name = trim($_POST['tbName']);
		$email = trim($_POST['tbEmail']);
		$comment = $_POST['taComment'];
		$nameRegex = '/^[a-zA-Z]+$/';

		$errors = [];

        if (empty($name))
        {
            $errors[] =  "Enter Name.";
        }

        if(!preg_match($nameRegex, $name)){
            $errors[] = "Name must contain only letters.";
        }

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] .= "E-mail is not valid";
        }

		if(empty($comment)){
            $errors[] = "Enter comment";
		}

		if(!empty($errors)){
			foreach($errors as $error){
               echo '<div class="alert alert-danger" role="alert">'
                    . $error .'
                </div>';
			}
		}else{
		  $product = $_GET["value"];
		  $sql = "INSERT INTO comments VALUES ('', '$name','$email','$comment', $product, 'N', current_time)";
		  if ($conn->query($sql) === TRUE) {
                echo '<div class="alert alert-success" role="alert">Comment Posted!</div>';
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
	}
?>