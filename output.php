<?php
    //Form starts
    if(!empty($_POST['first_name'])){
        $first_name = $_POST['first_name'];
        echo "Hello $first_name" . "!<br>";
    }
    else{
        
        echo "You forgot to to enter your first name. Fix it.<br>";
        
    }
    
    if(!empty($_POST['last_name'])){
        $last_name = $_POST['last_name'];
        
    }
    else{
        
        echo "You forgot to to enter your last name. Fix it.<br>";
        
    }
    //radio buttons
    if(!empty($_POST['gender'])){
        $gender = $_POST['gender'];
        switch ($gender){
            case $gender =="M":
                echo "Hello Sir!<br>";
                break;
            
            case $gender == "F":
                echo "Hello Madam!<br>";
                break;
            
            case $gender == "O":
                echo "Hello Friend!<br>";
                break;
        }
    }
    else{
        
        echo "You forgot to to enter your gender. Fix it.<br>";
        
    }
    //checkboxes
    if(!empty($_POST['id'])){
        $id = $_POST['id'];
    }
    else{
        
        echo "You forgot to upload your government issued id. We STRONGLY advice you do so<br>";
        
    }
    
    if(!empty($_POST['birth_certificate'])){
        $birth_certificate = $_POST['birth_certificate'];
    }
    else{
        
        echo "You forgot to to enter your birth certificate. We STRONGLY advice you do so.<br>";
        
    }
    
    if(!empty($_POST['selfie'])){
        $selfie = $_POST['selfie'];
    }
    else{
        
        echo "You don't want us to take a picture of you every 2 minutes? Yes you do please select yes.<br>";
        
    }
    
    if(!empty($_POST['phone_audio'])){
        $phone_audio = $_POST['phone_audio'];
    }
    else{
        
        echo "Please let use record your phone audio.<br>";
        
        
    }
    //The check boxes arent necessary so they are not included
     if (!empty($_POST['first_name'])&& !empty($_POST['last_name'])&&!empty($_POST['gender'])){
            
            echo "Thank you for filling out the form! Your data is safe with us.";
            
            
        }
        else{
            
            echo "You didnt fill out the form correctly. Go back and do it right<br>";
            echo "<a href=\"index.php\">Go back</a>";
            
            
        }
    
    






?>