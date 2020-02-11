<!DOCTYPE html>
<html>
<head>
	<title>new</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body background="TWO.jpg">
<nav class="menu">
	<ul>
		<li><a href="home.php"> Home</a></li>
		<li><a href="gallary.php">  Assistant </a></li>
		<li><a href="products.php"> products</a></li>
		<li><a href="about.php"> contact us</a></li>
		<li><a href="admin.php"> Admin</a></li>
		
	</ul>

	<form class="search-form">
		<!--<input type="text" placeholder="search">
		<button> Search</button>-->
</nav>
</form>
</nav>

<style>
        body {
  background-color: lightblue;
      }

  .box {

    border: 2px solid;
    padding-top: 5px;
    padding-right: 5px;
    padding-bottom: 20px;
    padding-left: 5px; 
    width: 800px;
    resize: both;
    overflow: auto;
    border-style: solid;
    border-color: black;
    border-width: 2px;
    vertical-align: center; 
    text-align: center;
  }

    .red-box {
    background-color: lightblue;
    color: #0B0301;
    padding-top: 5px;
    padding-right: 5px;
    padding-bottom: 20px;
    padding-left: 5px;
  }



    </style>
  
</head>
<body>

    
  <div class="box red-box" align="right" width="48" height="48" >
    <h1></h1>

    <select name="voice" id="voices">
      <option value="">select a voice</option>

        </select><br><br>

 <label ron="rate">Rate:<lable>       
<input name="rate" type="range" min="0" max="3" value="1" step="0.1"><br><br>

<label ron="pitch">pitch</label>
<input type="range" name="pitch" min="0" max="2" step="0.1"><br><br>

<textarea name="text" rows="8" cols="80">Hello, have a nice day ! we are here to help you to find products from our islandwide stores. if you have any question regarding the locations and products you can chat with our assistant. you can search our product according to your preferences. you can visit to our stores and buy our products. we are happy to see you ..        </textarea><br><br>

<button id="stop" align="center">Stop</button>
<button id="speak">Speak</button>

</div>

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





</body>
</hlml>