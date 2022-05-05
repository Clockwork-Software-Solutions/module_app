<div>
<style>
  @import url('https://fonts.googleapis.com/css?family=Montserrat');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: 'Montserrat', sans-serif;
  background-color: #eee;
  color: #111;
}

#play-again-btn {
  position: absolute;
  top: 1.0rem;
  left: 55%;
  margin-left: -50px;
  font-size: 1rem;
  font-weight: bold;
  color: #fff;
  //background-color: #111;
	border: 5px double #fff; 
	border-radius: 14px;
	padding: 8px 10px;  
  outline: none;
  letter-spacing: .05em;
  cursor: pointer;
  display: none;
  opacity: 0;
  transition: opacity 0.5s, transform 0.5s, background-color 0.2s;
}
#play-again-btn:hover {
  background-color: #333;
}
#play-again-btn:active {
  background-color: #555;
}
#play-again-btn.play-again-btn-entrance {
  opacity: 1;
  transform: translateX(2rem);
}

#next{
  display: none;
  opacity: 0;
  transition: opacity 0.5s, transform 0.5s, background-color 0.2s;
}
#next.next-entrance {
  opacity: 1;
  transform: translateX(2rem);
}

.text span {
   opacity: 0;
}
.text span.revealed {
   opacity: 1;
}
.text span.green {
   color: #27ae60;
}
.text span.red {
   color: #ff0000;
}


/* Demo styles */
.text {
   font-size: 2vw;
   word-spacing: 0.2em;
   margin: 0 auto;
   background: #fff;
   padding: 1em;
   border-bottom: 1vw solid #db6935;
   position:relative;
   line-height: 1.2em;
}
.corner {
   position:absolute;
   width: 2vw;
   right:2vw;
   bottom:0;
   transform: translateY(80%); 
}


.draggable-elements {
  display: flex;
  justify-content: center;
  margin-top: 0rem;
}
.draggable {
  height: 6rem;
  width: 6rem;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow-wrap: break-word;
  font-size: 5rem;
  margin: 0rem 2rem;
  cursor: move;
  transition: opacity 0.2s;
 
  padding: 4px;
}
.draggable:hover {
  opacity: 0.5;
}
.droppable {
  height: 18rem;
  width: 12rem;
  margin: 1rem auto;
  display: flex;
  justify-content: end;
  align-items: center;
  flex-direction: column;
  text-align: center;
  font-size: 4rem;
  font-weight: bold;
  background-color: transparent;
  
  transition: border-width 0.2s, transform 0.2s, background-color 0.4s;
}
.droppable span {
  font-size: 1.25rem;
  pointer-events: none; /* The element is never the target of pointer events */
}

/* Drag and Drop Related Styling */

.droppable.droppable-hover {
  /* background-color: #bee3f0; */
  border-width: 5px;
  transform: scale(1.1);
}
.droppable.dropped {
  border-style: none;
  color: #fff;
}
.droppable.dropped span {
  font-size: 0.75rem;
  margin-top: 0.5rem;
}
.droppable.dropped i {
  pointer-events: none;
}
.draggable.dragged {
  user-select: none;
  opacity: 0.1;
  cursor: default;
}
.draggable.dragged:hover {
  opacity: 0.1;
}

@media (max-width: 600px) {
  html { font-size: 14px; }
  .draggable-elements { margin: 1.5rem; }
}
</style>
<div >
    <div class="p-5">
  <div class="flex">
  <h1 id="textTitle" class="text-3xl mb-10 mx-14">Photosynthesis and Respiration</h1>
        <button id="play-again-btn" class="mt-0 bg-green-800 hover:bg-green-700">Play Again</button>
  </div>
  <section class="droppable-elements">

    <div class="grid grid-cols-3 bg-green-700 border rounded-lg">
   
    <div class="elems col-span-1 py-5 grid gap-y-6 items-center">
    <div id="one">
    <img class="draggable bg-transparent" style="color: #fff;" src="/storage/images/sun.png" alt="Sun" draggable="true"id="sun">
    <span class="ml-16 text-sm font-bold text-white">Sun</span>
    </div>
    <div id="two">
    <img class="draggable bg-transparent" style="color: #fff;" src="/storage/images/fertilizer.png" alt="Sun" draggable="true" id="fertilizer">
    <span class="ml-12 text-sm font-bold text-white">Fertilizer</span>
    </div>
    <div id="three">
    <img class="draggable bg-transparent" style="color: #fff;" src="/storage/images/watering-can.png" alt="Sun" draggable="true" id="water">
    <span class="ml-16 text-sm font-bold text-white">Water</span>
    </div>
    <div id="four">
    <img class="draggable bg-transparent" style="color: #fff;" src="/storage/images/carbon-dioxide.png" alt="Sun" draggable="true"  id="carbon-dioxide">
    <span class="ml-8 text-sm font-bold text-white">Carbon-Dioxide</span>
    </div>
  
    {{-- <img class="draggable bg-transparent" style="color: #fff;" src="/storage/images/eagle.png" alt="Sun" draggable="true"  id="eagle"> --}}
    
    </div>

    <div class="col-span-1 my-auto" style="background-color: #F5F4E0">
    <div class="droppable flex justify-center align">
    <img class="h-72 w-80" src="/storage/images/plant_grow/frame_000 (45).gif" alt="Grass" draggable="false" id="sunflower">
    </div>
    
    </div>

        <div class="col-span-1 mt-24 p-10">
        <div class="text"> 
        <svg class="corner" viewBox="0 0 65 62" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M35 3.5L65 6.5V62L0 0L35 3.5Z" fill="white"/>
        </svg>
        </div>

        </div>

     
    </div>
 
  </section>
  {{--<section class="draggable-element px-20">
  {{-- <div clas="w-96 h-36 bg-red-300">ss</div> 
  </section>--}}
  <section class="draggable-elements px-20 flex">
  <!-- <div class="px-20 flex"> -->
    {{-- <img class="draggable bg-transparent" style="color: #fff;" src="/storage/images/sun.png" alt="Sun" draggable="true"id="sun">
    <img class="draggable bg-transparent" style="color: #fff;" src="/storage/images/grass.png" alt="Sun" draggable="true" id="grass">
    <img class="draggable bg-transparent" style="color: #fff;" src="/storage/images/caterpillar.png" alt="Sun" draggable="true" id="caterpillar">
    <img class="draggable bg-transparent" style="color: #fff;" src="/storage/images/snake.png" alt="Sun" draggable="true"  id="snake">
    <img class="draggable bg-transparent" style="color: #fff;" src="/storage/images/eagle.png" alt="Sun" draggable="true"  id="eagle"> --}}

    {{-- <div draggable="true" class="draggable bg-blue-400 border border-blue-600 rounded-md" id="sunlight"><span class="" style="font-size: 13px; text-transform: uppercase;">Sunlight</span></div>
    <div draggable="true" class="draggable bg-blue-400 border border-blue-600 rounded-md" id="carbon_dioxide"><span class="" style="font-size: 13px; text-transform: uppercase;">Carbon Dioxide</span></div>
    <div draggable="true" class="draggable bg-blue-400 border border-blue-600 rounded-md" id="water"><span class="" style="font-size: 13px; text-transform: uppercase;">Water</span></div>
    <div draggable="true" class="draggable bg-blue-400 border border-blue-600 rounded-md" id="oxygen"><span class="" style="font-size: 13px; text-transform: uppercase;">Oxygen</span></div>
    <div draggable="true" class="draggable bg-blue-400 border border-blue-600 rounded-md" id="glucose"><span class="" style="font-size: 13px; text-transform: uppercase;">Glucose</span></div> --}}
  </section>
  

<!-- <div id="test" class="h-full w-28 bg-green-800">
    s
</div> -->
<div class="mt-4 flex justify-between">
<div></div>
<button id="next" wire:click="next()" class="font-bold text-md bg-green-800 border-green-800 text-white rounded-md px-4 py-2 mr-14 hover:bg-green-700">Next</button>
 {{-- position: absolute;
  top: 2.5rem;
  left: 55%;
  margin-left: -50px;
  font-size: 1rem;
  font-weight: bold;
  color: #fff;
  background-color: #111;
	border: 5px double #fff; 
	border-radius: 14px;
	padding: 8px 10px;  
  outline: none;
  letter-spacing: .05em;
  cursor: pointer;
  display: none;
  opacity: 0;
  transition: opacity 0.5s, transform 0.5s, background-color 0.2s; --}}
</div>
</div>




<script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script>

  $(window).on('load', function() {
  var container = document.querySelector(".text");
      var speeds = {
   pause: 100, //Higher number = longer delay
   slow: 120,
   normal: 90,
   fast: 40,
   superFast: 20
};

textLines = [
   { speed: speeds.superFast, string: "Help the plant grow!" },
   { speed: speeds.pause, string: "", pause: true },
   { speed: speeds.superFast, string: "Drag the images on the left to the plant." }
];


var characters = [];
textLines.forEach((line, index) => {
   if (index < textLines.length - 1) {
      line.string += " "; //Add a space between lines
   }
  


   line.string.split("").forEach((character) => {
      var span = document.createElement("span");
      span.textContent = character;
      container.appendChild(span);
      characters.push({
         span: span,
         isSpace: character === " " && !line.pause,
         delayAfter: line.speed,
         classes: line.classes || []
      });
   });
});

function revealOneCharacter(list) {
   var next = list.splice(0, 1)[0];
   next.span.classList.add("revealed");
   next.classes.forEach((c) => {
      next.span.classList.add(c);
   });
   var delay = next.isSpace && !next.pause ? 0 : next.delayAfter;

   if (list.length > 0) {
      setTimeout(function () {
         revealOneCharacter(list);
      }, delay);
   }
}

//Kick it off
setTimeout(() => {
   revealOneCharacter(characters);   
}, 200)
    
    
    
    



    //set id sun to a variable
    var sun = $('#one');
    var fertilizer = $('#two');
    var water = $('#three');
    var carbon = $('#four');
    var elements = [ sun, fertilizer, water, carbon];
    var randomElements = shuffle(elements);
    
    $('.elems').append(randomElements);
    
  }

  );
    function speak() {
  const textEl = document.getElementById('textTitle');
  const speakEl = document.getElementById('next');

// click handler
//speakEl.addEventListener('click', speakText);

//function speakText() {
  // stop any speaking in progress
  window.speechSynthesis.cancel();
  
  // speak text
  const text = textEl.innerText;
  const utterance = new SpeechSynthesisUtterance(text);
  //select voice
  const voices = window.speechSynthesis.getVoices();
  utterance.voice = voices.find(voice => voice.name === 'Google UK English');
  //set voice volume
  utterance.volume = 1;
  //set voice rate
  utterance.rate = 1;
  //set voice pitch
  utterance.pitch = 1;
  //speak
  window.speechSynthesis.speak(utterance);
//}

}



  function shuffle(array) {
  let currentIndex = array.length,  randomIndex;

  // While there remain elements to shuffle.
  while (currentIndex != 0) {

    // Pick a remaining element.
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex--;

    // And swap it with the current element.
    [array[currentIndex], array[randomIndex]] = [
      array[randomIndex], array[currentIndex]];
  }

  return array;
}




</script>

<script>
let element = document.getElementById('test');
// anime({
//   targets: element,
//   translateX: 250,
//   scale: 1,
//   rotate: '3turn'
// });
anime({
  targets: element,
  translateX: {
    value: 250,
    duration: 800
  },
  rotate: {
    value: 360,
    duration: 1800,
    easing: 'easeInOutSine'
  },
  scale: {
    value: 2,
    duration: 1600,
    delay: 800,
    easing: 'easeInOutQuart'
  },
  delay: 250 // All properties except 'scale' inherit 250ms delay
});
</script>



<script src="https://cdn.jsdelivr.net/npm/leader-line"></script>


<script>
const draggableElements = document.querySelectorAll(".draggable");
const droppableElements = document.querySelectorAll(".droppable");
const arrowElements = document.querySelectorAll(".arrow");
var isFertilizer = false;
var isWater = false;
var isSun = false;
var isCarbonDioxide = false;
var toComplete = 45;
let correct = 0;
let total = 0;
const totalDraggableItems = 5;
const playAgainBtn = document.querySelector("#play-again-btn");
const nextBtn = document.querySelector("#next");

draggableElements.forEach(elem => {
  elem.addEventListener("dragstart", dragStart); // Fires as soon as the user starts dragging an item - This is where we can define the drag data
  // elem.addEventListener("drag", drag); // Fires when a dragged item (element or text selection) is dragged
   // elem.addEventListener("dragend", dragEnd); // Fires when a drag operation ends (such as releasing a mouse button or hitting the Esc key) - After the dragend event, the drag and drop operation is complete
});

droppableElements.forEach(elem => {
  elem.addEventListener("dragenter", dragEnter); // Fires when a dragged item enters a valid drop target
  elem.addEventListener("dragover", dragOver); // Fires when a dragged item is being dragged over a valid drop target, repeatedly while the draggable item is within the drop zone
  elem.addEventListener("dragleave", dragLeave); // Fires when a dragged item leaves a valid drop target
  elem.addEventListener("drop", drop); // Fires when an item is dropped on a valid drop target
});

// Drag and Drop Functions

//Events fired on the drag target

function dragStart(event) {
  event.dataTransfer.setData("text", event.target.id); // or "text/plain" but just "text" would also be fine since we are not setting any other type/format for data value
}

//Events fired on the drop target

function dragEnter(event) {
  if(!event.target.classList.contains("dropped")) {
    event.target.classList.add("droppable-hover");
  }
}

function dragOver(event) {
  if(!event.target.classList.contains("dropped")) {
    event.preventDefault(); // Prevent default to allow drop
  }
}

function dragLeave(event) {
  if(!event.target.classList.contains("dropped")) {
    event.target.classList.remove("droppable-hover");
  }
}


// Other Event Listeners
playAgainBtn.addEventListener("click", playAgainBtnClick);
function playAgainBtnClick() {
  playAgainBtn.classList.remove("play-again-btn-entrance");
  next.classList.remove("next-entrance");
  correct = 0;
  total = 0;

  setTimeout(() => {
    next.style.display = "none";
    playAgainBtn.style.display = "none";
  }, 500);
      window.location.reload();
}



function drop(event) {

  event.preventDefault(); // This is in order to prevent the browser default handling of the data
  event.target.classList.remove("droppable-hover");
  const draggableElementData = event.dataTransfer.getData("text"); // Get the dragged data. This method will return any data that was set to the same type in the setData() method
  //const draggableElementText = document.querySelector('.elementText');


  //console.log(event.dataTransfer.getData("class") + " ");
  //draggableElementText.classList.remove("hidden");

  const droppedElemSun = document.querySelector('#light');
  const droppedElemCarbon = document.querySelector('#carbon');
  const droppedElemWater = document.querySelector('#waters');
  const droppedElemOXygen = document.querySelector('#air');
  const droppedElemGlucose = document.querySelector('#sugar');
  var container = document.querySelector(".text");
  const droppableElementData = event.target.getAttribute("data-draggable-id");
  const isCorrectMatching = draggableElementData === droppableElementData;
  total++;

       if(container.querySelectorAll("span")){
      container.querySelectorAll("span").forEach(span => {
        span.remove();
      }
      );
    }


  if(draggableElementData == "fertilizer" && isFertilizer == false && isWater == false && isSun == false && isCarbonDioxide == false) {
    
    var speeds = {
   pause: 100, //Higher number = longer delay
   slow: 120,
   normal: 90,
   fast: 40,
   superFast: 20
};

textLines = [
   { speed: speeds.superFast, string: "Great!" },
   { speed: speeds.pause, string: "", pause: true },
   { speed: speeds.superFast, string: "You got the first one." }
];


var characters = [];
textLines.forEach((line, index) => {
   if (index < textLines.length - 1) {
      line.string += " "; //Add a space between lines
   }
  


   line.string.split("").forEach((character) => {
      var span = document.createElement("span");
      span.textContent = character;
      container.appendChild(span);
      characters.push({
         span: span,
         isSpace: character === " " && !line.pause,
         delayAfter: line.speed,
         classes: line.classes || []
      });
   });
});

function revealOneCharacter(list) {
   var next = list.splice(0, 1)[0];
   next.span.classList.add("revealed");
   next.classes.forEach((c) => {
      next.span.classList.add(c);
   });
   var delay = next.isSpace && !next.pause ? 0 : next.delayAfter;

   if (list.length > 0) {
      setTimeout(function () {
         revealOneCharacter(list);
      }, delay);
   }
}

//Kick it off
setTimeout(() => {
   revealOneCharacter(characters);   
}, 200)
    
    
    
    
    
    //get plantImage
    const plantImage = document.querySelector('#sunflower');
    
    //declare array
    const plantImageArrayFirst = [];
    var num;
    //loop array
    for(let i = 45; i <= 128; i++) {
      num = i;
      plantImageArrayFirst.push(num);
    }
    var request;
    var time = 0;

    const animate = () => {
      if (time <= plantImageArrayFirst.length-1){
        request = requestAnimationFrame(animate);
        var path = '/storage/images/plant_grow/frame_000 ('+plantImageArrayFirst[time]+').gif';
         plantImage.src = path;
          time++;
          console.log(time);
      }else{
        cancelAnimationFrame(request);
      }
    }

    animate();
    
    
   
    //var interval = setInterval(function() { 
    //if (time <= plantImageArrayFirst.length-1){
   //   var path = '/storage/images/plant_grow/frame_000 ('+plantImageArrayFirst[time]+').gif';
    //  plantImage.src = path;
        //console.log(path);
   //     time++;
   // }
   // else { 
   //     clearInterval(interval);
   // }
   // }, 20);

  
    const sunflower = document.querySelector('#sunflower');
    const images = document.querySelectorAll('.images');
    const correctAudio = new Audio("/storage/audio/success.mp3" );
    const draggableElement = document.getElementById(draggableElementData);
    const text = draggableElement.innerText;
    const textTitle = document.querySelector('#textTitle');
    //event.target.classList.add("dropped");
    event.target.style.backgroundColor = "transparent";
    
    draggableElement.classList.add("dragged");
    draggableElement.setAttribute("draggable", "false");
    event.target.insertAdjacentHTML("afterbegin", `<div style="width:12rem; height: 3rem; margin-top: 2rem; border-radius: 6px; border-width: 2px; color:black; font-size: 13px; text-transform: uppercase; padding: 10px 10px;" class="bg-blue-400 border border-black rounded-md><span class="" style="color: black;">${text}</span></div>`);
    correct++;

    isFertilizer = true;
    toComplete = 128;


    if(correct===Math.min(totalDraggableItems)) { // Game Over!!
    playAgainBtn.style.display = "block";
    nextBtn.style.display = "block";
    textTitle.innerText = "Good Job! You got the right answer.";
    setTimeout(() => {
      playAudio(correctAudio);
      playAgainBtn.classList.add("play-again-btn-entrance");
      next.classList.add("next-entrance");
       anime({
            targets: [images],
            scale: 1.25,
            duration: 1000,
            });
    }, 50);
  } 
  }else if(draggableElementData == "water" && isFertilizer == true && isWater == false && isSun == false && isCarbonDioxide == false) {


    var speeds = {
   pause: 100, //Higher number = longer delay
   slow: 120,
   normal: 90,
   fast: 40,
   superFast: 20
};

textLines = [
   { speed: speeds.superFast, string: "Good job!" },
   { speed: speeds.pause, string: "", pause: true },
   { speed: speeds.superFast, string: "Drag the next image we need." }
];


var characters = [];
textLines.forEach((line, index) => {
   if (index < textLines.length - 1) {
      line.string += " "; //Add a space between lines
   }
  


   line.string.split("").forEach((character) => {
      var span = document.createElement("span");
      span.textContent = character;
      container.appendChild(span);
      characters.push({
         span: span,
         isSpace: character === " " && !line.pause,
         delayAfter: line.speed,
         classes: line.classes || []
      });
   });
});

function revealOneCharacter(list) {
   var next = list.splice(0, 1)[0];
   next.span.classList.add("revealed");
   next.classes.forEach((c) => {
      next.span.classList.add(c);
   });
   var delay = next.isSpace && !next.pause ? 0 : next.delayAfter;

   if (list.length > 0) {
      setTimeout(function () {
         revealOneCharacter(list);
      }, delay);
   }
}

//Kick it off
setTimeout(() => {
   revealOneCharacter(characters);   
}, 200)






    const plantImage = document.querySelector('#sunflower');
    
    //declare array
    const plantImageArrayFirst = [];
    var num;
    //loop array
    for(let i = 129; i <= 158; i++) {
      num = i;
      plantImageArrayFirst.push(num);
    }
    var request;
    var time = 0;


    const animate = () => {
      if (time <= plantImageArrayFirst.length-1){
        request = requestAnimationFrame(animate);
        var path = '/storage/images/plant_grow/frame_000 ('+plantImageArrayFirst[time]+').gif';
         plantImage.src = path;
          time++;
          console.log(time);
      }else{
        cancelAnimationFrame(request);
      }
    }

    animate();

    //var interval = setInterval(function() { 
    //if (time <= plantImageArrayFirst.length-1){
    //  var path = '/storage/images/plant_grow/frame_000 ('+plantImageArrayFirst[time]+').gif';
    //  plantImage.src = path;
        //console.log(path);
    //    time++;
   // }
   // else { 
   //     clearInterval(interval);
   // }
   // }, 20);

    const sunflower = document.querySelector('#sunflower');
    const images = document.querySelectorAll('.images');
    const correctAudio = new Audio("/storage/audio/success.mp3" );
    const draggableElement = document.getElementById(draggableElementData);
    const text = draggableElement.innerText;
    const textTitle = document.querySelector('#textTitle');
    //event.target.classList.add("dropped");
    event.target.style.backgroundColor = "transparent";
    
    draggableElement.classList.add("dragged");
    draggableElement.setAttribute("draggable", "false");
    event.target.insertAdjacentHTML("afterbegin", `<div style="width:12rem; height: 3rem; margin-top: 2rem; border-radius: 6px; border-width: 2px; color:black; font-size: 13px; text-transform: uppercase; padding: 10px 10px;" class="bg-blue-400 border border-black rounded-md><span class="" style="color: black;">${text}</span></div>`);
    correct++;

    isWater = true;
    toComplete = 158;
      
  }else if(draggableElementData == "sun" && isFertilizer == true && isSun == false && isCarbonDioxide == false && isWater == true) {


    var speeds = {
   pause: 100, //Higher number = longer delay
   slow: 120,
   normal: 90,
   fast: 40,
   superFast: 20
};

textLines = [
   { speed: speeds.superFast, string: "Keep going!" },
   { speed: speeds.pause, string: "", pause: true },
   { speed: speeds.superFast, string: "You're almost there." }
];


var characters = [];
textLines.forEach((line, index) => {
   if (index < textLines.length - 1) {
      line.string += " "; //Add a space between lines
   }
  


   line.string.split("").forEach((character) => {
      var span = document.createElement("span");
      span.textContent = character;
      container.appendChild(span);
      characters.push({
         span: span,
         isSpace: character === " " && !line.pause,
         delayAfter: line.speed,
         classes: line.classes || []
      });
   });
});

function revealOneCharacter(list) {
   var next = list.splice(0, 1)[0];
   next.span.classList.add("revealed");
   next.classes.forEach((c) => {
      next.span.classList.add(c);
   });
   var delay = next.isSpace && !next.pause ? 0 : next.delayAfter;

   if (list.length > 0) {
      setTimeout(function () {
         revealOneCharacter(list);
      }, delay);
   }
}

//Kick it off
setTimeout(() => {
   revealOneCharacter(characters);   
}, 200)











    const plantImage = document.querySelector('#sunflower');
    
    //declare array
    const plantImageArrayFirst = [];
    var num;
    //loop array
    for(let i = 159; i <= 275; i++) {
      num = i;
      plantImageArrayFirst.push(num);
    }


     var request;
    var time = 0;


    const animate = () => {
      if (time <= plantImageArrayFirst.length-1){
        request = requestAnimationFrame(animate);
        var path = '/storage/images/plant_grow/frame_000 ('+plantImageArrayFirst[time]+').gif';
         plantImage.src = path;
          time++;
          console.log(time);
      }else{
        cancelAnimationFrame(request);
      }
    }

    animate();
    
    //var time = 0;

    //var interval = setInterval(function() { 
    //if (time <= plantImageArrayFirst.length-1){
    //  var path = '/storage/images/plant_grow/frame_000 ('+plantImageArrayFirst[time]+').gif';
    //  plantImage.src = path;
        //console.log(path);
    //    time++;
    //}
    //else { 
    //    clearInterval(interval);
    //}
    //}, 20);

    const sunflower = document.querySelector('#sunflower');
    const images = document.querySelectorAll('.images');

    const draggableElement = document.getElementById(draggableElementData);
    const text = draggableElement.innerText;
    const textTitle = document.querySelector('#textTitle');
    //event.target.classList.add("dropped");
    event.target.style.backgroundColor = "transparent";
    
    draggableElement.classList.add("dragged");
    draggableElement.setAttribute("draggable", "false");
    event.target.insertAdjacentHTML("afterbegin", `<div style="width:12rem; height: 3rem; margin-top: 2rem; border-radius: 6px; border-width: 2px; color:black; font-size: 13px; text-transform: uppercase; padding: 10px 10px;" class="bg-blue-400 border border-black rounded-md><span class="" style="color: black;">${text}</span></div>`);
    correct++;

    isSun = true;
    toComplete = 275;
      
  }else if(draggableElementData == "carbon-dioxide" && isFertilizer == true && isSun == true && isCarbonDioxide == false && isWater == true) {


    var speeds = {
   pause: 100, //Higher number = longer delay
   slow: 120,
   normal: 90,
   fast: 40,
   superFast: 20
};

textLines = [
   { speed: speeds.superFast, string: "You did it!" },
   { speed: speeds.pause, string: "", pause: true },
   { speed: speeds.superFast, string: "You made the plant grow." }
];


var characters = [];
textLines.forEach((line, index) => {
   if (index < textLines.length - 1) {
      line.string += " "; //Add a space between lines
   }
  


   line.string.split("").forEach((character) => {
      var span = document.createElement("span");
      span.textContent = character;
      container.appendChild(span);
      characters.push({
         span: span,
         isSpace: character === " " && !line.pause,
         delayAfter: line.speed,
         classes: line.classes || []
      });
   });
});

function revealOneCharacter(list) {
   var next = list.splice(0, 1)[0];
   next.span.classList.add("revealed");
   next.classes.forEach((c) => {
      next.span.classList.add(c);
   });
   var delay = next.isSpace && !next.pause ? 0 : next.delayAfter;

   if (list.length > 0) {
      setTimeout(function () {
         revealOneCharacter(list);
      }, delay);
   }
}

//Kick it off
setTimeout(() => {
   revealOneCharacter(characters);   
}, 200)













    const plantImage = document.querySelector('#sunflower');    
    //declare array
    const plantImageArrayFirst = [];
    var num;
    //loop array
    for(let i = 276; i <= 420; i++) {
      num = i;
      plantImageArrayFirst.push(num);
    }


     var request;
    var time = 0;


    const animate = () => {
      if (time <= plantImageArrayFirst.length-1){
        request = requestAnimationFrame(animate);
        var path = '/storage/images/plant_grow/frame_000 ('+plantImageArrayFirst[time]+').gif';
         plantImage.src = path;
          time++;
          console.log(time);
      }else{
        cancelAnimationFrame(request);
      }
    }

    animate();
    
    //var time = 0;

    //var interval = setInterval(function() { 
    //if (time <= plantImageArrayFirst.length-1){
    //  var path = '/storage/images/plant_grow/frame_000 ('+plantImageArrayFirst[time]+').gif';
    //  plantImage.src = path;
        //console.log(path);
    //    time++;
    //}
    //else { 
    //    clearInterval(interval);
   //}
    //}, 20);

    const sunflower = document.querySelector('#sunflower');
    const images = document.querySelectorAll('.images');
    const correctAudio = new Audio("/storage/audio/success.mp3" );
    const draggableElement = document.getElementById(draggableElementData);
    const text = draggableElement.innerText;
    const textTitle = document.querySelector('#textTitle');
    //event.target.classList.add("dropped");
    event.target.style.backgroundColor = "transparent";
    
    draggableElement.classList.add("dragged");
    draggableElement.setAttribute("draggable", "false");
    event.target.insertAdjacentHTML("afterbegin", `<div style="width:12rem; height: 3rem; margin-top: 2rem; border-radius: 6px; border-width: 2px; color:black; font-size: 13px; text-transform: uppercase; padding: 10px 10px;" class="bg-blue-400 border border-black rounded-md><span class="" style="color: black;">${text}</span></div>`);
    correct++;

    isCarbonDioxide = true;
    toComplete = 420;

 

  }
  else{

var speeds = {
   pause: 100, //Higher number = longer delay
   slow: 120,
   normal: 90,
   fast: 40,
   superFast: 20
};

textLines = [
   { speed: speeds.superFast, string: "Oops!" },
   { speed: speeds.pause, string: "", pause: true },
   { speed: speeds.superFast, string: "Try Again" }
];


var characters = [];
textLines.forEach((line, index) => {
   if (index < textLines.length - 1) {
      line.string += " "; //Add a space between lines
   }
  


   line.string.split("").forEach((character) => {
      var span = document.createElement("span");
      span.textContent = character;
      container.appendChild(span);
      characters.push({
         span: span,
         isSpace: character === " " && !line.pause,
         delayAfter: line.speed,
         classes: line.classes || []
      });
   });
});

function revealOneCharacter(list) {
   var next = list.splice(0, 1)[0];
   next.span.classList.add("revealed");
   next.classes.forEach((c) => {
      next.span.classList.add(c);
   });
   var delay = next.isSpace && !next.pause ? 0 : next.delayAfter;

   if (list.length > 0) {
      setTimeout(function () {
         revealOneCharacter(list);
      }, delay);
   }
}

//Kick it off
setTimeout(() => {
   revealOneCharacter(characters);   
}, 200)






    const xMax = 16;
    const audio = new Audio("/storage/audio/Quack.mp3" );
    playAudio(audio);
    //animate shake effect on wrong drop
    anime({
      targets: event.target,
    easing: 'easeInOutSine',
    duration: 400,
    borderColor: [
      {
        value: '#ff0000',
      },
      {
        value: '#ff0000',
      },
      {
        value: '#000000',
      }
    ],
    translateX: [
      {
      value: xMax * -1,
    },
    {
      value: xMax,
    },
    {
      value: xMax/-2,
    },
    {
      value: xMax/2,
    },
    {
      value: 0
    }
    ], // All properties except 'scale' inherit 250ms delay
      });

  }
     if(toComplete == 420) {
      const correctAudio = new Audio("/storage/audio/success.mp3" );
      playAgainBtn.style.display = "block";
    nextBtn.style.display = "block";
    textTitle.innerText = "Good Job! You made the plant grow.";
    setTimeout(() => {
      playAudio(correctAudio);
      playAgainBtn.classList.add("play-again-btn-entrance");
      next.classList.add("next-entrance");
       anime({
            targets: [images],
            scale: 1.25,
            duration: 1000,
            });
    }, 50);
    }
}

//function play audio
function playAudio(audio) {
 audio.play();
}
  </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    </div>
