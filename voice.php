<html>
<head>
	
</head>
<body>
	<div class="voiceinator">
		<h1>The Voice</h1>

		<select name="voice" id="voices">
			<option value="">select a voice</option>

        </select>

 <label ron="rate">Rate:<lable>       
<input name="rate" type="range" min="0" max="3" value="1" step="0.1">

<label ron="pitch">pitch</label>
<input type="range" name="pitch" min="0" max="2" step="0.1">
<textarea name="text">Hello</textarea>
<button id="stop">Stop</button>
<button id="speak">Speak</button>

</div>
<script >
	const msg = new SpeechSynthesisUtterance();
	let voices = [];
	const voicesDropdown = document.querySelector('[name="voice"]');
    const options = document.querySelectorAll('[type="range"],[name="text"]');
    const speakButton = document.querySelector('#speak');
    const stopButton = document.querySelector('#stop');




    </script>
</body>


</html>