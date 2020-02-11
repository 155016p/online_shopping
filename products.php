<!DOCTYPE html>
<html>
<head>
	<title>new</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<nav class="menu">
	<ul>
		<li><a href="home.php"> Home</a></li>
		<li><a href="gallary.php"> Assistant </a></li>
		<li><a href="Products.php"> Products </a></li>
		<li><a href="about.php"> Contact us </a></li>
		<li><a href="admin.php"> Admin </a></li>
		
	</ul></nav></body>

    <body>
<?php


  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "clothes";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);


?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>

<h2></h2>



<p>:</p>
<form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
  <input type="text" placeholder="Search.." name="search2">
  
</form>






	<!--<form class="search-form">
		<input type="text" placeholder="search">
		<button> Search</button>

	</nav>

  </form>

<center><h3>CAN I HELP YOU !</h3></center>
<center><figure><img src="assis.PNG" alt="">
              
            </figure></center>



    <br>
        <br>
        <br>
        <button id="giveCommand">start</button>
        <br>
        Voice Input:<span id="message" ></span>

        <br>
        <br>
        Select Voice: <select name="" id="voiceList"></select>

        <br>

        <br>

        
        <script>
              


            var message = document.querySelector('#message');
            var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
            var SpeechGrammarList = SpeechGrammarList || webkitSpeechGrammarList;

            var grammar = '#JSGF V1.0';

            var recognition = new SpeechRecognition();
            var speechRecognitionGrammerList = new SpeechGrammarList();
            speechRecognitionGrammerList.addFromString(grammar,1);
            
            recognition.grammars = speechRecognitionGrammerList;
            recognition.lang ='en-US';
            recognition.interimResults = false;

            recognition.onresult = function(event){
                var last = event.results.length -1;
                var command = event.results[last][0].transcript;
                message.textContent = command;
                talk();
                speakReply();

            };

            recognition.onspeechend = function(event){
                 recognition.stop();

            }; 

            recognition.onerror = function(event){
                message.textContent = 'Error' + event.console.error();
                
            }

            document.querySelector('#giveCommand').addEventListener('click',function(event){
                recognition.start();
            })



            know = {
                "check" : "successful",
                "hello" : "hi",
        "what are available colours" : "blue,red", 
        "what are available patterns" : "Stripes and check and plain",
                 "how are you" : "good",
                "ok" : ":)"
            };

            var textInput;
            function talk() {
                var user = message.textContent;
                if (user in know) {
                    textInput = know[user];
                } else {
                    textInput = "I don't understand";
                }
            } 




            var voiceList = document.querySelector('#voiceList');
            var speak = document.querySelector('#speak');

            var textToSpeech = window.speechSynthesis;
            var voices =[];

            GetVoices();
            if(speechSynthesis !== undefined){
                speechSynthesis.onvoiceschanged=GetVoices;
            }
            
            function speakReply(){
                console.log(textInput);
                var toSpeak = new SpeechSynthesisUtterance(textInput);
                var selectedVoiceName = voiceList.selectedOptions[0].getAttribute('data-name');
                voices.forEach((voice)=>{
                    if(voice.name === selectedVoiceName){
                        toSpeak.voice = voice;
                    }
                });
                textToSpeech.speak(toSpeak);
            }

            btnspeak.addEventListener('click',()=>{
                console.log(textInput);
                var toSpeak = new SpeechSynthesisUtterance(textInput);
                var selectedVoiceName = voiceList.selectedOptions[0].getAttribute('data-name');
                voices.forEach((voice)=>{
                    if(voice.name === selectedVoiceName){
                        toSpeak.voice = voice;
                    }
                });
                textToSpeech.speak(toSpeak);
            });

            function GetVoices(){
                voices = textToSpeech.getVoices();
                voiceList.innerHTML = '';
                voices.forEach((voice)=>{
                    var listItem = document.createElement('option');
                    listItem.textContent=voice.name;
                    listItem.setAttribute('data-lang',voice.lang);
                    listItem.setAttribute('data-name',voice.name);
                    voiceList.appendChild(listItem);
                });
                voiceList.selectedIndex =0;
            }


        </script>
  </form>-->
</div>

</body>
</html>














</hlml>