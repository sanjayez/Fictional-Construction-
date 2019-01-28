<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/portfolio.css">
    <title>ZohVar Construction</title>
</head>
<body>
    <div class="wrap">
        <div id="arrow-left" class="arrow">
            
        </div>
        <div id="slider">
            <div class="slide slide1">
                <div class="slide-content">
                    <span>
                        SKYSCRAPERS
                    </span>
                </div>
            </div>

            <div class="slide slide2">
                <div class="slide-content">
                    <span>
                        METROPOLITAN CITIES
                    </span>
                </div>
            </div>

            <div class="slide slide3">
                <div class="slide-content">
                    <span>
                        TRANS-GLOBAL HIGHWAYS
                    </span>
                </div>
            </div>

            <div class="slide slide4">
                <div class="slide-content">
                    <span>
                        SPECTACULAR MALLS
                    </span>
                </div>
            </div>

            <div class="slide slide5">
                <div class="slide-content">
                    <span>
                        STADIUMS
                    </span>
                </div>
            </div>
        </div>
        <div id="arrow-right" class="arrow">
            
        </div>
    </div>

    <script>
        let sliderImages = document.querySelectorAll('.slide'),arrowLeft = document.querySelector('#arrow-left'),
        arrowRight = document.querySelector('#arrow-right'),
        current = 0;
        
        //clear all images
        function reset(){
            for(let i = 0; i < sliderImages.length; i++){
                sliderImages[i].style.display = 'none';
            }
        }
        
        //previous
        function startSlide(){
            reset();
            sliderImages[0].style.display = 'block';
        }

        //next
        function slideRight(){
            reset();
            sliderImages[current + 1].style.display = 'block';
            current++;
        }

        //Right click
        arrowRight.addEventListener('click', function(){
            if(current == sliderImages.length - 1){
                current = -1;
            }
            slideRight();
        });

        function slideLeft(){
            reset();
            sliderImages[current - 1].style.display = 'block';
            current--;
        }

        //Left arrow click
        arrowLeft.addEventListener('click', function(){
            if(current == 0){
                current = sliderImages.length;
            }
            slideLeft();
        });
        startSlide();

    </script>

</body>
</html>