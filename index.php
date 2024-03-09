<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--- bootstrap --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!--- stylesheet --->
    <link rel="stylesheet" href="css/index_style.css">

    <!--- fonts.google --->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">


    <title>หน้าแรก</title>
</head>
<body>

<!--- navbar --->
<?php
require('inc/navbar.php'); ?>


<!--- header --->
<div class="header-content text-center" id="home">

    <div class="con-text mb-5">
        <h1 class="mb-3">- EasyEat - </h1>
        <p>เสมือนเปิดโลกของความอร่อยในทุกมุมของอาหารไทย <br>ที่สุดความอร่อยที่ไม่ยากเกินไป
            เพราะเราทำให้ทุกรสชาติเป็นเรื่องง่าย!</p>
    </div>

    <div class="con-btn">
        <a href="booking.php" class="btn  btnh1 me-4 mb-3" type="button">จองโต๊ะ</a>
        <a href="register.php" class="btn btnh2 mb-3" type="button">สมัครสมาชิก</a>
    </div>
</div>


<!--- about --->

<div class="section-about" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 con-left mb-4">
                <div class="picbox">
                    <img src="img2/chef2.jpg" alt="chef" class="pic">
                </div>
            </div>

            <div class="col-md-6 con-right text-center">
                <h1 class="text1 text-center">เกี่ยวกับ</h1>
                <h4 class="text2 text-center mb-5" style="color: #FF3E1D; font-style: italic; font-size: 38px;">EasyEat
                    - ทุกรสชาติเป็นเรื่องง่าย!</h4>
                <p>Easyeat
                    ร้านอาหารไทยที่เกิดขึ้นจากความใฝ่ฝันของเจ้าของร้านที่ต้องการนำเสนอประสบการณ์อาหารไทยที่กินง่ายๆ
                    และอร่อยให้แก่ลูกค้า
                    เมนูของเราถูกออกแบบโดยทีมผู้เชี่ยวชาญที่มีประสบการณ์และความสามารถในการผสมผสานรสชาติที่หลากหลายในเมนูอาหารไทย
                    ทุกจานถูกสร้างขึ้นด้วยวัตถุดิบคุณภาพสูงและสดใหม่
                    เพื่อให้คุณได้รับประสบการณ์ทานอาหารที่อร่อยและประทับใจ</p>
                <p>Easyeat มุ่งหวังที่จะเป็นสถานที่ที่คนมาร่วมสังสรรค์รับประทานอาหารที่อร่อย
                    ด้วยบรรยากาศที่เป็นกันเองและบริการที่ใส่ใจ
                    เราหวังว่าลูกค้าจะกลับมาอีกครั้งและแบ่งปันประสบการณ์ที่ดีกับเพื่อนและครอบครัว</p>

            </div>

        </div>
    </div>

</div>


<!--- Type menu --->

<div class="section-typemenu" id="menu">
    <div class="container">
        <div class="topmenu text-center">
            <h1 style="color: white; font-size: 48px;">- ประเภทเมนูอาหาร - </h1>
            <p>ประเภทเมนูอาหารทั้งหมดภายในร้านเรา</p>
        </div>


        <!--- แถวที่ 1 --->
        <div class="row g-4 mb-5 bigmenubox">
            <div class="col-md-4">
                <div class="card h-100 menubox">
                    <img src="img2/food_item9.jpg" class="card-img-top" alt="thai food"/>

                    <div class="card-body">
                        <h5 class="card-title">เมนูกับข้าว</h5>
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 menubox">
                    <img src="img2/food_item6.jpg" class="card-img-top" alt="thai food"/>

                    <div class="card-body">
                        <h5 class="card-title">เมนูแกงไทย</h5>
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 menubox">
                    <img src="img2/food_item12.jpg" class="card-img-top" alt="thai food"/>

                    <div class="card-body">
                        <h5 class="card-title">เมนูอาหารจานเดียว</h5>
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 menubox">
                    <img src="img2/food_item11.jpg" class="card-img-top" alt="thai food"/>

                    <div class="card-body">
                        <h5 class="card-title">เมนูทานเล่น</h5>
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 menubox">
                    <img src="img2/food_item7.jpg" class="card-img-top" alt="thai food"/>

                    <div class="card-body">
                        <h5 class="card-title">เมนูขนมหวาน</h5>
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 menubox">
                    <img src="img2/food_item10.jpg" class="card-img-top" alt="thai food"/>

                    <div class="card-body">
                        <h5 class="card-title">เครื่องดื่ม</h5>
                    </div>

                </div>
            </div>

        </div>

    </div>

</div>
</div>


<!--- top menu --->
<div class="section-menu" id="menu">
    <div class="container">
        <div class="topmenu text-center">
            <h1 style="font-size: 48px;">- เมนูแนะนำ - </h1>
            <p>รายการอาหารที่ทางร้านแนะนำให้คุณลอง!</p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="card con-card">
                    <img src="img2/food_item4.jpg" class="card-img-top" alt="...">

                    <div class="card-body">
                        <div class="text-section">
                            <h3 class="card-title1">Card title</h3>
                            <p class="card-text1">Some quick example text to build on the card's content.</p>
                            <h5 class="text-price">ราคา : 12.00 บาท</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card con-card">
                    <img src="img2/food_item4.jpg" class="card-img-top" alt="...">

                    <div class="card-body">
                        <div class="text-section">
                            <h3 class="card-title1">Card title</h3>
                            <p class="card-text1">Some quick example text to build on the card's content.</p>
                            <h5 class="text-price">ราคา : 12.00 บาท</h5>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-6">
                <div class="card con-card">
                    <img src="img2/food_item4.jpg" class="card-img-top" alt="...">

                    <div class="card-body">
                        <div class="text-section">
                            <h3 class="card-title1">Card title</h3>
                            <p class="card-text1">Some quick example text to build on the card's content.</p>
                            <h5 class="text-price">ราคา : 12.00 บาท</h5>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-6">
                <div class="card con-card">
                    <img src="img2/food_item4.jpg" class="card-img-top" alt="...">

                    <div class="card-body">
                        <div class="text-section">
                            <h3 class="card-title1">Card title</h3>
                            <p class="card-text1">Some quick example text to build on the card's content.</p>
                            <h5 class="text-price">ราคา : 12.00 บาท</h5>
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-md-6">
                <div class="card con-card">
                    <img src="img2/food_item4.jpg" class="card-img-top" alt="...">

                    <div class="card-body">
                        <div class="text-section">
                            <h3 class="card-title1">Card title</h3>
                            <p class="card-text1">Some quick example text to build on the card's content.</p>
                            <h5 class="text-price">ราคา : 12.00 บาท</h5>
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-md-6">
                <div class="card con-card">
                    <img src="img2/food_item4.jpg" class="card-img-top" alt="...">

                    <div class="card-body">
                        <div class="text-section">
                            <h3 class="card-title1">Card title</h3>
                            <p class="card-text1">Some quick example text to build on the card's content.</p>
                            <h5 class="text-price">ราคา : 12.00 บาท</h5>
                        </div>
                    </div>
                </div>

            </div>


        </div>

        <hr class="mt-5 mb-4" width="50%">

    </div>
</div>


<!--- booking table --->

<div class="section-bookingtable" id="booking">
    <div class="container">

        <div class="box-booking">
            <div class="row">
                <div class="col-md-6 con-left2">
                    <div class="picbox">
                        <img src="img2/table1.jpg" alt="chef" class="pic">
                    </div>
                </div>

                <div class="col-md-6 con-right2">
                    <h1 class="text4 mb-2" style="color: #FF3E1D; font-style: italic; font-size: 48px;">
                        จองโต๊ะกับเรา!</h1>
                    <h2 for="" class="text3">ร่วมรับประทานอาหารที่น่าจดจำ!</h2>
                    <p class="mb-5">เพียงคลิกปุ่ม "จองโต๊ะ" ด้านล่างเพื่อดำเนินการต่อ คุณจะถูกนำไปยังหน้าการจอง </p>

                    <div class="con-btn">
                        <a href="booking.php" class="btn btnh1 mb-3" type="button">จองโต๊ะ</a>
                    </div>

                </div>

            </div>
        </div>


    </div>

</div>


<!--- footer --->
<footer class="text-center text-white" style="background-color: #222;">

    <div class="row d-flex justify-content-center" style="margin-right: 15px">


        <div class="col-lg-8 mb-3">
            <hr class="mt-5 mb-4" width="80%">
            <h4 class="text-footer mb-2">- EasyEat -</h4>
            <p class="p-footer">ร้านอาหารไทยที่ต้องการนำเสนอประสบการณ์อาหารไทยที่กินง่ายๆ และอร่อยให้แก่ลูกค้า
                เมนูของเราถูกออกแบบโดยทีมผู้เชี่ยวชาญมากสามารถในการผสมผสานรสชาติที่หลากหลายในเมนูอาหารไทย
                เพื่อให้คุณได้รับประสบการณ์ทานอาหารที่อร่อยและประทับใจ</p>
        </div>
    </div>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">© 2024 Copyright:
        <a class="text-white" href="#">EasyEat</a>
    </div>
</footer>

</body>
</html>