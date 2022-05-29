<?php

function isAllValid ($firstName, $lastName, $email, $address, $city, $zip, $phone) {
    $allValid =[];
    if (isFirstNameValid($firstName)) {
        $allValid['firstName'] = $firstName;
    }
    if (isLastNameValid($lastName)) {
        $allValid['lastName'] = $lastName;
    }

    if (isEmailValid($email)) {
        $allValid['email'] = $email;
    }

    if (isAddressValid($address)) {
        $allValid['address'] = $address;
    }

    if (isCityValid($city)) {
        $allValid['city'] = $city;
    }

    if (isZipValid($zip)) {
        $allValid['zip'] = $zip;
    }

    if (isPhoneValid($phone)) {
        $allValid['phone'] = $phone;
    }


    

    return $allValid;
}

function errors ($firstName, $lastName, $email, $address, $city, $zip, $phone) {
    $errors = [];
    if (!isFirstNameValid ($firstName)){
        $errors['firstName'] = "Valid first name is required.";
    }
    if (!isLastNameValid ($lastName)){
        $errors['lastName'] = "Valid last name is required.";
    }

    if (!isEmailValid($email)) {
        $errors['email'] = "Please enter a valid email address for shipping updates.";
    }

    if (!isAddressValid($address)) {
        $errors['address'] = "Please enter your shipping address.";
    }

    if (!isCityValid($city)) {
        $errors['city'] = "Please enter your city.";
    }

    if (!isZipValid($zip)) {
        $errors['zip'] = "Zip code required. No spaces avaliable.";
    }

   

    if (!isPhoneValid($phone)) {
        $errors['phone'] = "Please enter your phone number. Only numbers, between 9 and 11 characters.";
    }

   

    return $errors;
}



function isFirstNameValid ($firstName) {
    if (!empty($_POST['firstName'])) {
        return true;
    }else {
        return false;
    }
}

function isLastNameValid($lastName) {
    if (!empty($_POST['lastName'])) {
        return true;
    }else {
        return false;
    }
}


function isEmailValid ($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
      } else{
          return false;
      } 

}


function isAddressValid ($address) {
    if (!empty($_POST['address'])) {
        return true;
      } else{
          return false;
      } 

    }


function isCityValid ($city) {
    if (!empty($_POST['city'])) {
            return true;
          } else{
              return false;
          } 
    
        }

function isZipValid ($zip) {
    $zipNiz = explode(' ', $zip); 
            if (!empty($_POST['zip']) && count($zipNiz)==1) {
                    return true;
                  } else{
                      return false;
                  } 
            
                }
      




function isPhoneValid ($phone) {
            if (!empty($_POST['phone'])&& mb_strlen($phone)>= 9 && mb_strlen($phone)<=11) {
                    return true;
                  } else{
                      return false;
                  } 
            
                }




                


?>