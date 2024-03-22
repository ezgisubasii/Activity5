<?php
/*Control name*/
    if(empty($_GET['name'])==false){
        echo $_GET['name']."<br>";
    }
    else{
        echo "Name: Not provided"."<br>";
    }

    /*Control username*/
    if(empty($_GET['username'])==false){
        echo $_GET['username']."<br>";
    }
    else{
        echo "Surname: Not provided"."<br>";
    }
    /*password*/
    if(empty($_GET['password'])==false){
        echo $_GET['password']."<br>";
    }
    else{
        echo "Password: Not provided"."<br>";
    }
   /*address*/
    if(empty($_GET['address'])==false){
        echo $_GET['address']."<br>";
    }
    else{
        echo "Address: Not provided"."<br>";
    }
    /*country*/
    if(empty($_GET['country'])==false){
        echo $_GET['country']."<br>";
    }
    else{
        echo "Country: Not provided"."<br>";
    }
    /*zip*/
    if(empty($_GET['zipCode'])==false){
        echo $_GET['zipCode']."<br>";
    }
    else{
        echo "Zip: Not provided"."<br>";
    }
    /*email*/
    if(empty($_GET['email'])==false){
        echo $_GET['email']."<br>";
    }
    else{
        echo "Email: Not provided"."<br>";
    }
   /* 
    if(empty($_GET['sex'])==false){
        
        echo $_GET["sex"]."<br>";
    }
    else{
        echo "Sex: Not provided"."<br>";
    }*/
    /*language*/
    if(empty($_GET['language'])==false){
        for($i=0; $i < sizeof($_GET["language"]); $i++){
        echo $_GET["language"][$i]."<br>";
    }
    }
    else{
        echo "Language: Not provided"."<br>";
    }

    /*About*/
    if(empty($_GET["about"])==false){
            echo $_GET["about"]."<br>";
    }
    else{
        echo "About: Not provided"."<br>";
    }


?>