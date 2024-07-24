<?php

$formData = "adedeni";
$salt = bin2hex(random_bytes(16));//this is to generate random string
$pepper = "ASecretPepperString";//this is stringed together with a salt to make the hash more secure
echo $salt;

$dataToHash = $formData . $salt . $pepper;//this is to mix all the layer of security together viz-a-viz salt+pepper+ourdata
$hash = hash("sha256", $dataToHash);//this is the algorithm we are trying to use to hash
echo "<br>" . $hash;

$formData = "adedeni";
$storedSalt = $salt;
$storedHash = $hash;
$pepper = 'ASecretPepperString';

$dataToHash = $formData . $storedSalt . $pepper;

$verifyPreviousHash = hash("sha256", $dataToHash);//this code is to verify if the user password is the same after initially hashing

if($storedHash === $verifyPreviousHash){
    echo "<br>" . "The data are the same";
} else {
    echo "Data are not the same";
}//we will get the data are the same since old and new formData are the same otherwise not the same, this is a general hashing