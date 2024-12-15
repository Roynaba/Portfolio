<?php
include("include/head.php");
?>

<body class="bg-dark_primary_bg">

    <!-- Preloader start -->
    <div id="preloader">
        <div class="loader--border"></div>
    </div>
    <!-- Preloader end -->

    <div class="home2__hero--bg">
    
        <!-- Start header area -->
        <?php
        include("include/header.php");
        ?>
        <!-- End header area -->
        <main class="main__content_wrapper">
            <!-- Start slider section -->
            <div class="hero__section">
                <div class="container">
                    <div class="hero__section--inner2 d-flex align-items-center">
                        <div class="hero__section--left d-flex align-items-center">
                            <div class="hero__profile position__relative">
                                <div class="hero__profile--topbar position__relative">
                                    <div class="hero__profile--thumbnail">
                                        <img class="hero__profile--thumbnail__media" src="assets\img\nabajit\me.png" alt="img">
                                    </div>
                                    <div class="hero__profile--text">
                                        <h2 class="hero__profile--title">Nabajit Roy</h2>
                                        <span class="hero__profile--subtitle">Web Developer</span>
                                    </div>
                                </div>
                                <ul class="hero__profile--info position__relative">
                                    <!-- <li class="hero__profile--info__list">
                                        <span class="hero__profile--info__icon"><svg class="max-w-5" width="16" height="34" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path></svg></span>
                                        <a class="hero__profile--info__text" href="tel:+01215656855">+01215656855</a>
                                    </li> -->
                                    <li class="hero__profile--info__list">
                                        <span class="hero__profile--info__icon"><svg class="max-w-5" width="16" height="34" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"></path></svg></span>
                                        <span class="hero__profile--info__text">Gossaigaon, Assam</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="hero__content hero__profile--content">
                                <span class="hero__content--subtitle text__secondary mb-10">HELLO  I'M</span>
                                <h2 class="hero__content--title mb-15">Nabajit Roy! </h2>
                                <h3 class="hero__content--subtitle2 mb-20">Web Developer </h3>
                                <p class="hero__content--desc mb-30">Hi, I'm Nabajit Roy, a passionate web developer with expertise in creating responsive and dynamic websites. I specialize in both front-end and back-end technologies.</p>
                           
    <!-- Download Button -->
    <!-- <button class="primary__btn download__btn mb-30" id="downloadBtn">
    <svg class="download__btn--svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
        <polyline points="7 10 12 15 17 10"></polyline>
        <line x1="12" y1="15" x2="12" y2="3"></line>
    </svg>
    Download CV
</button>

<script>
    document.getElementById('downloadBtn').addEventListener('click', function() {
        // Use forward slashes in the file path to ensure it works cross-platform
        const link = document.createElement('a');
        link.href = 'assets/img/nabajit/NABAJIT ROY RESUME.pdf'; // Corrected file path using forward slashes
        link.download = 'NABAJIT ROY RESUME.pdf'; // The name of the file that will be downloaded
        link.click();
    });
</script> -->



<div class="social__share style2 d-flex align-items-center">
    <span class="social__share--title">Contact Me: </span>
    <ul class="social__share--wrapper d-flex">
        
        <!-- Gmail Icon -->
        <li class="social__share--child">
            <a class="social__share--link" href="mailto:nabajitroy9@gmail.com">
            <svg width="25px" height="25px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2 11.9556C2 8.47078 2 6.7284 2.67818 5.39739C3.27473 4.22661 4.22661 3.27473 5.39739 2.67818C6.7284 2 8.47078 2 11.9556 2H20.0444C23.5292 2 25.2716 2 26.6026 2.67818C27.7734 3.27473 28.7253 4.22661 29.3218 5.39739C30 6.7284 30 8.47078 30 11.9556V20.0444C30 23.5292 30 25.2716 29.3218 26.6026C28.7253 27.7734 27.7734 28.7253 26.6026 29.3218C25.2716 30 23.5292 30 20.0444 30H11.9556C8.47078 30 6.7284 30 5.39739 29.3218C4.22661 28.7253 3.27473 27.7734 2.67818 26.6026C2 25.2716 2 23.5292 2 20.0444V11.9556Z" fill="dark"/>
<path d="M22.0515 8.52295L16.0644 13.1954L9.94043 8.52295V8.52421L9.94783 8.53053V15.0732L15.9954 19.8466L22.0515 15.2575V8.52295Z" fill="#EA4335"/>
<path d="M23.6231 7.38639L22.0508 8.52292V15.2575L26.9983 11.459V9.17074C26.9983 9.17074 26.3978 5.90258 23.6231 7.38639Z" fill="#FBBC05"/>
<path d="M22.0508 15.2575V23.9924H25.8428C25.8428 23.9924 26.9219 23.8813 26.9995 22.6513V11.459L22.0508 15.2575Z" fill="#34A853"/>
<path d="M9.94811 24.0001V15.0732L9.94043 15.0669L9.94811 24.0001Z" fill="#C5221F"/>
<path d="M9.94014 8.52404L8.37646 7.39382C5.60179 5.91001 5 9.17692 5 9.17692V11.4651L9.94014 15.0667V8.52404Z" fill="#C5221F"/>
<path d="M9.94043 8.52441V15.0671L9.94811 15.0734V8.53073L9.94043 8.52441Z" fill="#C5221F"/>
<path d="M5 11.4668V22.6591C5.07646 23.8904 6.15673 24.0003 6.15673 24.0003H9.94877L9.94014 15.0671L5 11.4668Z" fill="#4285F4"/>
</svg>
                <span class="visually-hidden">Email</span>
            </a>
        </li>       
    </ul>
</div>


                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End slider section -->

            <!-- Start footer section -->
            <?php
            include("include/footer.php");
            ?>
            <!-- End footer section -->

        </main>

    </div>


    <!-- Scroll top bar -->
    <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round"  stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg></button>
    
   <!-- All Script JS Plugins here  -->
   <script src="assets/js/vendor/popper.js" defer="defer"></script>
   <script src="assets/js/vendor/bootstrap.min.js" defer="defer"></script>
   <script src="assets/js/plugins/swiper-bundle.min.js"></script>
   <script src="assets/js/plugins/isotope.pkgd.min.js"></script>

  <!-- Customscript js -->
  <script src="assets/js/script.js"></script>

  <!-- Dark to light js -->
  <script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
      document.getElementById("light__to--dark")?.classList.add("dark--version");
    } 
    if (localStorage.getItem("theme-color") === "light") {
      document.getElementById("light__to--dark")?.classList.remove("dark--version");
    } 
  </script>
  
</body>

</html>