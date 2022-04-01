
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
            <!-- bot messages -->
            <div class="chat botMessages">Hello</div>

            <!-- bot messages -->
            <div id="messagesContainer">
                <div class="chat userMessages">Hi</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8" id="chat-input">
                <input type="text" id="chat-input-field" placeholder="Type your message here...">
            </div>
        </div>
        <div id="voiceInput">
        <button id="voiceInput" name="voiceInput" class="btn btn-primary"><i class="fa fa-microphone"></i></button>
        </div>
        <!-- chat input field -->
        <div id="userInput">
            <input type="text" id="messages" autocapitalize="none" autocomplete="OFF" placeholder="Type your message here..." requred>
            <button id="send" name="send" class="btn btn-primary"><i class="fa fa-send"></i></button>
        </div>
    </div>
</div>  
<!-- Chat-Bot End -->

