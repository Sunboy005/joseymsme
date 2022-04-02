voiceInput.addEventListener('click', function() {
    var speech=true;
    window.SpeechRecognition = window.webkitSpeechRecognition;
    const recognition = new SpeechRecognition();
    recognition.interimResults = true;
    recognition.lang = 'en-US';
    recognition.addEventListener('result', e=>{
        const transcript = Array.from(e.results)
        .map(result => result[0])
        .map(result => result.transcript); 
        messages.value = transcript;
        console.log(transcript);
    })
    if (speech == true){
        recognition.start();
        console.log('Speech Recognition Started');
    }
    });