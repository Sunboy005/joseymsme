<?php
    function playSound($needed_response){
    $txt=$needed_response;
    $txt=htmlspecialchars($txt);
    $txt=rawurlencode($txt);
    $html=file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$txt.'&tl=en-UK');
    $player="<div style='display:none'><audio controls='controls' autoplay><source src='data:audio/mpeg;base64,".base64_encode($html)."'></audio></div>";
    echo $player;
}
?>