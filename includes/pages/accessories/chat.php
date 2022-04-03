
<link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/vendor/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/demo.css">

<!-- Chat-Bot -->
<div class="chat_icon">
    <i class="fa fa-commenting-o" ></i> 
</div>
<div class="chat_box">
    <div id="screen">
        <div id="chat-header"><i class="fa fa-user-headset-o"></i>  &nbsp; MSME Chat Support &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <i class="clickable fa fa-times" aria-hidden="true"></i></div>
        <div id="messageDisplaySection">
           <div class="messagesContainer">
                <?php
                if(isset($_SESSION['id'])){?>
                    <div class="chat botMessages">
                        <p>Hi <?php echo $myfname;?>, I am your MSME Chat Bot. How may I help you?</p>
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
<script src="assets/js/speech.js" crossorigin="anonymous"></script>
<script src="assets/js/script.js" crossorigin="anonymous"></script>

<!-- JQuery Start -->

