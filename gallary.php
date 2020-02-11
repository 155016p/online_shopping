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
		<li><a href="products.php"> Products</a></li>
		<li><a href="about.php"> About</a></li>
		<li><a href="admin.php"> Admin </a></li>
		
	</ul>
</nav>

<title>Chatbot</title>
<style>
body { 
	color: #421;
	 font-weight: bold; 
	 font-size: 18px;
	  background: #EE4; 
	background-image: url("man.jpg"); 
	background-repeat: no-repeat;
	background-size: 600px 600px;
}
span { 
	color: #711; 
} 
::-webkit-input-placeholder { 
	color: #711 
}
#main { 
	position: fixed; top: 40%; right: 40px; width: 400px; 
	border: 0px solid #421; padding: 40px; 
}
#main div { 
	margin: 10px; 
} 
#input { 
	border: 0; background: #EBE547; padding: 5px; border: 1px solid #421; 
}
</style>
</head>
<body>
<div class="box red-box" align="right" width="48" height="48" >
    <h1></h1>

    <select name="voice" id="voices">
      <option value="">select a voice</option>

        </select><br>

 
<textarea name="text" rows="5" cols="50"> Say hello to our virtual assistant. he is here to answer your question regarding the products. if you have any questions about our product, product prices and locations please ask from him.  </textarea><br>


<button id="speak">Speak</button>

</div><br><br>

<script >
  const msg = new SpeechSynthesisUtterance();
  let voices = [];
  const voicesDropdown = document.querySelector('[name="voice"]');
    const options = document.querySelectorAll('[type="range"],[name="text"]');
    const speakButton = document.querySelector('#speak');
    const stopButton = document.querySelector('#stop');
    msg.text = document.querySelector('[name="text"]').value;
    
    function populateVoices(){
      voices = this.getVoices();
        //console.log(voices);
      voicesDropdown.innerHTML = voices.filter(voice => voice.lang.includes('en')).map(voice => `<option value="${voice.name}">${voice.name} (${voice.lang})</option>`)
      .join('');
      
    }
    function setVoice(){
     msg.voice = voices.find(voice => voice.name === this.value);
    toggle();
    }
    function toggle(startOver = true){
      speechSynthesis.cancel();
        if(startOver){
            speechSynthesis.speak(msg);
        }
    }
    function setOption(){
        console.log(this.name,this.value);
        msg[this.name]=this.value;
        toggle();
    }
speechSynthesis.addEventListener('voiceschanged',populateVoices);
voicesDropdown.addEventListener('changed',setVoice);
options.forEach(option => option.addEventListener('change', setOption));
speakButton.addEventListener('click',toggle);
stopButton.addEventListener('click',toggle.bind(null, false));
    </script>




<div id="main">
	


	<div>user: <span id="user"></span></div>
	<div>Vertual assistant: <span id="chatbot"></span></div>
	<div><input id="input" type="text" placeholder="say anything..." autocomplete="off"/></div>
</div>
<script type="text/javascript">
var trigger = [
    ["hi", "hello", "hey"],
	["what are the available clothes"], 
	["how are you", "how is life", "how are things buy"],
	["price range", "available prices"],
	["from where i can buy clothes"],
	["who are you", "are you human", "are you bot", "are you human or bot"],
	["who created you", "who made you"],
	["your name please",  "your name", "may i know your name", "what is your name"],
	["i love you"],
	["happy", "good"],
	["bad", "bored", "tired"],
	["help me", "tell me story", "tell me joke"],
	["ah", "yes", "ok", "okay", "nice", "thanks", "thank you"],
	["bye", "good bye", "goodbye", "see you later"]
];
var reply = [
    ["hi", "hello"],
	["all type of female male clothes available here"], 
	["Fine", "Pretty well", "Fantastic"],
	["we give quality products to fair price"],
	["our stores located in colombo, Negambo and galle"],
	["I am just a bot", "I am a bot. What are you?"],
	["Kani Veri", "My God"],
	["I am nameless", "I don't have a name"],
	["I love you too", "Me too"],
	["Have you ever felt bad?", "Glad to hear it"],
	["Why?", "Why? You shouldn't!", "Try watching TV"],
	["I will", "What about?"],
	["Tell me a story", "Tell me a joke", "Tell me about yourself", "You are welcome"],
	["Bye", "Goodbye", "See you later"]
];
var alternative = ["i can not understand..."];
document.querySelector("#input").addEventListener("keypress", function(e){
	var key = e.which || e.keyCode;
	if(key === 13){ //Enter button
		var input = document.getElementById("input").value;
		document.getElementById("user").innerHTML = input;
		output(input);
	}
});
function output(input){
	try{
		var product = input + "=" + eval(input);
	} catch(e){
		var text = (input.toLowerCase()).replace(/[^\w\s\d]/gi, ""); //remove all chars except words, space and 
		text = text.replace(/ a /g, " ").replace(/i feel /g, "").replace(/whats/g, "what is").replace(/please /g, "").replace(/ please/g, "");
		if(compare(trigger, reply, text)){
			var product = compare(trigger, reply, text);
		} else {
			var product = alternative[Math.floor(Math.random()*alternative.length)];
		}
	}
	document.getElementById("chatbot").innerHTML = product;
	speak(product);
	document.getElementById("input").value = ""; //clear input value
}
function compare(arr, array, string){
	var item;
	for(var x=0; x<arr.length; x++){
		for(var y=0; y<array.length; y++){
			if(arr[x][y] == string){
				items = array[x];
				item =  items[Math.floor(Math.random()*items.length)];
			}
		}
	}
	return item;
}
function speak(string){
	var utterance = new SpeechSynthesisUtterance();
	utterance.voice = speechSynthesis.getVoices().filter(function(voice){return voice.name == "Agnes";})[0];
	utterance.text = string;
	utterance.lang = "en-US";
	utterance.volume = 1; //0-1 interval
	utterance.rate = 1;
	utterance.pitch = 2; //0-2 interval
	speechSynthesis.speak(utterance);
}
</script>
</body>
</html>
</body>

</hlml>