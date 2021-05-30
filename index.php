<?php


if($_POST === [] ) {
    $_POST["comment"] = isset($_POST["comment"]) ? $_POST["comment"] : NULL;
    $_POST["name"] = isset($_POST["name"]) ? $_POST["name"] : NULL;
    $_POST["firstname"] = isset($_POST["firstname"]) ? $_POST["firstname"] : NULL;
    $_POST["phone"] = isset($_POST["phone"]) ? $_POST["phone"] : NULL;
    $_POST["date"] = isset($_POST["date"]) ? $_POST["date"] : NULL;
    $nameErr = isset($nameErr) ? $nameErr : NULL;
    $firstnameErr = isset($firstnameErr) ? $firstnameErr : NULL;
    $phoneErr = isset($phoneErr) ? $firstnameErr : NULL;
    $dateErr = isset($dateErr) ? $firstnameErr : NULL;
    require 'view/form.php';

} 

elseif($_POST["name"] != null && strlen($_POST["name"])>2 && preg_match("#^[A-Za-z '-]+$#",$_POST["name"]) && 
$_POST["firstname"] != null && strlen($_POST["firstname"])>2 && preg_match("#^[A-Za-z '-]+$#",$_POST["firstname"]) &&
$_POST["phone"] != null && preg_match('#^0[1-9]{1}\d{8}$#',$_POST["phone"]) &&
$_POST["date"]!= null){
    $nameErr = isset($nameErr) ? $nameErr : NULL;
    $firstnameErr = isset($firstnameErr) ? $firstnameErr : NULL;
    $phoneErr = isset($phoneErr) ? $firstnameErr : NULL;
    $dateErr = isset($dateErr) ? $firstnameErr : NULL;
    $nameErr = isset($nameErr) ? $nameErr : NULL;
    $firstnameErr = isset($firstnameErr) ? $firstnameErr : NULL;
    $phoneErr = isset($phoneErr) ? $firstnameErr : NULL;
    $dateErr = isset($dateErr) ? $firstnameErr : NULL;
       require 'view/validationForm.php';
 }

else {
    $nameErr = isset($nameErr) ? $nameErr : NULL;
    $firstnameErr = isset($firstnameErr) ? $firstnameErr : NULL;
    $phoneErr = isset($phoneErr) ? $firstnameErr : NULL;
    $dateErr = isset($dateErr) ? $firstnameErr : NULL;
    if($_POST["name"] == null || strlen($_POST["name"])<=2 || !preg_match("#^[A-Za-z '-]+$#",$_POST["name"])){ $nameErr = "Nom invalide";}
    elseif($_POST["firstname"] == null || strlen($_POST["firstname"])<=2 || !preg_match("#^[A-Za-z '-]+$#",$_POST["firstname"])){ $firstnameErr = "Prenom invalide";}
    elseif($_POST["phone"] == null || !preg_match('#^0[1-9]{1}\d{8}$#',$_POST["phone"])){ $phoneErr = "Numéro de téléphone invalide";}
    elseif($_POST["date"] == null){ $dateErr = "Date invalide";}
 
    require 'view/form.php';
    
}

//functions :
function star(){
    $q1= isset($_POST['q1']) ? $_POST['q1'] : NULL;
    $q2= isset($_POST['q2']) ? $_POST['q2'] : NULL;
    $q3= isset($_POST['q3']) ? $_POST['q3'] : NULL;
    $resultat = $q1 + $q2 + $q3;
    for ($i = 0; $i < $resultat && $i < 5; $i++) {
        echo '&#11088';
    }
}
function circle(){   
    $q1= isset($_POST['q1']) ? $_POST['q1'] : NULL;
    $q2= isset($_POST['q2']) ? $_POST['q2'] : NULL;
    $q3= isset($_POST['q3']) ? $_POST['q3'] : NULL;
    $resultat = $q1 + $q2 + $q3; 
    for ($i = 0; $i < (5 - $resultat) && $i < 5; $i++) {
        echo '&#9899';
    }
}

function phone(){
    $case = isset($_POST['case']) ? $_POST['case'] : NULL;
    $q3 = $_POST["q3"];
    $phone =  $_POST["phone"];
    if(isset ($case) && $q3 == -1){
        echo $phone;
    }else{
        echo false;
    }
}


?>