<?php 
    include "../connections/connect.php";
    include "playSound.php";
    include "chatbottablecheck.php";
    if($conn){
        $errorresponse="Sorry, I did not understand you. Please make your sentence shorter and presice.";
        $user_message = mysqli_real_escape_string($conn, $_POST['messageValue']);
         if(checkQuery($conn, $user_message)==null){
            if(checkResources($conn, $user_message)==null){
                if(checkTemplates($conn, $user_message)==null){
                    $needed_response=$errorresponse;
                }else{
                    $needed_response=checkTemplates($conn, $user_message);
                }
            }else{
                $needed_response=checkResources($conn, $user_message);
            }
        }
    }else{
            $needed_response="connection failed please try again later";
        }
        //Call the sound function
        //playSound($needed_response);
        //Return the text to the user
        echo $needed_response;
?>