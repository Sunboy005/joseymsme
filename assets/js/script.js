$(document).ready(function(){
    $("#messages").on("change", function(){
        if($("#messages").val()){
             $("#send").css("display", "block");
        }else{
            return $("#send").css("display", "none");
          
        }
    });
});   
//Send Button Click
$('.messages').keypress(function(e){
    if(e.which === 13 && e.originalEvent.shiftKey == false){
        $('#send').submit()
        return false;
    }
})
    $("#send").click(function(e){
        $userMessage = $("#messages").val();
        $appendUserMessage = '<div id="messagesContainer"><div class="chat userMessages">'+ $userMessage +'</div></div>';
        $("#messageDisplaySection").append($appendUserMessage);

      //ajax start
    $.ajax({
        url: "includes/processing/chatbot.php",
        type: "POST",
        data: {messageValue: $userMessage},
        //response type    
        success: function(data){
            $appendBotMessage = '<div class="chat botMessages" style="flex-start">'+ data + '</div>';
            $("#messagesContainer").append($appendBotMessage);
        }        
    });
    $("#messages").val("");
    $("#send").css("display", "none");

});