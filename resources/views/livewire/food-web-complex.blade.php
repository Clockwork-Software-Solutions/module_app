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
  max-height: 100vh;
}

#play-again-btn {
  position: absolute;
  top: 1.5rem;
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
  //background-color: #333;
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
  /*display: flex; 
  justify-content: center;*/
  margin-top: 1rem;
  max-height: 100vh;
  width: 100%
}
.draggable {
  height: 5rem;
  width: 5rem;
  display: flex;
  align-items: start;
  justify-content: center;
  font-size: 5rem;
  margin: 0rem 2rem;
  cursor: pointer;
  transition: opacity 0.2s;
  border: none;
  padding: 4px;
}
.draggable:hover {
  opacity: 0.5;
}
.droppable {
  height: 7rem;
  width: 7rem;
  margin: 1rem 1rem;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
  font-size: 4rem;
  font-weight: bold;
  background-color: #fff;
  border: 3px dashed #111;
  border-radius: 50%;
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
    <div class="p-8">
  <div class="flex">
  <h1 id="textTitle" class="text-3xl mb-5 mx-14 ">Here's a more complex food web.</h1>
  <div class="">
        <button id="play-again-btn" class="mt-0 bg-green-800 hover:bg-green-700">Play Again</button>
  </div>
  </div>

    <section class="draggable-elements">

    <div class="elems grid grid-cols-6 gap-x-2 gap-y-10 items-center">
    <div class="col-span-1 text-center px-10 font-bold text-xs">
    {{-- <img id = "first" class="draggable bg-white" style="color: #fff; background-color: transparent;" src="/storage/images/fox.png" alt="Light" draggable="false"> --}}
        <span id="elementText" class="" style="color: black; user-select:none;">Tertiary Consumers :</span>
    </div>
    <div id="one" class="col-start-3 col-end-5 col-span-3">
    <img id = "first" class="draggable bg-white" style="color: #fff; background-color: transparent;" src="/storage/images/osprey.png" alt="Light" draggable="false">
        <span id="elementText" class="text-sm bold" style="color: black; user-select:none; margin-left: 40px;">Osprey</span>
    </div>
    <div id="two" class="col-span-2">
    <img id = "second" class="draggable bg-white" style="color: #fff; background-color: transparent;" src="/storage/images/bald_eagle.png" alt="Light" draggable="false">
        <span id="elementText" class="text-sm bold" style="color: black; user-select:none; margin-left: 40px;">Bald Eagle</span>
    </div>
    <div class="col-span-1 text-center px-5 font-bold text-xs">
    {{-- <img id = "first" class="draggable bg-white" style="color: #fff; background-color: transparent;" src="/storage/images/fox.png" alt="Light" draggable="false"> --}}
        <span id="elementText" class="" style="color: black; user-select:none;">Secondary Consumers :</span>
    </div>
    <div id="three" class="col-span-1">
    <img id = "third" class="draggable bg-white" style="color: #fff; background-color: transparent;" src="/storage/images/seagull.png" alt="Light" draggable="false">
        <span id="elementText" class="text-sm bold" style="color: black; user-select:none; margin-left: 40px;">Gulls and Terns</span>
    </div>
    <div id="four" class="col-span-1">
    <img id = "fourth" class="draggable bg-white" style="color: #fff; background-color: transparent;" src="/storage/images/wading_bird.png" alt="Light" draggable="false">
        <span id="elementText" class="text-sm bold" style="color: black; user-select:none; margin-left: 40px;">Wading Birds</span>
    </div>
    <div id="five" class="col-span-1">
    <img id = "fifth" class="draggable bg-white" style="color: #fff; background-color: transparent;" src="/storage/images/large_fish.png" alt="Light" draggable="false">
        <span id="elementText" class="text-sm bold" style="color: black; user-select:none; margin-left: 5px;">Large Piscivorous Fish</span>
    </div>
    <div id="six" class="col-span-1">
    <img id = "sixth" class="draggable bg-white" style="color: #fff; background-color: transparent;" src="/storage/images/sea_duck.png" alt="Light" draggable="false">
        <span id="elementText" class="text-sm bold" style="color: black; user-select:none; margin-left: 40px;">Sea Ducks</span>
    </div>
    <div id="seven" class="col-span-1">
    <img id = "seventh" class="draggable bg-white" style="color: #fff; background-color: transparent;" src="/storage/images/swan.png" alt="Light" draggable="false">
        <span id="elementText" class="text-sm bold" style="color: black; user-select:none; margin-left: 20px;">Tundra Swan</span>
    </div>
      <div class="col-span-1 text-center px-10 font-bold text-xs">
    {{-- <img id = "first" class="draggable bg-white" style="color: #fff; background-color: transparent;" src="/storage/images/fox.png" alt="Light" draggable="false"> --}}
        <span id="elementText" class="" style="color: black; user-select:none;">Primary Consumers :</span>
    </div>
    <div id ="eight" class="col-start-3 col-end-5 col-span-3">
    <img id = "eighth" class="draggable bg-white" style="color: #fff; background-color: transparent;" src="/storage/images/small_fish.png" alt="Light" draggable="false">
        <span id="elementText" class="text-sm bold" style="color: black; user-select:none; margin-left: 0px;">Small Planktivorous Fish</span>
    </div>
    <div id="nine" class="col-span-2">
    <img id = "ninth" class="draggable bg-white" style="color: #fff; background-color: transparent;" src="/storage/images/bivalves.png" alt="Light" draggable="false">
        <span id="elementText" class="text-sm bold" style="color: black; user-select:none; margin-left: 40px;">Bivalves</span>
    </div>
    <div class="col-span-1 text-center px-5 font-bold text-xs">
    {{-- <img id = "first" class="draggable bg-white" style="color: #fff; background-color: transparent;" src="/storage/images/fox.png" alt="Light" draggable="false"> --}}
        <span id="elementText" class="" style="color: black; user-select:none;">Herbivores :</span>
    </div>
    <div id="ten" class="col-span-2">
    <img id = "tenth" class="draggable bg-white" style="color: #fff; background-color: transparent;" src="/storage/images/zooplankton.png" alt="Light" draggable="false">
        <span id="elementText" class="text-sm bold" style="color: black; user-select:none; margin-left: 20px;">Zooplankton</span>
    </div>
    <div id="eleven" class="col-span-1">
    <img id = "eleventh" class="draggable bg-white" style="color: #fff; background-color: transparent;" src="/storage/images/benthic.png" alt="Light" draggable="false">
        <span id="elementText" class="text-sm bold" style="color: black; user-select:none; margin-left: 10px;">Benthic Invertebrates</span>
    </div>
    <div id="twelve" class="col-span-1">
    <img id = "twelvth" class="draggable bg-white" style="color: #fff; background-color: transparent;" src="/storage/images/herbivore_duck.png" alt="Light" draggable="false">
        <span id="elementText" class="text-sm bold" style="color: black; user-select:none; margin-left: 10px;">Herbivorous Ducks</span>
    </div>
    <div id="thirteen" class="col-span-1">
    <img id = "thirtheenth" class="draggable bg-white" style="color: #fff; background-color: transparent;" src="/storage/images/geese.png" alt="Light" draggable="false">
        <span id="elementText" class="text-sm bold" style="color: black; user-select:none; margin-left: 0px;">Geese and Mute Swans</span>
    </div>
    <div class="col-span-1 text-center px-5 font-bold text-xs">
    {{-- <img id = "first" class="draggable bg-white" style="color: #fff; background-color: transparent;" src="/storage/images/fox.png" alt="Light" draggable="false"> --}}
        <span id="elementText" class="" style="color: black; user-select:none;">Primary Producers :</span>
    </div>
    <div id="fourteen" class="col-span-2 col-start-3 col-end-4 ">
    <img id = "fourteenth" class="draggable bg-white" style="color: #fff; background-color: transparent;" src="/storage/images/phyoplankton.png" alt="Light" draggable="false">
        <span id="elementText" class="text-sm bold" style="color: black; user-select:none; margin-left: 20px;">Phytoplankton</span>
    </div>
    <div id="fifteen" class="col-span-1">
    <img id = "fiftheenth" class="draggable bg-white" style="color: #fff; background-color: transparent;" src="/storage/images/sav.png" alt="Light" draggable="false">
        <span id="elementText" class="text-sm bold " style="color: black; user-select:none; margin-left: 0px;">Submerged Aquatic Vegetation (SAV)</span>
    </div>
    <div id="sixteen" class="col-span-2">
    <img id = "sixteenth" class="draggable bg-white" style="color: #fff; background-color: transparent;" src="/storage/images/vegetation.png" alt="Light" draggable="false">
        <span id="elementText" class="text-sm bold" style="color: black; user-select:none; margin-left: 30px;">Vegetation</span>
    </div>
    {{-- <div id="two" class="text-center">
    <img id="second" class="draggable bg-white" style="color: #fff; background-color: transparent; " src="/storage/images/bird.png" alt="Grass" draggable="false">
        <span id="elementText" class="text-sm bold" style="color: black; user-select:none; margin-right: 110px">Bird</span>
    </div>
     <div id="three" class="text-center">
    <img id="third" class="draggable bg-white" style="color: #fff; background-color: transparent; margin-right: 150px" src="/storage/images/cat.png" alt="Grass" draggable="false">
        <span id="elementText" class="text-sm bold" style="color: black; user-select:none; margin-right: 120px">Cat</span>
    </div>
    <div id="four" class="text-center">
    <img id="fourth" class="draggable bg-white" style="color: #fff; background-color: transparent; margin-right: 100px" src="/storage/images/slug.png" alt="Consumers" draggable="false">
        <span id="elementText" class="text-sm bold" style="color: black; user-select:none; margin-right: 120px">Slug</span>
    </div>
    <div id="five" class="text-center">
    <img id="fifth" class="draggable bg-white" style="color: #fff; background-color: transparent; margin-right: 100px" src="/storage/images/grass.png" alt="Consumers" draggable="false">
        <span id="elementText" class="text-sm bold" style="color: black; user-select:none; margin-right: 120px">Grass</span>
    </div>
    <div id="six" class="text-center">
    <img id="last" class="draggable bg-white" style="color: #fff; background-color: transparent; margin-right: 100px" src="/storage/images/rabbit.png" alt="Consumers" draggable="false">
        <span id="elementText" class="text-sm bold" style="color: black; user-select:none; margin-right: 120px">Rabbit</span>
    </div> --}}
   
    </div>
   
  </section>



  <section class="droppable-elements">
   <div class="flex justify-end">
  <div></div>
      <button id="next" wire:click="foodweb4()" class="font-bold text-md bg-green-800 border-green-800 text-white rounded-md px-4 py-2 mr-14 hover:bg-green-700">Next</button>
</div>
  </section>
  </div>


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
    var arr = [];
    var ctr = 0;
    const correctAudio = new Audio("/storage/audio/success.mp3" );
    const playAgainBtn = document.querySelector("#play-again-btn");
    const nextBtn = document.querySelector("#next");
    const textTitle = document.querySelector('#textTitle');
    $('.elems').click(function(event) {
      //if event is null
      event.preventDefault();
  //get id
  var id = event.target.id;
  
 
  if(arr.length != 1)
  {
    arr.push(id);
  }
  else
  {
    arr.push(id);
 
    // first = fox, second = bird, third = cat, fourth = slug, fifth = grass, sixth = rabbit
 if((jQuery.inArray("elementText", arr) !== -1) || (jQuery.inArray("", arr) !== -1) || (jQuery.inArray("one", arr) !== -1) || (jQuery.inArray("two", arr) !== -1) || (jQuery.inArray("three", arr) !== -1) || (jQuery.inArray("four", arr) !== -1)  || (jQuery.inArray("five", arr) !== -1)  || (jQuery.inArray("six", arr) !== -1) || (jQuery.inArray("seven", arr) !== -1) || (jQuery.inArray("eight", arr) !== -1) || (jQuery.inArray("nine", arr) !== -1) || (jQuery.inArray("ten", arr) !== -1) || (jQuery.inArray("eleven", arr) !== -1) || (jQuery.inArray("twelve", arr) !== -1) || (jQuery.inArray("thirteen", arr) !== -1) || (jQuery.inArray("fourteen", arr) !== -1) || (jQuery.inArray("fifteen", arr) !== -1) || (jQuery.inArray("sixteen", arr) !== -1))
    {
      alert("Please select an image.");
      arr = [];
    }else {
          var first = document.getElementById(arr[0]);
     var second = document.getElementById(arr[1]);
//if right connection draw line
if((arr[0] == "fifth" && arr[1] == "first") || (arr[0] == "fifth" && arr[1] == "second") 
|| (arr[0] == "sixth" && arr[1] == "second") || (arr[0] == "eighth" && arr[1] == "third") 
|| (arr[0] == "eighth" && arr[1] == "fourth") || (arr[0] == "eighth" && arr[1] == "fifth") 
|| (arr[0] == "ninth" && arr[1] == "sixth") || (arr[0] == "ninth" && arr[1] == "seventh") 
|| (arr[0] == "ninth" && arr[1] == "seventh") || (arr[0] == "ninth" && arr[1] == "twelvth") 
|| (arr[0] == "tenth" && arr[1] == "eighth") || (arr[0] == "tenth" && arr[1] == "ninth") 
|| (arr[0] == "eleventh" && arr[1] == "sixth") || (arr[0] == "fourteenth" && arr[1] == "eighth")
|| (arr[0] == "fourteenth" && arr[1] == "eleventh") || (arr[0] == "fourteenth" && arr[1] == "ninth")
|| (arr[0] == "fiftheenth" && arr[1] == "twelvth") || (arr[0] == "sixteenth" && arr[1] == "seventh")
|| (arr[0] == "sixteenth" && arr[1] == "thirtheenth"))
{
  var line = new LeaderLine(first, second, {hide: true, dash: true});
  line.setOptions({startSocket: 'top',endSocket: 'bottom', path: 'arc',  startSocketGravity: [192, -172],
  endSocketGravity: [-192, -172]});

  arr=[];
  ctr++;
  if(ctr >= 18){
    //console.log(playAgainBtn + " " + nextBtn + " " + textTitle);
    playAgainBtn.style.display = "block";
    nextBtn.style.display = "block";
    textTitle.innerText = "Good Job! This is the correct order.";
    setTimeout(() => {
      playAudio(correctAudio);
      playAgainBtn.classList.add("play-again-btn-entrance");
      next.classList.add("next-entrance");
       anime({
            targets: [document.getElementById('one'), document.getElementById('two'), document.getElementById('three'), document.getElementById('four')],
            scale: .99,
            duration: 1000,
            });
    }, 50);
  }
line.show('draw', {
  startPlug: 'behind',
  endPlug: 'behind',
  animOptions: {
    duration: 3000,
    timing: [0.5, 0, 1, 0.42],
  }
})
 
}else{
  const xMax = 16;
    const audio = new Audio("/storage/audio/Quack.mp3" );
    playAudio(audio);
    //animate shake effect on wrong drop
    anime({
      targets: [first, second],
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
    arr=[];
}

    }


  }
});



    var first = $('#one');
    var second = $('#two');
    var third = $('#three');
    var fourth = $('#four');
    var fifth = $('#five');
    var last = $('#six');
   

    var elements = [first, second, third, fourth, fifth, last];
    var randomElements = shuffle(elements);
    //randomElements[1].addClass('mt-16');
    //randomElements[4].addClass('mt-16');
      //var elmId = $("#test").attr("id");
  //console.log(randomElements[1].attr("class") + " " + );
    //$('.elems').append(randomElements);

  });

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
const totalDraggableItems = 6;
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

  const droppableElementData = event.target.getAttribute("data-draggable-id");
  const isCorrectMatching = draggableElementData === droppableElementData;
  total++;
  if(isCorrectMatching) {
    const correctAudio = new Audio("/storage/audio/success.mp3" );
    const draggableElement = document.getElementById(draggableElementData);
    const textTitle = document.querySelector('#textTitle');
    event.target.classList.add("dropped");
    // event.target.style.backgroundColor = draggableElement.style.color; // This approach works only for inline styles. A more general approach would be the following: 
    event.target.style.backgroundColor = "transparent";
    //set color of inner element
    event.target.innerHTML = `<span class="" style="color: black; font-weight:bold; visibility: visible;">`+event.target.innerText+`</span>`;
    //event.target.innerText.color = "black";
    //window.getComputedStyle(draggableElement).color;
    draggableElement.classList.add("dragged");
    draggableElement.setAttribute("draggable", "false");
    event.target.insertAdjacentHTML("afterbegin", `<img src="/storage/images/${draggableElementData}.png">`);
    correct++;
    if(correct===Math.min(totalDraggableItems)) { // Game Over!!
    //draggableText.classList.remove("hidden");
    playAgainBtn.style.display = "block";
    nextBtn.style.display = "block";
    textTitle.innerText = "Good Job! This is the correct order.";
    setTimeout(() => {
      playAudio(correctAudio);
      playAgainBtn.classList.add("play-again-btn-entrance");
      next.classList.add("next-entrance");
       anime({
            targets: droppableElements,
            scale: 0.95,
            duration: 1000,
            });
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
      <script src=""></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    </div>
