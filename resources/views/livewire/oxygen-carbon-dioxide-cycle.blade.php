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
  top: 2.0rem;
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

.draggable-elements {
  display: flex;
  justify-content: center;
  margin-top: 4rem;
}
.draggable {
  height: 3rem;
  width: 12rem;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow-wrap: break-word;
  font-size: 5rem;
  margin: 0rem 2rem;
  cursor: move;
  transition: opacity 0.2s;
  border: solid black 2px;
  padding: 4px;
}
.draggable:hover {
  opacity: 0.5;
}
.droppable {
  height: 3rem;
  width: 12rem;
  margin: 1rem auto;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
  font-size: 4rem;
  font-weight: bold;
  background-color: #fff;
  border: 3px dashed #111;
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
    <div class="p-10">
  <div class="flex">
  <h1 id="textTitle" class="text-3xl mb-10 mx-14">Fill the boxes with the correct answers.</h1>
        <button id="play-again-btn" class="mt-0 bg-green-800 hover:bg-green-700">Play Again</button>
  </div>
  <section class="droppable-elements">

    <div class="grid grid-cols-6">

    <div class="col-span-1 grid content-end">
    <div class="images grid grid-cols-2 gap-2">
    <img class="h-20 w-20" src="/storage/images/plant.png" alt="Grass" draggable="true" id="plant">
    <img class="h-20 w-20" src="/storage/images/sav.png" alt="Grass" draggable="true" id="sav">
    </div>
    </div>

    <div class="col-span-1 grid gap-10 my-20">
    <div class="droppable transform" data-draggable-id="one" id="first">
    <span id="elementText" class="invisible" style="color: white; user-select:none;">Oxygen</span>
    </div>
    <div class="droppable transform" data-draggable-id="two" id="second">
    <span id="elementText" class="invisible" style="color: white; user-select:none;">Glucose</span>
    </div>
    </div>

    {{-- <div class="col-span-1 grid gap-10 my-20">
    <div class="droppable" data-draggable-id="oxygen" id="air">
    <span id="elementText" class="invisible" style="color: white; user-select:none;">Oxygen</span>
    </div>
    <div class="droppable" data-draggable-id="glucose" id="sugar">
    <span id="elementText" class="invisible" style="color: white; user-select:none;">Glucose</span>
    </div>
    </div> --}}

    <div class="col-span-1 grid gap-10 my-20">
    <div class="droppable" data-draggable-id="three" id="third">
    <span id="elementText" class="invisible" style="color: white; user-select:none;">Oxygen</span>
    </div>
    <div class="droppable" data-draggable-id="four" id="fourth">
    <span id="elementText" class="invisible" style="color: white; user-select:none;">Glucose</span>
    </div>
    </div>

    <div class="col-span-1 grid content-end">
    <div class="images grid grid-cols-2 gap-2">
    <img class="h-20 w-20" src="/storage/images/ringtail.png" alt="Grass" draggable="false"id="ringtail">
    <img class="h-20 w-20" src="/storage/images/rat.png" alt="Grass" draggable="false"id="rat">
    </div>
    </div>

    <div class="col-span-1 grid content-end">
    <div class="images grid grid-cols-3 gap-2">

    <div class="col-span-1">
    <img class="h-72 w-80" src="/storage/images/tall_tree.png" alt="Grass" draggable="false" id="tall_tree">
    </div>

    <div class="col-span-1 grid content-end">
    <img class="h-10 w-10" src="/storage/images/fungus.png" alt="Grass" draggable="false" id="fungus">
    </div>

    <div class="col-span-1 grid content-center">
    <div class="droppable" data-draggable-id="five" id="fifth">
    <span id="elementText" class="invisible" style="color: white; user-select:none;">Glucose</span>
    </div>
    </div>

    </div>
    </div>
    
    
    
    </div>

    <div class="grid grid-cols-3 pt-5 border-t-2 border-black">
    
    <div class="col-span-1 grid content-end mt-10">
    <div class="images">
    <img class="h-20 w-20" src="/storage/images/vegetation.png" alt="Grass" draggable="false" id="vegetation">
    </div>
    </div>

    <div class="col-span-1">
    <div class="droppable" data-draggable-id="six" id="sixth">
    <span id="elementText" class="invisible" style="color: white; user-select:none;">Glucose</span>
    </div>
     <div class="droppable" data-draggable-id="seven" id="seventh">
    <span id="elementText" class="invisible" style="color: white; user-select:none;">Glucose</span>
    </div>
    </div>

     <div class="col-span-1 grid content-end mx-auto">
    <div class="images">
    <img class="h-20 w-20" src="/storage/images/fish.png" alt="Grass" draggable="false" id="fish">
    </div>
    </div>

    </div>
 
  </section>
  {{--<section class="draggable-element px-20">
  {{-- <div clas="w-96 h-36 bg-red-300">ss</div> 
  </section>--}}
  <section class="draggable-elements px-20 flex-wrap space-y-5">
  <!-- <div class="px-20 flex"> -->
    <div draggable="true" class="draggable bg-blue-400 border border-blue-600 rounded-md" id="one"><span class="text-center" style="font-size: 13px; text-transform: uppercase;">Carbon Dioxide used by plants</span></div>
    <div draggable="true" class="draggable bg-blue-400 border border-blue-600 rounded-md" id="two"><span class="text-center" style="font-size: 10px; text-transform: uppercase;">Oxygen from photosynthesis available to animals</span></div>
    <div draggable="true" class="draggable bg-blue-400 border border-blue-600 rounded-md" id="three"><span class="text-center" style="font-size: 13px; text-transform: uppercase;">Carbon Dioxide given off by animals</span></div>
    <div draggable="true" class="draggable bg-blue-400 border border-blue-600 rounded-md" id="four"><span class="text-center" style="font-size: 13px; text-transform: uppercase;">Oxygen given off by plants</span></div>
    <div draggable="true" class="draggable bg-blue-400 border border-blue-600 rounded-md" id="five"><span class="text-center" style="font-size: 9px; text-transform: uppercase;">Carbon Dioxide given off by animals decaying organic matter</span></div>
    <div draggable="true" class="draggable bg-blue-400 border border-blue-600 rounded-md" id="six"><span class="text-center" style="font-size: 13px; text-transform: uppercase;">Oxygen used by animals</span></div>
    <div draggable="true" class="draggable bg-blue-400 border border-blue-600 rounded-md" id="seven"><span class="text-center" style="font-size: 11px; text-transform: uppercase;">CO2 from respiration available to animals</span></div>

  </section>
  

<!-- <div id="test" class="h-full w-28 bg-green-800">
    s
</div> -->
<div class="mt-4 flex justify-between">
<div></div>
<button id="next" wire:click="finish()" class="font-bold text-md bg-green-800 border-green-800 text-white rounded-md px-4 py-2 mr-14 hover:bg-green-700">Finish</button>
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
    loadLines();
    //set id sun to a variable
    var first = $('#one');
    var second = $('#two');
    var third = $('#three');
    var fourth = $('#four');
    var fifth = $('#five');
    var sixth = $('#six');
    var seventh = $('#seven');
    var elements = [first, second, third, fourth, fifth, sixth, seventh];
    var randomElements = shuffle(elements);

    $('.draggable-elements').append(randomElements);
    
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
let correct = 0;
let total = 0;
const totalDraggableItems = 7;
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


function loadLines(){
  const first = document.querySelector('#first');
  const second = document.querySelector('#second');
  const third = document.querySelector('#third');
  const fourth = document.querySelector('#fourth');
  const fifth = document.querySelector('#fifth');
  const sixth = document.querySelector('#sixth');
  const seventh = document.querySelector('#seventh');
  const plant = document.querySelector('#plant');
  const sav = document.querySelector('#sav');
  const ringtail = document.querySelector('#ringtail');
  const rat = document.querySelector('#rat');
  const tall_tree = document.querySelector('#tall_tree');
  const fungus = document.querySelector('#fungus');
  const vegetation = document.querySelector('#vegetation');
  const fish = document.querySelector('#fish');

    var line1 = new LeaderLine(first, plant, {hide: true, dash: false});
        line1.setOptions({startSocket: 'left', endSocket: 'top', path: 'grid'});
        line1.show('draw', {
        
        startPlug: 'behind',
        endPlug: 'behind',
        animOptions: {
        duration: 3000,
        timing: [0.5, 0, 1, 0.42],
        }
        });

    var line2 = new LeaderLine(rat, third, {hide: true, dash: false});
        line2.setOptions({startSocket: 'top', endSocket: 'right', path: 'grid'});
        line2.show('draw', {
        
        startPlug: 'behind',
        endPlug: 'behind',
        animOptions: {
        duration: 3000,
        timing: [0.5, 0, 1, 0.42],
        }
        });

     var line3 = new LeaderLine(sav, second, {hide: true, dash: false});
        line3.setOptions({startSocket: 'top', endSocket: 'left', path: 'grid'});
        line3.show('draw', {
        
        startPlug: 'behind',
        endPlug: 'behind',
        animOptions: {
        duration: 3000,
        timing: [0.5, 0, 1, 0.42],
        }
        });

    var line4 = new LeaderLine(fourth, ringtail, {hide: true, dash: false});
        line4.setOptions({startSocket: 'right', endSocket: 'top', path: 'grid'});
        line4.show('draw', {
        
        startPlug: 'behind',
        endPlug: 'behind',
        animOptions: {
        duration: 3000,
        timing: [0.5, 0, 1, 0.42],
        }
        }); 

     var line5 = new LeaderLine(fungus, tall_tree, {hide: true, dash: false});
        line5.setOptions({startSocket: 'top', endSocket: 'top', path: 'grid'});
        line5.show('draw', {
        
        startPlug: 'behind',
        endPlug: 'behind',
        animOptions: {
        duration: 3000,
        timing: [0.5, 0, 1, 0.42],
        }
        });

     
     var line6 = new LeaderLine(seventh, vegetation, {hide: true, dash: false});
        line6.setOptions({startSocket: 'left', endSocket: 'right', path: 'grid'});
        line6.show('draw', {
        
        startPlug: 'behind',
        endPlug: 'behind',
        animOptions: {
        duration: 3000,
        timing: [0.5, 0, 1, 0.42],
        }
        });


      var line7 = new LeaderLine(fish, seventh, {hide: true, dash: false});
        line7.setOptions({startSocket: 'left', endSocket: 'right', path: 'grid'});
        line7.show('draw', {
        
        startPlug: 'behind',
        endPlug: 'behind',
        animOptions: {
        duration: 3000,
        timing: [0.5, 0, 1, 0.42],
        }
        });

         var line8 = new LeaderLine(sixth, fish, {hide: true, dash: false});
        line8.setOptions({startSocket: 'right', endSocket: 'top', path: 'grid'});
        line8.show('draw', {
        
        startPlug: 'behind',
        endPlug: 'behind',
        animOptions: {
        duration: 3000,
        timing: [0.5, 0, 1, 0.42],
        }
        }); 

        var line9 = new LeaderLine(vegetation, sixth, {hide: true, dash: false});
        line9.setOptions({startSocket: 'top', endSocket: 'left', path: 'grid'});
        line9.show('draw', {
        
        startPlug: 'behind',
        endPlug: 'behind',
        animOptions: {
        duration: 3000,
        timing: [0.5, 0, 1, 0.42],
        }
        });                                         


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

  const droppableElementData = event.target.getAttribute("data-draggable-id");
  const isCorrectMatching = draggableElementData === droppableElementData;
  total++;
  if(isCorrectMatching) {
    const sunflower = document.querySelector('#sunflower');
    const images = document.querySelectorAll('.images');
    const correctAudio = new Audio("/storage/audio/success.mp3" );
    const draggableElement = document.getElementById(draggableElementData);
    const text = draggableElement.innerText;
    const textTitle = document.querySelector('#textTitle');
    event.target.classList.add("dropped");
    event.target.style.backgroundColor = "transparent";
    
    draggableElement.classList.add("dragged");
    draggableElement.setAttribute("draggable", "false");
    event.target.insertAdjacentHTML("afterbegin", `<div style="width:12rem; height: 3.5rem; margin-top: 0rem; border-radius: 6px; border-width: 2px; color:black; font-size: 10px; text-transform: uppercase; padding: 10px 10px;" class="bg-blue-400 border border-black rounded-md><span class="" style="color: black;">${text}</span></div>`);
    correct++;
   



    if(correct===Math.min(totalDraggableItems)) { // Game Over!!
    playAgainBtn.style.display = "block";
    nextBtn.style.display = "block";
    textTitle.innerText = "Good Job! You got the right answer.";
    setTimeout(() => {
      playAudio(correctAudio);
      playAgainBtn.classList.add("play-again-btn-entrance");
      next.classList.add("next-entrance");
       //anime({
       //     targets: [images],
        //    scale: 1.25,
        //    duration: 1000,
         //   });
    }, 50);
  } 
  }else{
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
}

//function play audio
function playAudio(audio) {
 audio.play();
}
  </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    </div>
