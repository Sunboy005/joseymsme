<?php
function checkQuery($conn, $user_message){
    $logged_in_user_response="This is a secret, it is only revealed to registered users. Please login before you can access it";
    $query ="SELECT * FROM queries WHERE incoming_message LIKE '%$user_message%'";
    $runQuery = mysqli_query($conn, $query);        
    if(mysqli_num_rows($runQuery)>0){
        //if user message is in database
        $result = mysqli_fetch_assoc($runQuery);
        if( $result['type_id'] == "1" && isset($_SESSION['user'])){
            $needed_response= $result['response'] ;
        }else if( $result['type_id'] == "2"){
                $needed_response= $result['response'];
        } else{$needed_response=$logged_in_user_response;
            $needed_response=$logged_in_user_response;
        }
        if($result['link']!=""){
            $needed_response =$needed_response." <br><a href='".$result['link']."'>Click Here </a>";
        }
        return $needed_response;
    }else{
        $needed_response=null;
    }
}

function checkResources($conn, $user_message){
    $logged_in_user_response="This is a secret, it is only revealed to registered users. Please login before you can access it";
    $query ="SELECT * FROM resources WHERE incoming_message LIKE '%$user_message%'";
    $runQuery = mysqli_query($conn, $query);        
    if(mysqli_num_rows($runQuery)>0){
        //if user message is in database
        $result = mysqli_fetch_assoc($runQuery);
        if( $result['type_id'] == "1" && isset($_SESSION['user'])){
                $needed_response= $result['response'];
        }else if( $result['type_id'] == "2"){
                $needed_response= $result['response'];
        } else{$needed_response=$logged_in_user_response;
            $needed_response=$logged_in_user_response;
        }
        if($result['link']!=""){
            $needed_response =$needed_response." <br><a href='".$result['link']."'>".$result['title']. "</a>";
        }
        return $needed_response;
    }else{
        $needed_response=null;
    }
}


function checkTemplates($conn, $user_message){
    $logged_in_user_response="This is a secret, it is only revealed to registered users. Please login before you can access it";
    $query ="SELECT * FROM templates WHERE incoming_message LIKE '%$user_message%'";
    $runQuery = mysqli_query($conn, $query);        
    if(mysqli_num_rows($runQuery)>0){
        //if user message is in database
        $result = mysqli_fetch_assoc($runQuery);
        if( $result['type_id'] == "1" && isset($_SESSION['user'])){
                $needed_response= $result['response'];
        }else if( $result['type_id'] == "2"){
                $needed_response= $result['response'];
        } else{$needed_response=$logged_in_user_response;
            $needed_response=$logged_in_user_response;
        }
        if($result['dlink']!=""){
            $needed_response =$needed_response." <br><a href='".$result['dlink']."'>".$result['title']. "</a>";
        }
        return $needed_response;
    }else{
        $needed_response=null;
    }
}
?>