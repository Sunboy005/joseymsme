<!-- php start for bot-->
<!-- Step 1 Create Database for response and user messages  -->
<?php 
    include "../connection/connect.php";
    include "playSound.php";

    if($conn){
        $user_message = mysqli_real_escape_string($conn, $_POST['messageValue']);
        $query ="SELECT * FROM faq WHERE incoming_message LIKE '%$user_message%'";
        $runQuery = mysqli_query($conn, $query);
        if(mysqli_num_rows($runQuery)>0){
            //if user message is in database
            $result = mysqli_fetch_assoc($runQuery);
           if( $result['status'] == "private" && isset($_SESSION['user'])){
                 $needed_response= $result['response'];
           }else if( $result['status'] == "public"){
                 $needed_response= $result['outgoing_response'];
           }       
        }else{
            //if user message is not in database
                $needed_response= "Sorry, I did not understand you. Please ask me something else.";
        } 
    }else{
        $needed_response="connection failed".mysqli_connect_errno();
    }
        playSound($needed_response);
        echo $needed_response;
?>