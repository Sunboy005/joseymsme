
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="assets/css/demo.css">

<!-- Chat-Bot -->
<div class="chat_icon">
    <i class="fa fa-commenting-o" ></i> 
</div>
<?php $_SESSION["user"]="Amos";?>
<div class="chat_box">
    <div id="screen">
        <div id="chat-header"><i class="fa fa-user-o"></i>  &nbsp; MSME Chat Support &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <i class="clickable fa fa-times" aria-hidden="true"></i></div>
        <div id="messageDisplaySection">
           <div class="messagesContainer">
                <?php
                if(isset($_SESSION['user'])){?>
                    <div class="chat botMessages">
                        <p>Hi <?php $_SESSION["user"];?>, I am your MSME Chat Bot. How may I help you?</p>
                    </div>
                <?php }else{?>
                    <div class="chat botMessages">
                        <p>Hi, I am your MSME Chat Bot. How may I help you?</p>
                    </div>
                <?php }?>
           </div>
        </div>     
        <!-- chat input field -->
        <div id="userInput">  
                <input type="text name="messages"  id="messages" autocapitalize="none" required />
                <button type="submit" id="send" name="send" class="btn btn-primary" tooltip="Send"><i class="fa fa-send"></i></button>            
                <button id="voiceInput" name="voiceInput" class="btn btn-info" tooltip="Voice to text"><i class="fa fa-microphone"></i></button>
        </div>       
    </div>  
</div>  
<!-- Chat-Bot End -->
<!-- JQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="assets/js/speech.js"></script>
<script src="assets/js/script.js"></script>

<!-- JQuery Start -->

