<div>
<div class="w-full p-20">
<div class="flex">
  <h1 id="textTitle" class="text-3xl mb-10 mx-14">Food Chain and Food Web</h1>
  </div>
<div class="flex justify-center">
{{-- <iframe id="video" width="585" height="400"
src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe> --}}
<iframe width="585" height="400" src="https://www.youtube.com/embed/NBmb-63zZMI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
{{-- <video id="video" class="col-span-1" width="600" height="600" controls>
  <source src="https://www.youtube.com/watch?v=NBmb-63zZMI" type="video/mp4"> --}}

  {{-- <iframe class="" src="/storage/videos/nemo.mp4" type="video/mp4"></iframe> --}}
  {{-- <source src="movie.ogg" type="video/ogg"> --}}
  {{-- Your browser does not support the video tag. --}}

{{-- </video> --}}


</div>
<div class="flex justify-between mt-5 mx-60">
{{-- <button id="play" class="font-bold text-md bg-green-800 border-green-800 text-white rounded-md px-4 py-2 ml-16 hover:bg-green-700">Play Video</button> --}}
<button  wire:click="proceed()" class="font-bold text-md bg-green-800 border-green-800 text-white rounded-md px-4 py-2 ml-16 hover:bg-green-700">Next</button>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
//play video on button click
document.querySelector('#play').addEventListener('click', function() {
  document.querySelector('#video').play();
});
</script>


</div>
