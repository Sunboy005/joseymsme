
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="assets/css/demo.css">
<link href="assets/css/jquery.convform.css " rel="stylesheet">
<script type="text/javascript" src="assets/js/jquery.convform.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<!-- Chat-Bot -->
<div class="chat_icon">
    <i class="fa fa-commenting-o" ></i> 
</div>
<div class="chat_box">
    <div id="screen">
        <div id="chat-header"><i class="fa fa-user-o"></i>  &nbsp; MSME Chat Support &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <i class="clickable fa fa-times" aria-hidden="true"></i></div>
        <div id="messageDisplaySection">
            <!--bot messages
            <div class="chat botMessages">Hello, How may I help you</div>
           
            <div id="messagesContainer">
                <div class="chat userMessages">Hi, am looking for cards</div>
            </div>-->
            
        </div>       
        <!-- chat input field -->
        <div id="userInput">
            <input type="text" name="messages"  id="messages" autocapitalize="none" autocomplete="OFF" placeholder="Type your message here..." required>
            <button type="submit" id="send" name="send" class="btn btn-primary" tooltip="Send"><i class="fa fa-send"></i></button>            
            <button id="voiceInput" name="voice" class="btn btn-info" tooltip="Voice to text"><i class="fa fa-microphone"></i></button>
        </div>
    </div>
</div>  
<!-- Chat-Bot End -->
<!-- JQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- JQuery Start -->
<script>
$(document).ready(function(){
    $("#messages").on("keyup", function(){
        if($("#messages").val()){
            $("#send").css("display", "block");
        }else{
            $("#send").css("display", "none");
        }
    });
});   
//Send Button Click
$("#send").click(function(e){
     $userMessage = $("#messages").val();
     $appendUserMessage = "<div class='chat userMessages'>"+$userMessage+"</div>";
      $("#messageDisplaySection").append($appendUserMessage);
      //ajax start
    $.ajax({
        url: "chatbot.php",
        type: "POST",
        data: {messageValue: userMessage},
        //response
        success: function(data){
            $("#messagesContainer").append("<div class='chat botMessages'>"+data+"</div>");
        }        
    });
    $("#messages").val("");
    $("#send").css("display", "none");
});
</script>
