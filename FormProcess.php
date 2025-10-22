<?php
    $boardNameErr="";
    $boardPrivacyErr="";
    $boardName="";
    $boardPrivacy="";
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (empty($_POST["boardName"])) {
            $boardNameErr = "Name is required";
        } else{
            $boardName = test_input($_POST["boardName"]);
            }
        
        

        if(empty($_POST["boardPrivacy"])) {
            $boardPrivacyErr="Board Privacy is required";
        }else{
            $boardPrivacy = test_input($_POST["boardPrivacy"]);
        }

        echo"<h2>Form submitted!</h2>";
        echo "<p>Name: " . $boardName . "</p>";
        echo "<p>Privacy: " . $boardPrivacy . "</p>";
    }

    function test_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;   
    }


    echo"<h2>Form submitted!</h2>";
        echo "<p>Name: " . $boardName . "</p>";
        echo "<p>Privacy: " . $boardPrivacy . "</p>";
?>