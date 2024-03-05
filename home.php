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

        <p id="number" style="display: flex; justify-content: center; align-items: center;">(+383) 48 800 450</p>
        
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

        <div class="slider">    
                <div class="slider-container">
                    <div class="slides">
                        <div class="slide"><img src="img/R2.jpg" alt="Image 1"></div>
                        <div class="slide"><img src="img/R7.2.jpg" alt="Image 2"></div>
                        <div class="slide"><img src="img/unnamed (1).jpg" alt="Image 3"></div>
                    </div>
                
                    <div class="prev">&#10094; PREV</div>
                    <div class="next">NEXT &#10095;</div>
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
    </script>
</body>
</html>