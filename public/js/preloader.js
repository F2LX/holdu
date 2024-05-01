window.addEventListener('load', function(){
    // When the page is fully loaded, hide the preloader after animation duration
    setTimeout(function() {
      var preloader = document.getElementById('preloader');
      
      // Add the animate-preload class to initiate the animation
      preloader.classList.add("animate-preload");
  
      // Hide the preloader after the animation ends
      preloader.addEventListener('animationend', function() {
      preloader.style.display = 'none';
     });
   }, 400); // 1000 milliseconds = 1 second
});