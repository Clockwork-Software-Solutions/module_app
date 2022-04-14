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

.draggable-elements {
  display: flex;
  justify-content: center;
  margin-top: 8rem;
}
.draggable {
  height: 6rem;
  width: 6rem;
  display: flex;
  align-items: center;
  justify-content: center;
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
  height: 6.5rem;
  width: 6.5rem;
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
<div>
    <div class="p-24">

  <h1 class="text-3xl mb-10 mx-14">Can you make a food chain out of this?</h1>
  <section class="droppable-elements">
    <div class="flex">
    <div class="droppable" data-draggable-id="sun"><span></span></div>
    <div class="fas fa-arrow-right my-auto text-xl"><span></span></div>
    <div class="droppable" data-draggable-id="grass"><span></span></div>
    <div class="fas fa-arrow-right my-auto text-xl"><span></span></div>
    <div class="droppable" data-draggable-id="caterpillar"><span></span></div>
    <div class="fas fa-arrow-right my-auto text-xl"><span></span></div>
    <div class="droppable" data-draggable-id="snake"><span></span></div>
    <div class="fas fa-arrow-right my-auto text-xl"><span></span></div>
    <div class="droppable" data-draggable-id="eagle"><span></span></div>
    <!-- <div class="droppable" data-draggable-id="spider"><span>Spider</span></div>
    <div class="droppable" data-draggable-id="horse"><span>Horse</span></div>
    <div class="droppable" data-draggable-id="hippo"><span>Hippo</span></div> -->
</div>
  </section>
  
  <section class="draggable-elements px-20">
  <!-- <div class="px-20 flex"> -->
    <img class="draggable bg-white" style="color: #fff;" src="storage/images/sun.png" alt="Sun" draggable="true"id="sun">
    <img class="draggable bg-white" style="color: #fff;" src="storage/images/grass.png" alt="Sun" draggable="true" id="grass">
    <img class="draggable bg-white" style="color: #fff;" src="storage/images/caterpillar.png" alt="Sun" draggable="true" id="caterpillar">
    <img class="draggable bg-white" style="color: #fff;" src="storage/images/snake.png" alt="Sun" draggable="true"  id="snake">
    <img class="draggable bg-white" style="color: #fff;" src="storage/images/eagle.png" alt="Sun" draggable="true"  id="eagle">
    <!-- <i class="fas fa-cat draggable" draggable="true" style="color: #ff6384;" id="cat"></i>
    <i class="fas fa-dog draggable" draggable="true" style="color: #36a2eb;" id="dog"></i>
    <i class="fas fa-dove draggable" draggable="true" style="color: #ffce56;" id="dove"></i>
    <i class="fas fa-fish draggable" draggable="true" style="color: #9966ff;" id="fish"></i>
    <i class="fas fa-frog draggable" draggable="true" style="color: #4bc0c0;" id="frog"></i> -->
    <!-- <i class="fas fa-horse draggable" draggable="true" style="color: #333333;" id="horse"></i>
    <i class="fas fa-hippo draggable" draggable="true" style="color: #ff9f40;" id="hippo"></i>
    <i class="fas fa-spider draggable" draggable="true" style="color: #ff99cc;" id="spider"></i> -->
    <!-- </div> -->
  </section>

<!-- <div id="test" class="h-full w-28 bg-green-800">
    s
</div> -->
</div>



<script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script>

  $(window).on('load', function() {
    //set id sun to a variable
    var sun = $('#sun');
    var grass = $('#grass');
    var caterpillar = $('#caterpillar');
    var snake = $('#snake');
    var eagle = $('#eagle');
    //randomize the order of the elements
    var elements = [sun, grass, caterpillar, snake, eagle];
    var randomElements = shuffle(elements);
    //set the order of the elements
    console.log(randomElements);
    //APPEND FLEX ELEMENTS TO THE DOm
    $('.draggable-elements').append(randomElements);
    
    //sun.remove().insertAfter()
    //set random number between 0 and 5
    // var randomNumber = Math.floor(Math.random() * 6);
    // if(randomNumber == 0)
    // {

    // }
   // $('#sun').remove().insertAfter($('#grass'));
  // } else {
  //   $('.kutija1').remove().insertBefore($('.kutija2'));
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
<script>
  const draggableElements = document.querySelectorAll(".draggable");
const droppableElements = document.querySelectorAll(".droppable");

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

function drop(event) {
  event.preventDefault(); // This is in order to prevent the browser default handling of the data
  event.target.classList.remove("droppable-hover");
  const draggableElementData = event.dataTransfer.getData("text"); // Get the dragged data. This method will return any data that was set to the same type in the setData() method
  const droppableElementData = event.target.getAttribute("data-draggable-id");
  const isCorrectMatching = draggableElementData === droppableElementData;
  if(isCorrectMatching) {
    const draggableElement = document.getElementById(draggableElementData);
    event.target.classList.add("dropped");
    // event.target.style.backgroundColor = draggableElement.style.color; // This approach works only for inline styles. A more general approach would be the following: 
    event.target.style.backgroundColor = "transparent";
    //window.getComputedStyle(draggableElement).color;
    draggableElement.classList.add("dragged");
    draggableElement.setAttribute("draggable", "false");
    event.target.insertAdjacentHTML("afterbegin", `<img src="storage/images/${draggableElementData}.png">`);
  }else{
    const xMax = 16;
    const audio = new Audio("storage/audio/Quack.mp3" );
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
