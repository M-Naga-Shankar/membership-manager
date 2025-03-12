  <!--==========================
    Intro Section
  ============================-->
  <script>
  // Array of background images
  const backgrounds = [
    "./img/intro-bg.jpg",
    "./img/intro-bg.jpg",
    "./img/intro-bg.jpg",
    "./img/intro-bg.jpg"
  ];

  let currentIndex = 0;

  function changeBackground() {
    document.getElementById("intro").style.backgroundImage = `url(${backgrounds[currentIndex]})`;
    
    // Move to the next image, loop back to the first
    currentIndex = (currentIndex + 1) % backgrounds.length;
  }

  // Change background every 2 seconds
  setInterval(changeBackground, 2000);
</script>

  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">Welcome <span>To</span><br>Eklayva Literacy Research Fundation</h1>
      
      <!-- <p class="mb-4 pb-0"><span style="font-size: larger;"> Dr.P.Basheer Khan </span>
        <br><span style="font-size: medium;"> M.A.(Eng),B.Ed,PGCTE,Ph.D </span></p> -->
      
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
      <a href="#about" class="about-btn scrollto">About The ELRF</a>
    </div>

  </section>