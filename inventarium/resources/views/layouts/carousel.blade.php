<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/carousel.css">
</head>
<body>
<section>
    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

            <div class="slide first">
                <img src="{{URL::asset('img/img1.png')}}" alt="img1">
            </div>

            <div class="slide second">
                <img src="{{URL::asset('img/img2.png')}}" alt="img2">
            </div>

            <div class="slide second">
                <img src="{{URL::asset('img/img3.jpg')}}" alt="img3">
            </div>

            <div class="slide second">
                <img src="{{URL::asset('img/img4.jpg')}}" alt="img4">
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>

        </div>

    <div class="manual-navigation">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
    </div>

    </div>
</section>
</body>
</html>