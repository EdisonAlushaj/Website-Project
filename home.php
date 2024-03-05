<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <header>
        <h2>go.arch</h2>

        <p id="number" style="display: flex; justify-content: center; align-items: center; margin-right: 18em;">(+383) 48 800 450</p>
        
        <ul class="nav-ul">
            <li><a href="#">HOME</a></li>
            <li><a href="#">ABOUT US</a></li>
            <li><a href="#">PROJECT</a></li>
            <li><a href="#">BLOG</a></li>
            <li><a href="#">CONTACT</a></li>
        </ul>
    </header>

    <main>
        <!-- <div class="slider">
            <div class="slider-container">
                <div class="slide"><img src="img/R2.jpg" alt=""></div>
                <div class="slide"><img src="img/R7.2.jpg" alt=""></div>
                <div class="slide"><img src="img/unnamed (1).jpg" alt=""></div>
            </div>

            <div class="prev">&#10094;</div>
            <div class="next">&#10095;</div>
        </div> -->

        <div class="cover">
            <div class="slider">    
                <div class="slider-container">
                    <div class="slides">
                        <div class="slide">
                            <img src="img/R7.2.jpg" alt="Image 1">

                            <div class="slide-txt">
                                <p>Dark Bedroom</p>
                                <p>Ipsum cillum quis eu eu culpa. Ullamco consectetur incididunt eiusmod proident ex aliqua fugiat exercitation est.</p>
                            </div>
                        </div>
                        <div class="slide">
                            <img src="img/R2.jpg" alt="Image 2">
                        
                            <div class="slide-txt">
                                <p>Flat 53</p>
                                <p>Ipsum cillum quis eu eu culpa. Ullamco consectetur incididunt eiusmod proident ex aliqua fugiat exercitation est.</p>
                            </div>
                        </div>
                        <div class="slide">
                            <img src="img/unnamed (1).jpg" alt="Image 3">
                        
                            <div class="slide-txt">
                                <p>Flat 53</p>
                                <p>Ipsum cillum quis eu eu culpa. Ullamco consectetur incididunt eiusmod proident ex aliqua fugiat exercitation est.</p>
                            </div>
                        </div>
                    </div>
                
                    <div class="prev">&#10094; PREV</div>
                    <div class="next">NEXT &#10095;</div>
                </div>  
            </div>

            <div class="cover-num">
                <p id="num"></p>
            </div>

            <h1 id="transparent-txt">arch</h1>

            <div class="cover-social">
                <!-- <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul> -->
            </div>
        </div>

        <div class="about-us">
            <div class="about-1">
                <h1>we turn ideas into works of art.</h1>
                <p>For each project we establish relationships with partners who we know will help us create added value for your project. As well as bringing together the public and private sectors, we make sector-overarching links to gather knowledge and to learn from each other. The way we undertake projects is based on permanently applying values that reinforce each other: socio-cultural value, experiental value, building-technical value and economical value.</p>
            </div>

            <div class="about-2">
                <p id="about-title">ABOUT GO.ARCH</p>
    
                <h1>our specialization:</h1>
                <ul>
                    <li><img src="img/icon-architecture.png" alt=""></li>
                    <li><b>ARCHITECTURE</b></li>
                    <li><img src="img/icon-interiors.png" alt=""></li>
                    <li><b>INTERIORS</b></li>
                    <li><img src="img/icon-planing.png" alt=""></li>
                    <li><b>PLANING</b></li>
                </ul>

                <p id="project-title">OUR PROJECTS</p>
            </div>

            <div class="about-3">
                <img src="img/380x370.jpg" style="width: 100%;" alt="">
            </div>
        </div>
    </main>

    <script>
        let currentIndex = 0;
        const slides = document.querySelector('.slides');
        const totalSlides = document.querySelectorAll('.slide').length;

        document.querySelector('.next').addEventListener('click', () => {
            if (currentIndex < totalSlides - 1) {
                currentIndex++;
            } else {
                currentIndex = 0;
            }
            updateSlider();
        });

        document.querySelector('.prev').addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = totalSlides - 1;
            }
            updateSlider();
        });

        function updateSlider() {
            const translateValue = -currentIndex * 100 + '%';
            slides.style.transform = `translateX(${translateValue})`;
        }

        document.getElementById("num").innerHTML = "0" + (currentIndex + 1);
    </script>
</body>
</html>