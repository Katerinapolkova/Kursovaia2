<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aiwa</title>
    <link rel="stylesheet" href="css/style.css">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>
<body>
    <article>
        <div class="hg">
            <div class="kaif">
                <div class="kaif__item">
                    <div class="kaif__top">
                        <h2 class="kaif__aiwa">AIWA</h2>
                        <h3 class="kaif__rent">rent a car</h3>
                    </div>
                    <img class="kaif__w" src="image/kaif/w.png" alt="">
                    <img class="kaif__image" src="image/kaif/kaif.png" alt="">
                    <div class="kaif__text">
                        <h2 class="kaif__perception">переворачиваем восприятие</h2>
                        <h3 class="kaif__dybai">Аренда автомобилей класса Люкс в Дубае</h3>
                    </div>
                </div>
                <a href="#car" class="kaif__scroll">
                    <img src="image/kaif/cross.svg" alt="">
                    <h3>scroll</h3>
                </a>
            </div>
        </div>
        <div class="gradient"></div>
    </article>
    <article>
        <div class="car" id="car">
            <img class="car__rolls" id="car__rolls" src="image/kaif/car_rolls.png" width="786" height="672" alt="">
        </div>
    </article>
    <section id="home">
        <div class="bg-home">
            <div class="mobile__car__light" alt=""></div>
            <header>
                <div class="container">
                    <div class="header__inner">
                        <img src="image/logo.png" class="logo__pc" alt="">
                        <img src="image/logo_mobile.svg" class="logo__mobile" alt="">
                        <div class="header__nav">
                            <a href="#rent" class="nav__booking">
                                <span>Забронировать авто</span>
                            </a>
        
                            <div class="group__social">
                                <a href="#" class="nav__social">
                                    <img src="image/icon/telegram.svg" alt="">
                                </a>
                                <a href="#" class="nav__social">
                                    <img src="image/icon/whatsapp.svg" alt="">
                                </a>
                                <a href="#" class="nav__social">
                                    <img src="image/icon/instagram.svg" alt="">
                                </a>
                                <a href="#" class="nav__social">
                                    <img src="image/icon/facebook.svg" alt="">
                                </a>
                            </div>
                            <div class="burger">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- burger-menu -->
            <nav>
                <div class="burger__social">
                    <a href="#" class="nav__social">
                        <img src="image/icon/telegram.svg" alt="">
                    </a>
                    <a href="#" class="nav__social">
                        <img src="image/icon/whatsapp.svg" alt="">
                    </a>
                    <a href="#" class="nav__social">
                        <img src="image/icon/instagram.svg" alt="">
                    </a>
                    <a href="#" class="nav__social">
                        <img src="image/icon/facebook.svg" alt="">
                    </a>
                </div>
                <ul class="main1">
                  <li><a href="#cars">Наши автомобили</a></li>
                  <li><a href="#calc">Калькулятор поездки</a></li>
                  <li><a href="#rent">Форма для заявки на аренду</a></li>
                  <li><a href="#how">Как арендовать автомобиль</a></li>
                  <li><a href="#cond">Условия аренды</a></li>
                  <li><a href="#info">О компании</a></li>
                  <li><a href="#values">Наши ценности</a></li>
                  <li><a href="#advantages">Наши преимущества</a></li>
                  <li><a href="#faq">FAQ</a></li>
                </ul>
              </nav>
            <!-- end burger-menu -->

            <div class="main">
                <div class="main__cars__mobile">
                    <img src="image/kaif/car_rolls.png" alt="">
                </div>
                <div class="main__logo__position">
                    <h1 class="main__logo">
                        <span class="anim">Check</span>  
                        <span class="logo2">Rent</span>  
                        <span class="logo3">Aiwa</span>
                    </h1>
                    <div class="main__line line1"></div>
                </div>
                <div class="container">
                    <div class="main__btn">
                        <a href="#cars">посмотреть автопарк</a>
                        <a href="#calc">калькулятор поездки</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cars" id="cars">
        <img class="effect__sand" src="image/effect/effect_sand.png" alt="">
        <div class="container">
            <h2 class="cars__our">Наши автомобили</h2>
            <div class="cars__swipe">
                <img src="image/icon/swipe.svg" alt="">
                <span>листайте</span>
            </div>
            <!-- modal -->
            <div id="openModal1" class="modal">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <a href="#close" title="Close" class="close">×</a>
                    </div>
                        <div class="container_">
                            <div class="mySlides">
                                <img src="image/cars/cullinan/1.png" style="width:100%">
                            </div>
                            <div class="mySlides">
                                <img src="image/cars/cullinan/2.png" style="width:100%">
                            </div>
                            <div class="mySlides">
                                <img src="image/cars/cullinan/3.png" style="width:100%">
                            </div>
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                            <div class="caption-container">
                                <p id="caption"></p>
                            </div>
                            <div class="row">
                                <div class="column">
                                    <img class="demo cursor" src="image/cars/cullinan/1.png" style="width:100%" onclick="currentSlide(1)" >
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="image/cars/cullinan/2.png" style="width:100%" onclick="currentSlide(2)" >
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="image/cars/cullinan/3.png" style="width:100%" onclick="currentSlide(3)">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
              <div id="openModal2" class="modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <a href="#close" title="Close" class="close">×</a>
                    </div>
                    <!-- <div class="modal__inner__image">
                        <img src="image/cars/dawn/1.png"  alt="">
                        <img src="image/cars/dawn/1.png"  alt="">
                        <img src="image/cars/dawn/3.png"  alt="">
                    </div> -->

                    <div class="container_">
                        <div class="mySlides2">
                            <img src="image/cars/dawn/1.png" style="width:100%">
                        </div>
                        <div class="mySlides2">
                            <img src="image/cars/dawn/2.png" style="width:100%">
                        </div>
                        <div class="mySlides2">
                            <img src="image/cars/dawn/3.png" style="width:100%">
                        </div>
                        <a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides2(1)">&#10095;</a>
                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>
                        <div class="row">
                            <div class="column">
                                <img class="demo cursor" src="image/cars/dawn/1.png" style="width:100%" onclick="currentSlide2(1)" >
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="image/cars/dawn/2.png" style="width:100%" onclick="currentSlide2(2)" >
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="image/cars/dawn/3.png" style="width:100%" onclick="currentSlide2(3)">
                            </div>
                        </div>
                    </div>

                  </div>
                </div>
              </div>
              <div id="openModal3" class="modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <a href="#close" title="Close" class="close">×</a>
                    </div>
                    <!-- <div class="modal__inner__image">
                        <img src="image/cars/bentayga/1.png"  alt="">
                        <img src="image/cars/bentayga/2.png"  alt="">
                        <img src="image/cars/bentayga/3.png"  alt="">
                    </div> -->
                    <div class="container_">
                        <div class="mySlides3">
                            <img src="image/cars/bentayga/1.png" style="width:100%">
                        </div>
                        <div class="mySlides3">
                            <img src="image/cars/bentayga/2.png" style="width:100%">
                        </div>
                        <div class="mySlides3">
                            <img src="image/cars/bentayga/3.png" style="width:100%">
                        </div>
                        <a class="prev" onclick="plusSlides3(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides3(1)">&#10095;</a>
                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>
                        <div class="row">
                            <div class="column">
                                <img class="demo cursor" src="image/cars/bentayga/1.png" style="width:100%" onclick="currentSlide3(1)" >
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="image/cars/bentayga/2.png" style="width:100%" onclick="currentSlide3(2)" >
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="image/cars/bentayga/3.png" style="width:100%" onclick="currentSlide3(3)">
                            </div>
                        </div>
                    </div>

                  </div>
                </div>
              </div>
              <div id="openModal4" class="modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <a href="#close" title="Close" class="close">×</a>
                    </div>
                    <!-- <div class="modal__inner__image">
                        <img src="image/cars/f8/1.png"  alt="">
                        <img src="image/cars/f8/2.png"  alt="">
                        <img src="image/cars/f8/3.png"  alt="">
                    </div> -->

                    <div class="container_">
                        <div class="mySlides4">
                            <img src="image/cars/f8/1.png" style="width:100%">
                        </div>
                        <div class="mySlides4">
                            <img src="image/cars/f8/2.png" style="width:100%">
                        </div>
                        <div class="mySlides4">
                            <img src="image/cars/f8/3.png" style="width:100%">
                        </div>
                        <a class="prev" onclick="plusSlides4(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides4(1)">&#10095;</a>
                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>
                        <div class="row">
                            <div class="column">
                                <img class="demo cursor" src="image/cars/f8/1.png" style="width:100%" onclick="currentSlide4(1)" >
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="image/cars/f8/2.png" style="width:100%" onclick="currentSlide4(2)" >
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="image/cars/f8/3.png" style="width:100%" onclick="currentSlide4(3)">
                            </div>
                        </div>
                    </div>

                  </div>
                </div>
              </div>
              <div id="openModal5" class="modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <a href="#close" title="Close" class="close">×</a>
                    </div>
                    <!-- <div class="modal__inner__image">
                        <img src="image/cars/portofino/1.png"  alt="">
                        <img src="image/cars/portofino/2.png"  alt="">
                        <img src="image/cars/portofino/3.png"  alt="">
                    </div> -->

                    <div class="container_">
                        <div class="mySlides5">
                            <img src="image/cars/portofino/1.png" style="width:100%">
                        </div>
                        <div class="mySlides5">
                            <img src="image/cars/portofino/2.png" style="width:100%">
                        </div>
                        <div class="mySlides5">
                            <img src="image/cars/portofino/3.png" style="width:100%">
                        </div>
                        <a class="prev" onclick="plusSlides5(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides5(1)">&#10095;</a>
                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>
                        <div class="row">
                            <div class="column">
                                <img class="demo cursor" src="image/cars/portofino/1.png" style="width:100%" onclick="currentSlide5(1)" >
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="image/cars/portofino/2.png" style="width:100%" onclick="currentSlide5(2)" >
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="image/cars/portofino/3.png" style="width:100%" onclick="currentSlide5(3)">
                            </div>
                        </div>
                    </div>

                  </div>
                </div>
              </div>
              <div id="openModal6" class="modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <a href="#close" title="Close" class="close">×</a>
                    </div>
                    <!-- <div class="modal__inner__image">
                        <img src="image/cars/urus/1.png"  alt="">
                        <img src="image/cars/urus/2.png"  alt="">
                        <img src="image/cars/urus/3.png"  alt="">
                    </div> -->

                    <div class="container_">
                        <div class="mySlides6">
                            <img src="image/cars/urus/1.png" style="width:100%">
                        </div>
                        <div class="mySlides6">
                            <img src="image/cars/urus/2.png" style="width:100%">
                        </div>
                        <div class="mySlides6">
                            <img src="image/cars/urus/3.png" style="width:100%">
                        </div>
                        <a class="prev" onclick="plusSlides6(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides6(1)">&#10095;</a>
                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>
                        <div class="row">
                            <div class="column">
                                <img class="demo cursor" src="image/cars/urus/1.png" style="width:100%" onclick="currentSlide6(1)" >
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="image/cars/urus/2.png" style="width:100%" onclick="currentSlide6(2)" >
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="image/cars/urus/3.png" style="width:100%" onclick="currentSlide6(3)">
                            </div>
                        </div>
                    </div>

                  </div>
                </div>
              </div>
              <div id="openModal7" class="modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <a href="#close" title="Close" class="close">×</a>
                    </div>
                    <!-- <div class="modal__inner__image">
                        <img src="image/cars/huracan1/1.png"  alt="">
                        <img src="image/cars/huracan1/2.png"  alt="">
                        <img src="image/cars/huracan1/3.png"  alt="">
                    </div> -->

                    <div class="container_">
                        <div class="mySlides7">
                            <img src="image/cars/huracan1/1.png" style="width:100%">
                        </div>
                        <div class="mySlides7">
                            <img src="image/cars/huracan1/2.png" style="width:100%">
                        </div>
                        <div class="mySlides7">
                            <img src="image/cars/huracan1/3.png" style="width:100%">
                        </div>
                        <a class="prev" onclick="plusSlides7(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides7(1)">&#10095;</a>
                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>
                        <div class="row">
                            <div class="column">
                                <img class="demo cursor" src="image/cars/huracan1/1.png" style="width:100%" onclick="currentSlide7(1)" >
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="image/cars/huracan1/2.png" style="width:100%" onclick="currentSlide7(2)" >
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="image/cars/huracan1/3.png" style="width:100%" onclick="currentSlide7(3)">
                            </div>
                        </div>
                    </div>

                  </div>
                </div>
              </div>
              <div id="openModal8" class="modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <a href="#close" title="Close" class="close">×</a>
                    </div>
                    <!-- <div class="modal__inner__image">
                        <img src="image/cars/huracan2/1.png"  alt="">
                        <img src="image/cars/huracan2/2.png"  alt="">
                        <img src="image/cars/huracan2/3.png"  alt="">
                    </div> -->

                    <div class="container_">
                        <div class="mySlides8">
                            <img src="image/cars/huracan2/1.png" style="width:100%">
                        </div>
                        <div class="mySlides8">
                            <img src="image/cars/huracan2/2.png" style="width:100%">
                        </div>
                        <div class="mySlides8">
                            <img src="image/cars/huracan2/3.png" style="width:100%">
                        </div>
                        <a class="prev" onclick="plusSlides8(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides8(1)">&#10095;</a>
                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>
                        <div class="row">
                            <div class="column">
                                <img class="demo cursor" src="image/cars/huracan2/1.png" style="width:100%" onclick="currentSlide8(1)" >
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="image/cars/huracan2/2.png" style="width:100%" onclick="currentSlide8(2)" >
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="image/cars/huracan2/3.png" style="width:100%" onclick="currentSlide8(3)">
                            </div>
                        </div>
                    </div>

                  </div>
                </div>
              </div>
              <div id="openModal9" class="modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <a href="#close" title="Close" class="close">×</a>
                    </div>
                    <!-- <div class="modal__inner__image">
                        <img src="image/cars/g63/1.png"  alt="">
                        <img src="image/cars/g63/2.png"  alt="">
                        <img src="image/cars/g63/3.png"  alt="">
                    </div> -->

                    <div class="container_">
                        <div class="mySlides9">
                            <img src="image/cars/g63/1.png" style="width:100%">
                        </div>
                        <div class="mySlides9">
                            <img src="image/cars/g63/2.png" style="width:100%">
                        </div>
                        <div class="mySlides9">
                            <img src="image/cars/g63/3.png" style="width:100%">
                        </div>
                        <a class="prev" onclick="plusSlides9(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides9(1)">&#10095;</a>
                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>
                        <div class="row">
                            <div class="column">
                                <img class="demo cursor" src="image/cars/g63/1.png" style="width:100%" onclick="currentSlide9(1)" >
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="image/cars/g63/2.png" style="width:100%" onclick="currentSlide9(2)" >
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="image/cars/g63/3.png" style="width:100%" onclick="currentSlide9(3)">
                            </div>
                        </div>
                    </div>

                  </div>
                </div>
              </div>
              <div id="openModal10" class="modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <a href="#close" title="Close" class="close">×</a>
                    </div>
                    <!-- <div class="modal__inner__image">
                        <img src="image/cars/911/1.png"  alt="">
                        <img src="image/cars/911/2.png"  alt="">
                        <img src="image/cars/911/3.png"  alt="">
                    </div> -->

                    <div class="container_">
                        <div class="mySlides10">
                            <img src="image/cars/911/1.png" style="width:100%">
                        </div>
                        <div class="mySlides10">
                            <img src="image/cars/911/2.png" style="width:100%">
                        </div>
                        <div class="mySlides10">
                            <img src="image/cars/911/3.png" style="width:100%">
                        </div>
                        <a class="prev" onclick="plusSlides10(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides10(1)">&#10095;</a>
                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>
                        <div class="row">
                            <div class="column">
                                <img class="demo cursor" src="image/cars/911/1.png" style="width:100%" onclick="currentSlide10(1)" >
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="image/cars/911/2.png" style="width:100%" onclick="currentSlide10(2)" >
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="image/cars/911/3.png" style="width:100%" onclick="currentSlide10(3)">
                            </div>
                        </div>
                    </div>

                  </div>
                </div>
              </div>
              <div id="openModal11" class="modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <a href="#close" title="Close" class="close">×</a>
                    </div>
                    <!-- <div class="modal__inner__image">
                        <img src="image/cars/718/1.png"  alt="">
                        <img src="image/cars/718/2.png"  alt="">
                        <img src="image/cars/718/3.png"  alt="">
                    </div> -->

                    <div class="container_">
                        <div class="mySlides11">
                            <img src="image/cars/718/1.png" style="width:100%">
                        </div>
                        <div class="mySlides11">
                            <img src="image/cars/718/2.png" style="width:100%">
                        </div>
                        <div class="mySlides11">
                            <img src="image/cars/718/3.png" style="width:100%">
                        </div>
                        <a class="prev" onclick="plusSlides11(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides11(1)">&#10095;</a>
                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>
                        <div class="row">
                            <div class="column">
                                <img class="demo cursor" src="image/cars/718/1.png" style="width:100%" onclick="currentSlide11(1)" >
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="image/cars/718/2.png" style="width:100%" onclick="currentSlide11(2)" >
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="image/cars/718/3.png" style="width:100%" onclick="currentSlide11(3)">
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end modal -->
            <div class="cars__inner">
                <div class="cars__item" id="item1">
                    <div class="cars__item__top">
                        <h3 class="item__name">Rolls Royce Cullinan</h3>
                        <img class="item__image" src="image/cars/Rolls-Royce-Cullinan-1-transformed.png" alt="">
                        <div class="item__back">
                            <div class="item__price">
                                <div class="price__day">
                                    <h4>Цена за 1 сутки</h4>
                                    <h3>от 4500 USD</h3>
                                </div>
                                <div class="price__deposit">
                                    <h4>Депозид</h4>
                                    <h3>5000 AED</h3>
                                </div>
                            </div>
                            <div class="item__btn">
                                <button>Забронировать</button>
                                <button>Условия аренды</button>
                            </div>
                        </div>
                    </div>
                    <div class="cars__image__add cars__add__open" style="display: none; background: #000; border-radius: 20px; padding-bottom: 10px;">
                        <div class="cars__inner__image">
                            <img src="image/cars/cullinan/1.png"  alt="">
                            <img src="image/cars/cullinan/2.png"  alt="">
                            <img src="image/cars/cullinan/3.png"  alt="">
                        </div>
                        <div class="add__image__btn">
                            <!-- <button>Смотреть фото</button> -->
                            <a href="#openModal1">Смотреть фото</a>
                        </div>
                        <div class="cars__text">
                            <p>Хотите путешествовать в роскошных условиях, но при этом в автомобиле вам важна практичность, функциональность и проходимость? Тогда выбирайте Rolls Royce Cullinan. <br>
                            Это автомобиль с внушительными размерами, классическим эффектным дизайном и характеристиками внедорожника с роскошным салоном, который сочетает в себе передовые технологии и традиционный английский стиль. Комфорт и эстетика вам обеспечены.<br> 
                            С Rolls Royce Cullinan вы можете сделать перерыв на пикник в любом месте. Багажник с двухстворчатой дверью оснащен выдвигающейся банкеткой с двумя стульями и столиком. Ваш отдых будет комфортным и романтичным. </p>
                        </div>
                        <h3 class="specifications__logo">технические характеристики</h3>
                        <table class="cars__specifications">
                            <tbody>
                                <tr>
                                    <td>Количество мест:</td>
                                    <td>7</td>
                                </tr>
                                <tr>
                                    <td>Объём двигателя:</td>
                                    <td>6,7 л (6700 СС)</td>
                                </tr>
                                <tr>
                                    <td>Максимальная скорость:</td>
                                    <td>250 км/ч</td>
                                </tr>
                                <tr>
                                    <td>Трансмиссия:</td>
                                    <td>Автомат</td>
                                </tr>
                                <tr>
                                    <td>Разгон до 100 км/ч:</td>
                                    <td>6,7 сек</td>
                                </tr>
                                <tr>
                                    <td>Мощность:</td>
                                    <td>563 л.с.</td>
                                </tr>
                                <tr>
                                    <td>Тип двигателя:</td>
                                    <td>V12</td>
                                </tr>
                                <tr>
                                    <td>Привод:</td>
                                    <td>4WD</td>
                                </tr>
                                <tr>
                                    <td>Топливо:</td>
                                    <td>бензин</td>
                                </tr>
                            </tbody>
                        </table>
                        <h3 class="specifications__logo">условия аренды</h3>
                        <table class="cars__specifications">
                            <tbody>
                                <tr>
                                    <td>Возрастное ограничение:</td>
                                    <td>23+</td>
                                </tr>
                                <tr>
                                    <td>Стаж вождения:</td>
                                    <td>не менее 1 года</td>
                                </tr>
                                <tr>
                                    <td>Пробег за сутки:</td>
                                    <td>250 км</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="#item1" class="item__circle cars__btn">
                        <h4 class="cars__open">подробнее</h4>
                        <h4 class="cars__close" style="display: none;">скрыть</h4>
                        <img class="cars__image" src="image/icon/cross.svg" alt="">
                    </a>
                </div>
                <div class="cars__item" id="item2">
                    <div class="cars__item__top">
                        <h3 class="item__name">Rolls Royce Dawn</h3>
                        <img class="item__image" src="image/cars/Rolls-Royce-Cullinan-1-FW-DAloFK-transformed.png" alt="">
                        <div class="item__back">
                            <div class="item__price">
                                <div class="price__day">
                                    <h4>Цена за 1 сутки</h4>
                                    <h3>от 3600 USD</h3>
                                </div>
                                <div class="price__deposit">
                                    <h4>Депозид</h4>
                                    <h3>5000 AED</h3>
                                </div>
                            </div>
                            <div class="item__btn">
                                <button>Забронировать</button>
                                <button>Условия аренды</button>
                            </div>
                        </div>
                    </div>
                    <div class="cars__image__add cars__add__open" style="display: none; background: #000; border-radius: 20px; padding-bottom: 10px;">
                        <div class="cars__inner__image">
                            <img src="image/cars/dawn/1.png"  alt="">
                            <img src="image/cars/dawn/2.png"  alt="">
                            <img src="image/cars/dawn/3.png"  alt="">
                        </div>
                        <div class="add__image__btn">
                            <!-- <button>Смотреть фото</button> -->
                            <a href="#openModal2">Смотреть фото</a>
                        </div>
                        <div class="cars__text">
                            <p>Если вы являетесь приверженцем утонченного стиля и элегантности, то вам понравится путешествовать в кабриолете Rolls Royce Dawn. Каждая поездка на нем дарит неповторимые эмоции от комфорта, функциональности и английской эстетики. <br>
                                Он отлично подчеркнет ваш статус. <br>
                                Всего 22 секунды нужно, чтобы открыть салон и насладиться приятным бризом на дорогах Дубая. Так быстро складывается откидная крыша Rolls Royce Dawn. Но даже с открытым верхом вы будете чувствовать себя максимально комфортно за счет хорошей шумоизоляции.<br>
                                Любителям скорости понравится стабильность автомобиля на дороге. </p>
                        </div>
                        <h3 class="specifications__logo">технические характеристики</h3>
                        <table class="cars__specifications">
                            <tbody>
                                <tr>
                                    <td>Количество мест:</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Объём двигателя:</td>
                                    <td>6,6 л (6600 СС)</td>
                                </tr>
                                <tr>
                                    <td>Максимальная скорость:</td>
                                    <td>250 км/ч</td>
                                </tr>
                                <tr>
                                    <td>Трансмиссия:</td>
                                    <td>Автомат</td>
                                </tr>
                                <tr>
                                    <td>Разгон до 100 км/ч:</td>
                                    <td>5 сек</td>
                                </tr>
                                <tr>
                                    <td>Мощность:</td>
                                    <td>563 л.с.</td>
                                </tr>
                                <tr>
                                    <td>Тип двигателя:</td>
                                    <td>V12</td>
                                </tr>
                                <tr>
                                    <td>Привод:</td>
                                    <td>2WD</td>
                                </tr>
                                <tr>
                                    <td>Топливо:</td>
                                    <td>бензин</td>
                                </tr>
                            </tbody>
                        </table>
                        <h3 class="specifications__logo">условия аренды</h3>
                        <table class="cars__specifications">
                            <tbody>
                                <tr>
                                    <td>Возрастное ограничение:</td>
                                    <td>23+</td>
                                </tr>
                                <tr>
                                    <td>Стаж вождения:</td>
                                    <td>не менее 1 года</td>
                                </tr>
                                <tr>
                                    <td>Пробег за сутки:</td>
                                    <td>250 км</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="#item2" class="item__circle cars__btn">
                        <h4 class="cars__open">подробнее</h4>
                        <h4 class="cars__close" style="display: none;">скрыть</h4>
                        <img class="cars__image" src="image/icon/cross.svg" alt="">
                    </a>
                </div>
                <div class="cars__item" id="item3">
                    <div class="cars__item__top">
                        <h3 class="item__name">Bentley Bentayga</h3>
                        <img class="item__image" src="image/cars/Rolls-Royce-Cullinan-1-(1)-transformed.png" alt="">
                        <div class="item__back">
                            <div class="item__price">
                                <div class="price__day">
                                    <h4>Цена за 1 сутки</h4>
                                    <h3>от 4500 USD</h3>
                                </div>
                                <div class="price__deposit">
                                    <h4>Депозид</h4>
                                    <h3>5000 AED</h3>
                                </div>
                            </div>
                            <div class="item__btn">
                                <button>Забронировать</button>
                                <button>Условия аренды</button>
                            </div>
                        </div>
                    </div>
                    <div class="cars__image__add cars__add__open" style="display: none; background: #000; border-radius: 20px; padding-bottom: 10px;">
                        <div class="cars__inner__image">
                            <img src="image/cars/bentayga/1.png"  alt="">
                            <img src="image/cars/bentayga/2.png"  alt="">
                            <img src="image/cars/bentayga/3.png"  alt="">
                        </div>
                        <div class="add__image__btn">
                            <!-- <button>Смотреть фото</button> -->
                            <a href="#openModal3">Смотреть фото</a>
                        </div>
                        <div class="cars__text">
                            <p>Получите совершенно новый опыт езды на автомобиле с улучшенными внедорожными характеристиками. Он оснащен мощным двигателем и способен развивать высокую скорость, сохраняя устойчивость, маневренность и управляемость. <br>
                            Bentley Bentayga - поистине роскошный внедорожник, который задает новые стандарты комфорта. <br>
                            Пространство внутри Bentley Bentayga продумано до мелочей. А набор технологичных и интуитивно понятных решений позволяет чувствовать себя уверенно и непринужденно в любых дорожных условиях. Это особенно актуально при путешествиях в незнакомом городе. <br>
                            Bentley Bentayga - это роскошь, мощность и динамика в одном лице. </p>
                        </div>
                        <h3 class="specifications__logo">технические характеристики</h3>
                        <table class="cars__specifications">
                            <tbody>
                                <tr>
                                    <td>Количество мест:</td>
                                    <td>7</td>
                                </tr>
                                <tr>
                                    <td>Объём двигателя:</td>
                                    <td>4 л</td>
                                </tr>
                                <tr>
                                    <td>Максимальная скорость:</td>
                                    <td>290 км/ч</td>
                                </tr>
                                <tr>
                                    <td>Трансмиссия:</td>
                                    <td>Автомат</td>
                                </tr>
                                <tr>
                                    <td>Разгон до 100 км/ч:</td>
                                    <td>4,4 сек</td>
                                </tr>
                                <tr>
                                    <td>Мощность:</td>
                                    <td>542 л.с.</td>
                                </tr>
                                <tr>
                                    <td>Тип двигателя:</td>
                                    <td>V8</td>
                                </tr>
                                <tr>
                                    <td>Привод:</td>
                                    <td>4WD</td>
                                </tr>
                                <tr>
                                    <td>Топливо:</td>
                                    <td>бензин</td>
                                </tr>
                            </tbody>
                        </table>
                        <h3 class="specifications__logo">условия аренды</h3>
                        <table class="cars__specifications">
                            <tbody>
                                <tr>
                                    <td>Возрастное ограничение:</td>
                                    <td>23+</td>
                                </tr>
                                <tr>
                                    <td>Стаж вождения:</td>
                                    <td>не менее 1 года</td>
                                </tr>
                                <tr>
                                    <td>Пробег за сутки:</td>
                                    <td>250 км</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="#item3" class="item__circle cars__btn">
                        <h4 class="cars__open">подробнее</h4>
                        <h4 class="cars__close" style="display: none;">скрыть</h4>
                        <img class="cars__image" src="image/icon/cross.svg" alt="">
                    </a>
                </div>
                <div class="cars__item" id="item4">
                    <div class="cars__item__top">
                        <h3 class="item__name">Ferrari F8</h3>
                        <img class="item__image" src="image/cars/Rolls-Royce-Cullinan-1-(2)-transformed.png" alt="">
                        <div class="item__back">
                            <div class="item__price">
                                <div class="price__day">
                                    <h4>Цена за 1 сутки</h4>
                                    <h3>от 4000 USD</h3>
                                </div>
                                <div class="price__deposit">
                                    <h4>Депозид</h4>
                                    <h3>5000 AED</h3>
                                </div>
                            </div>
                            <div class="item__btn">
                                <button>Забронировать</button>
                                <button>Условия аренды</button>
                            </div>
                        </div>
                    </div>
                    <div class="cars__image__add cars__add__open" style="display: none; background: #000; border-radius: 20px; padding-bottom: 10px;">
                        <div class="cars__inner__image">
                            <img src="image/cars/f8/1.png"  alt="">
                            <img src="image/cars/f8/2.png"  alt="">
                            <img src="image/cars/f8/3.png"  alt="">
                        </div>
                        <div class="add__image__btn">
                            <!-- <button>Смотреть фото</button> -->
                            <a href="#openModal4">Смотреть фото</a>
                        </div>
                        <div class="cars__text">
                            <p>Выбор для самых искушенных гонщиков. Самый мощный и быстрый автомобиль в семействе Ferrari. Трижды обладатель награды “Лучший двигатель года”. <br>
                            Этот спорткар порадует вас не только своими скоростными качествами, но и продуманными системами помощи при торможении, разгоне, заносах. Благодаря ним вы будете уверенно чувствовать себя, даже если никогда не сидели за рулем спорткара.<br> 
                            Классический узнаваемый дизайн Ferrari выделит вас на дороге. <br>
                            Почувствуйте легкость управления, мощь и азарт скорости вместе с Ferrari F8.</p>
                        </div>
                        <h3 class="specifications__logo">технические характеристики</h3>
                        <table class="cars__specifications">
                            <tbody>
                                <tr>
                                    <td>Количество мест:</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Объём двигателя:</td>
                                    <td>3,9 л (3900 СС)</td>
                                </tr>
                                <tr>
                                    <td>Максимальная скорость:</td>
                                    <td>340 км/ч</td>
                                </tr>
                                <tr>
                                    <td>Трансмиссия:</td>
                                    <td>Автомат</td>
                                </tr>
                                <tr>
                                    <td>Разгон до 100 км/ч:</td>
                                    <td>2,9 сек</td>
                                </tr>
                                <tr>
                                    <td>Мощность:</td>
                                    <td>410 л.с.</td>
                                </tr>
                                <tr>
                                    <td>Тип двигателя:</td>
                                    <td>V8</td>
                                </tr>
                                <tr>
                                    <td>Привод:</td>
                                    <td>2WD</td>
                                </tr>
                                <tr>
                                    <td>Топливо:</td>
                                    <td>бензин</td>
                                </tr>
                            </tbody>
                        </table>
                        <h3 class="specifications__logo">условия аренды</h3>
                        <table class="cars__specifications">
                            <tbody>
                                <tr>
                                    <td>Возрастное ограничение:</td>
                                    <td>23+</td>
                                </tr>
                                <tr>
                                    <td>Стаж вождения:</td>
                                    <td>не менее 1 года</td>
                                </tr>
                                <tr>
                                    <td>Пробег за сутки:</td>
                                    <td>250 км</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="#item4" class="item__circle cars__btn">
                        <h4 class="cars__open">подробнее</h4>
                        <h4 class="cars__close" style="display: none;">скрыть</h4>
                        <img class="cars__image" src="image/icon/cross.svg" alt="">
                    </a>
                </div>
                <div class="cars__item" id="item5">
                    <div class="cars__item__top">
                        <h3 class="item__name">Ferrari Portofino</h3>
                        <img class="item__image" src="image/cars/Rolls-Royce-Cullinan-1-(3)-transformed.png" alt="">
                        <div class="item__back">
                            <div class="item__price">
                                <div class="price__day">
                                    <h4>Цена за 1 сутки</h4>
                                    <h3>от 3600 USD</h3>
                                </div>
                                <div class="price__deposit">
                                    <h4>Депозид</h4>
                                    <h3>5000 AED</h3>
                                </div>
                            </div>
                            <div class="item__btn">
                                <button>Забронировать</button>
                                <button>Условия аренды</button>
                            </div>
                        </div>
                    </div>
                    <div class="cars__image__add cars__add__open" style="display: none; background: #000; border-radius: 20px; padding-bottom: 10px;">
                        <div class="cars__inner__image">
                            <img src="image/cars/portofino/1.png"  alt="">
                            <img src="image/cars/portofino/2.png"  alt="">
                            <img src="image/cars/portofino/3.png"  alt="">
                        </div>
                        <div class="add__image__btn">
                            <!-- <button>Смотреть фото</button> -->
                            <a href="#openModal5">Смотреть фото</a>
                        </div>
                        <div class="cars__text">
                            <p>Автомобиль класса Gran Turismo не оставит равнодушными ценителей скорости, комфорта и функциональности. <br>
                                Ferrari Portofino  - самый мощный открытый автомобиль в модельном ряде Ferrari. Его назвали в честь одной из деревушек в Италии. Он подходит как для повседневных поездок, так и для легких живописных прогулок, которыми вы можете насладиться откинув верх.<br>
                                Внушительный объем багажного отделения позволит вам совершать длительные поездки, имея при себе все необходимое. При этом чувствовать легкость и комфорт в просторном салоне. </p>
                        </div>
                        <h3 class="specifications__logo">технические характеристики</h3>
                        <table class="cars__specifications">
                            <tbody>
                                <tr>
                                    <td>Количество мест:</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Объём двигателя:</td>
                                    <td>3,9 л (3900 СС)</td>
                                </tr>
                                <tr>
                                    <td>Максимальная скорость:</td>
                                    <td>320 км/ч</td>
                                </tr>
                                <tr>
                                    <td>Трансмиссия:</td>
                                    <td>Автомат</td>
                                </tr>
                                <tr>
                                    <td>Разгон до 100 км/ч:</td>
                                    <td>3,5 сек</td>
                                </tr>
                                <tr>
                                    <td>Мощность:</td>
                                    <td>612 л.с.</td>
                                </tr>
                                <tr>
                                    <td>Тип двигателя:</td>
                                    <td>V8</td>
                                </tr>
                                <tr>
                                    <td>Привод:</td>
                                    <td>2WD</td>
                                </tr>
                                <tr>
                                    <td>Топливо:</td>
                                    <td>бензин</td>
                                </tr>
                            </tbody>
                        </table>
                        <h3 class="specifications__logo">условия аренды</h3>
                        <table class="cars__specifications">
                            <tbody>
                                <tr>
                                    <td>Возрастное ограничение:</td>
                                    <td>23+</td>
                                </tr>
                                <tr>
                                    <td>Стаж вождения:</td>
                                    <td>не менее 1 года</td>
                                </tr>
                                <tr>
                                    <td>Пробег за сутки:</td>
                                    <td>250 км</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="#item5" class="item__circle cars__btn">
                        <h4 class="cars__open">подробнее</h4>
                        <h4 class="cars__close" style="display: none;">скрыть</h4>
                        <img class="cars__image" src="image/icon/cross.svg" alt="">
                    </a>
                </div>
                <div class="cars__item" id="item6">
                    <div class="cars__item__top">
                        <h3 class="item__name">Lamborghini URUS</h3>
                        <img class="item__image" src="image/cars/Rolls-Royce-Cullinan-1-(4)-transformed.png" alt="">
                        <div class="item__back">
                            <div class="item__price">
                                <div class="price__day">
                                    <h4>Цена за 1 сутки</h4>
                                    <h3>от 4500 USD</h3>
                                </div>
                                <div class="price__deposit">
                                    <h4>Депозид</h4>
                                    <h3>5000 AED</h3>
                                </div>
                            </div>
                            <div class="item__btn">
                                <button>Забронировать</button>
                                <button>Условия аренды</button>
                            </div>
                        </div>
                    </div>
                    <div class="cars__image__add cars__add__open" style="display: none; background: #000; border-radius: 20px; padding-bottom: 10px;">
                        <div class="cars__inner__image">
                            <img src="image/cars/urus/1.png"  alt="">
                            <img src="image/cars/urus/2.png"  alt="">
                            <img src="image/cars/urus/3.png"  alt="">
                        </div>
                        <div class="add__image__btn">
                            <!-- <button>Смотреть фото</button> -->
                            <a href="#openModal6">Смотреть фото</a>
                        </div>
                        <div class="cars__text">
                            <p>С Lamborghini Urus вы сможете покорить любые маршруты. Это первый в мире спортивный кроссовер, который обладает всеми преимуществами внедорожника и скоростного автомобиля. <br>
                                Если вам нужен универсальный автомобиль, то это точно будет Lamborghini Urus.<br>
                                Роскошный итальянский дизайн не оставит равнодушными самых отъявленных ценителей стиля и красоты. <br>
                                Максимальный комфорт в процессе вождения достигается оснащением Lamborghini Urus высокотехнологичными опциями. Вам будет легко и приятно за рулем этого автомобиля.</p>
                        </div>
                        <h3 class="specifications__logo">технические характеристики</h3>
                        <table class="cars__specifications">
                            <tbody>
                                <tr>
                                    <td>Количество мест:</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Объём двигателя:</td>
                                    <td>4 л (4000 СС)</td>
                                </tr>
                                <tr>
                                    <td>Максимальная скорость:</td>
                                    <td>305 км/ч</td>
                                </tr>
                                <tr>
                                    <td>Трансмиссия:</td>
                                    <td>Автомат</td>
                                </tr>
                                <tr>
                                    <td>Разгон до 100 км/ч:</td>
                                    <td>3,6 сек</td>
                                </tr>
                                <tr>
                                    <td>Мощность:</td>
                                    <td>641 л.с.</td>
                                </tr>
                                <tr>
                                    <td>Тип двигателя:</td>
                                    <td>V8</td>
                                </tr>
                                <tr>
                                    <td>Привод:</td>
                                    <td>4WD</td>
                                </tr>
                                <tr>
                                    <td>Топливо:</td>
                                    <td>бензин</td>
                                </tr>
                            </tbody>
                        </table>
                        <h3 class="specifications__logo">условия аренды</h3>
                        <table class="cars__specifications">
                            <tbody>
                                <tr>
                                    <td>Возрастное ограничение:</td>
                                    <td>23+</td>
                                </tr>
                                <tr>
                                    <td>Стаж вождения:</td>
                                    <td>не менее 1 года</td>
                                </tr>
                                <tr>
                                    <td>Пробег за сутки:</td>
                                    <td>250 км</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="#item6" class="item__circle cars__btn">
                        <h4 class="cars__open">подробнее</h4>
                        <h4 class="cars__close" style="display: none;">скрыть</h4>
                        <img class="cars__image" src="image/icon/cross.svg" alt="">
                    </a>
                </div>
                <div class="cars__item" id="item7">
                    <div class="cars__item__top">
                        <h3 class="item__name">Lamborghini Huracan</h3>
                        <img class="item__image" src="image/cars/Rolls-Royce-Cullinan-1-(5)-transformed.png" alt="">
                        <div class="item__back">
                            <div class="item__price">
                                <div class="price__day">
                                    <h4>Цена за 1 сутки</h4>
                                    <h3>от 3300 USD</h3>
                                </div>
                                <div class="price__deposit">
                                    <h4>Депозид</h4>
                                    <h3>5000 AED</h3>
                                </div>
                            </div>
                            <div class="item__btn">
                                <button>Забронировать</button>
                                <button>Условия аренды</button>
                            </div>
                        </div>
                    </div>
                    <div class="cars__image__add cars__add__open" style="display: none; background: #000; border-radius: 20px; padding-bottom: 10px;">
                        <div class="cars__inner__image">
                            <img src="image/cars/huracan1/1.png"  alt="">
                            <img src="image/cars/huracan1/2.png"  alt="">
                            <img src="image/cars/huracan1/3.png"  alt="">
                        </div>
                        <div class="add__image__btn">
                            <!-- <button>Смотреть фото</button> -->
                            <a href="#openModal7">Смотреть фото</a>
                        </div>
                        <div class="cars__text">
                            <p>Хотите испытать ощущение превосходства на дороге? Lamborghini Huracan с роскошным итальянским дизайном покоряет с первого взгляда. <br>
                                Это первый в мире технлологичный спорткар, который использует систему автономной интернациональной навигации. Благодаря этому он обладает высоким уровнем управляемости. </p>
                        </div>
                        <h3 class="specifications__logo">технические характеристики</h3>
                        <table class="cars__specifications">
                            <tbody>
                                <tr>
                                    <td>Количество мест:</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Объём двигателя:</td>
                                    <td>5,2 л (5200 СС)</td>
                                </tr>
                                <tr>
                                    <td>Максимальная скорость:</td>
                                    <td>325 км/ч</td>
                                </tr>
                                <tr>
                                    <td>Трансмиссия:</td>
                                    <td>Автомат</td>
                                </tr>
                                <tr>
                                    <td>Разгон до 100 км/ч:</td>
                                    <td>3,1 сек</td>
                                </tr>
                                <tr>
                                    <td>Мощность:</td>
                                    <td>640 л.с.</td>
                                </tr>
                                <tr>
                                    <td>Тип двигателя:</td>
                                    <td>V10</td>
                                </tr>
                                <tr>
                                    <td>Привод:</td>
                                    <td>2WD</td>
                                </tr>
                                <tr>
                                    <td>Топливо:</td>
                                    <td>бензин</td>
                                </tr>
                            </tbody>
                        </table>
                        <h3 class="specifications__logo">условия аренды</h3>
                        <table class="cars__specifications">
                            <tbody>
                                <tr>
                                    <td>Возрастное ограничение:</td>
                                    <td>23+</td>
                                </tr>
                                <tr>
                                    <td>Стаж вождения:</td>
                                    <td>не менее 1 года</td>
                                </tr>
                                <tr>
                                    <td>Пробег за сутки:</td>
                                    <td>250 км</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="#item7" class="item__circle cars__btn">
                        <h4 class="cars__open">подробнее</h4>
                        <h4 class="cars__close" style="display: none;">скрыть</h4>
                        <img class="cars__image" src="image/icon/cross.svg" alt="">
                    </a>
                </div>
                <div class="cars__item" id="item8">
                    <div class="cars__item__top">
                        <h3 class="item__name">Lamborghini Huracan</h3>
                        <img class="item__image" src="image/cars/23456345634563456345634563.png" alt="">
                        <div class="item__back">
                            <div class="item__price">
                                <div class="price__day">
                                    <h4>Цена за 1 сутки</h4>
                                    <h3>от 4500 USD</h3>
                                </div>
                                <div class="price__deposit">
                                    <h4>Депозид</h4>
                                    <h3>5000 AED</h3>
                                </div>
                            </div>
                            <div class="item__btn">
                                <button>Забронировать</button>
                                <button>Условия аренды</button>
                            </div>
                        </div>
                    </div>
                    <div class="cars__image__add cars__add__open" style="display: none; background: #000; border-radius: 20px; padding-bottom: 10px;">
                        <div class="cars__inner__image">
                            <img src="image/cars/huracan2/1.png"  alt="">
                            <img src="image/cars/huracan2/2.png"  alt="">
                            <img src="image/cars/huracan2/3.png"  alt="">
                        </div>
                        <div class="add__image__btn">
                            <!-- <button>Смотреть фото</button> -->
                            <a href="#openModal8">Смотреть фото</a>
                        </div>
                        <div class="cars__text">
                            <p>Хотите испытать ощущение превосходства на дороге? Lamborghini Huracan с роскошным итальянским дизайном покоряет с первого взгляда. <br>
                            Forwarded message <br>
                            Тот самый <br>
                            Это первый в мире технлологичный спорткар, который использует систему автономной интернациональной навигации. Благодаря этому он обладает высоким уровнем управляемости. </p>
                        </div>
                        <h3 class="specifications__logo">технические характеристики</h3>
                        <table class="cars__specifications">
                            <tbody>
                                <tr>
                                    <td>Количество мест:</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Объём двигателя:</td>
                                    <td>5,2 л (6700 СС)</td>
                                </tr>
                                <tr>
                                    <td>Максимальная скорость:</td>
                                    <td>325 км/ч</td>
                                </tr>
                                <tr>
                                    <td>Трансмиссия:</td>
                                    <td>Автомат</td>
                                </tr>
                                <tr>
                                    <td>Разгон до 100 км/ч:</td>
                                    <td>3,1 сек</td>
                                </tr>
                                <tr>
                                    <td>Мощность:</td>
                                    <td>640 л.с.</td>
                                </tr>
                                <tr>
                                    <td>Тип двигателя:</td>
                                    <td>V10</td>
                                </tr>
                                <tr>
                                    <td>Привод:</td>
                                    <td>2WD</td>
                                </tr>
                                <tr>
                                    <td>Топливо:</td>
                                    <td>бензин</td>
                                </tr>
                            </tbody>
                        </table>
                        <h3 class="specifications__logo">условия аренды</h3>
                        <table class="cars__specifications">
                            <tbody>
                                <tr>
                                    <td>Возрастное ограничение:</td>
                                    <td>23+</td>
                                </tr>
                                <tr>
                                    <td>Стаж вождения:</td>
                                    <td>не менее 1 года</td>
                                </tr>
                                <tr>
                                    <td>Пробег за сутки:</td>
                                    <td>250 км</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="#item8" class="item__circle cars__btn">
                        <h4 class="cars__open">подробнее</h4>
                        <h4 class="cars__close" style="display: none;">скрыть</h4>
                        <img class="cars__image" src="image/icon/cross.svg" alt="">
                    </a>
                </div>
                <div class="cars__item" id="item9">
                    <div class="cars__item__top">
                        <h3 class="item__name">Mercedes G63</h3>
                        <img class="item__image" src="image/cars/Rolls-Royce-Cullinan-1-(6)-transformed.png" alt="">
                        <div class="item__back">
                            <div class="item__price">
                                <div class="price__day">
                                    <h4>Цена за 1 сутки</h4>
                                    <h3>от 2000 USD</h3>
                                </div>
                                <div class="price__deposit">
                                    <h4>Депозид</h4>
                                    <h3>5000 AED</h3>
                                </div>
                            </div>
                            <div class="item__btn">
                                <button>Забронировать</button>
                                <button>Условия аренды</button>
                            </div>
                        </div>
                    </div>
                    <div class="cars__image__add cars__add__open" style="display: none; background: #000; border-radius: 20px; padding-bottom: 10px;">
                        <div class="cars__inner__image">
                            <img src="image/cars/g63/1.png"  alt="">
                            <img src="image/cars/g63/2.png"  alt="">
                            <img src="image/cars/g63/3.png"  alt="">
                        </div>
                        <div class="add__image__btn">
                            <!-- <button>Смотреть фото</button> -->
                            <a href="#openModal9">Смотреть фото</a>
                        </div>
                        <div class="cars__text">
                            <p>Легендарный спортивный внедорожник. Он подходит как для путешествий по самым неожиданным маршрутам, так и для скоростных приключений на трассах. <br> 
                            Mercedes G63 оснащен мощным двигателем V8 двойным турбонаддувом. <br> 
                            Неповторимый дизайн Mercedes G63 с внушительной решеткой радиатора понравится ценителям мощности и надежности. <br> 
                            На любой дороге вы будете чувствовать себя комфортно в просторном салоне. Обивка сидений выполнена из кожи и имеет уникальный для Mercedes ромбовидный дизайн. А все остальные элементы салона выполнены из современных технологичных материалов (карбон, микроволокно).</p>
                        </div>
                        <h3 class="specifications__logo">технические характеристики</h3>
                        <table class="cars__specifications">
                            <tbody>
                                <tr>
                                    <td>Количество мест:</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Объём двигателя:</td>
                                    <td>4 л (4000 СС)</td>
                                </tr>
                                <tr>
                                    <td>Максимальная скорость:</td>
                                    <td>240 км/ч</td>
                                </tr>
                                <tr>
                                    <td>Трансмиссия:</td>
                                    <td>Автомат</td>
                                </tr>
                                <tr>
                                    <td>Разгон до 100 км/ч:</td>
                                    <td>4,5 сек</td>
                                </tr>
                                <tr>
                                    <td>Мощность:</td>
                                    <td>577 л.с.</td>
                                </tr>
                                <tr>
                                    <td>Тип двигателя:</td>
                                    <td>V8</td>
                                </tr>
                                <tr>
                                    <td>Привод:</td>
                                    <td>4WD</td>
                                </tr>
                                <tr>
                                    <td>Топливо:</td>
                                    <td>бензин</td>
                                </tr>
                            </tbody>
                        </table>
                        <h3 class="specifications__logo">условия аренды</h3>
                        <table class="cars__specifications">
                            <tbody>
                                <tr>
                                    <td>Возрастное ограничение:</td>
                                    <td>23+</td>
                                </tr>
                                <tr>
                                    <td>Стаж вождения:</td>
                                    <td>не менее 1 года</td>
                                </tr>
                                <tr>
                                    <td>Пробег за сутки:</td>
                                    <td>250 км</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="#item9" class="item__circle cars__btn">
                        <h4 class="cars__open">подробнее</h4>
                        <h4 class="cars__close" style="display: none;">скрыть</h4>
                        <img class="cars__image" src="image/icon/cross.svg" alt="">
                    </a>
                </div>
                <div class="cars__item" id="item10">
                    <div class="cars__item__top">
                        <h3 class="item__name">Porsche 911</h3>
                        <img class="item__image" src="image/cars/Rolls-Royce-Cullinan-1-(7)-transformed.png" alt="">
                        <div class="item__back">
                            <div class="item__price">
                                <div class="price__day">
                                    <h4>Цена за 1 сутки</h4>
                                    <h3>от 1800 USD</h3>
                                </div>
                                <div class="price__deposit">
                                    <h4>Депозид</h4>
                                    <h3>5000 AED</h3>
                                </div>
                            </div>
                            <div class="item__btn">
                                <button>Забронировать</button>
                                <button>Условия аренды</button>
                            </div>
                        </div>
                    </div>
                    <div class="cars__image__add cars__add__open" style="display: none; background: #000; border-radius: 20px; padding-bottom: 10px;">
                        <div class="cars__inner__image">
                            <img src="image/cars/911/1.png"  alt="">
                            <img src="image/cars/911/2.png"  alt="">
                            <img src="image/cars/911/3.png"  alt="">
                        </div>
                        <div class="add__image__btn">
                            <!-- <button>Смотреть фото</button> -->
                            <a href="#openModal10">Смотреть фото</a>
                        </div>
                        <div class="cars__text">
                            <p>Porsche 911 - спортивный премиальный автомобиль с длинной историей. <br>
                            Он производится с 1963, регулярно обновляясь и не теряя своей популярности. <br>
                            Комфорт, безопасность и технологичность - так можно охарактеризовать Porsche 911. <br>
                            Несмотря на небольшие габариты, в салоне вам будет просторно и удобно. А наличие систем помощи водителю и других передовых технологий сделает ваши поездки безопасными и подарит незабываемые эмоции от вождения. </p>
                        </div>
                        <h3 class="specifications__logo">технические характеристики</h3>
                        <table class="cars__specifications">
                            <tbody>
                                <tr>
                                    <td>Количество мест:</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Объём двигателя:</td>
                                    <td>3 л (3000 СС)</td>
                                </tr>
                                <tr>
                                    <td>Максимальная скорость:</td>
                                    <td>290 км/ч</td>
                                </tr>
                                <tr>
                                    <td>Трансмиссия:</td>
                                    <td>Автомат</td>
                                </tr>
                                <tr>
                                    <td>Разгон до 100 км/ч:</td>
                                    <td>2,7 сек</td>
                                </tr>
                                <tr>
                                    <td>Мощность:</td>
                                    <td>379 л.с.</td>
                                </tr>
                                <tr>
                                    <td>Тип двигателя:</td>
                                    <td>V6</td>
                                </tr>
                                <tr>
                                    <td>Привод:</td>
                                    <td>4WD</td>
                                </tr>
                                <tr>
                                    <td>Топливо:</td>
                                    <td>бензин</td>
                                </tr>
                            </tbody>
                        </table>
                        <h3 class="specifications__logo">условия аренды</h3>
                        <table class="cars__specifications">
                            <tbody>
                                <tr>
                                    <td>Возрастное ограничение:</td>
                                    <td>23+</td>
                                </tr>
                                <tr>
                                    <td>Стаж вождения:</td>
                                    <td>не менее 1 года</td>
                                </tr>
                                <tr>
                                    <td>Пробег за сутки:</td>
                                    <td>250 км</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="#item10" class="item__circle cars__btn">
                        <h4 class="cars__open">подробнее</h4>
                        <h4 class="cars__close" style="display: none;">скрыть</h4>
                        <img class="cars__image" src="image/icon/cross.svg" alt="">
                    </a>
                </div>
                <div class="cars__item" id="item11">
                    <div class="cars__item__top">
                        <h3 class="item__name">Porsche Cayman 718</h3>
                        <img class="item__image" src="image/cars/Rolls-Royce-Cullinan-2-(8)-transformed.png" alt="">
                        <div class="item__back">
                            <div class="item__price">
                                <div class="price__day">
                                    <h4>Цена за 1 сутки</h4>
                                    <h3>от 3200 USD</h3>
                                </div>
                                <div class="price__deposit">
                                    <h4>Депозид</h4>
                                    <h3>5000 AED</h3>
                                </div>
                            </div>
                            <div class="item__btn">
                                <button>Забронировать</button>
                                <button>Условия аренды</button>
                            </div>
                        </div>
                    </div>
                    <div class="cars__image__add cars__add__open" style="display: none; background: #000; border-radius: 20px; padding-bottom: 10px;">
                        <div class="cars__inner__image">
                            <img src="image/cars/718/1.png"  alt="">
                            <img src="image/cars/718/2.png"  alt="">
                            <img src="image/cars/718/3.png"  alt="">
                        </div>
                        <div class="add__image__btn">
                            <!-- <button>Смотреть фото</button> -->
                            <a href="#openModal11">Смотреть фото</a>
                        </div>
                        <div class="cars__text">
                            <p>Forwarded message <br>
                                Тот самый<br>
                                Спортивный автомобиль с невероятно стильным дизайном. Он оснащен специальными адаптивными амортизаторами, чтобы вы чувствовали себя комфортно и в повседневных поездках. <br>
                                Porsche Cayman 718 идеально подходит для коротких и длинных путешествий. Просторный салон с удобными спортивными сиденьями, много места для мелких вещей и два багажных отделения. <br>
                                Для удобства вождения и безопасности на дорогах Porsche Cayman 718 оснащен  современной техникой. Вы сможете насладиться скоростью спорткара в сочетании с комфортом и безопасностью.</p>
                        </div>
                        <h3 class="specifications__logo">технические характеристики</h3>
                        <table class="cars__specifications">
                            <tbody>
                                <tr>
                                    <td>Количество мест:</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Объём двигателя:</td>
                                    <td>2,5 л (6700 СС)</td>
                                </tr>
                                <tr>
                                    <td>Максимальная скорость:</td>
                                    <td>290 км/ч</td>
                                </tr>
                                <tr>
                                    <td>Трансмиссия:</td>
                                    <td>Автомат</td>
                                </tr>
                                <tr>
                                    <td>Разгон до 100 км/ч:</td>
                                    <td>4,3 сек</td>
                                </tr>
                                <tr>
                                    <td>Мощность:</td>
                                    <td>365 л.с.</td>
                                </tr>
                                <tr>
                                    <td>Тип двигателя:</td>
                                    <td>V4</td>
                                </tr>
                                <tr>
                                    <td>Привод:</td>
                                    <td>2WD</td>
                                </tr>
                                <tr>
                                    <td>Топливо:</td>
                                    <td>бензин</td>
                                </tr>
                            </tbody>
                        </table>
                        <h3 class="specifications__logo">условия аренды</h3>
                        <table class="cars__specifications">
                            <tbody>
                                <tr>
                                    <td>Возрастное ограничение:</td>
                                    <td>23+</td>
                                </tr>
                                <tr>
                                    <td>Стаж вождения:</td>
                                    <td>не менее 1 года</td>
                                </tr>
                                <tr>
                                    <td>Пробег за сутки:</td>
                                    <td>250 км</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="#item11" class="item__circle cars__btn">
                        <h4 class="cars__open">подробнее</h4>
                        <h4 class="cars__close" style="display: none;">скрыть</h4>
                        <img class="cars__image" src="image/icon/cross.svg" alt="">
                    </a>
                </div>
                <div class="new__cars">
                    <div class="new__item">
                        <img src="image/icon/cross_new_car.svg" alt="">
                        <h4>новые авто. скоро</h4>
                    </div>
                </div>
            </div>
            <div class="swiper" style="overflow: unset;">
                <div class="cars__inner__mobile">
                    <div class="cars__item swiper-slide" style="max-width:  330.09px;">
                        <div class="cars__item__top">
                            <h3 class="item__name">Rolls Royce Cullinan</h3>
                            <img class="item__image" src="image/cars/Rolls-Royce-Cullinan-1-transformed.png" alt="">
                            <div class="item__back">
                                <img class="shadow__mobile" src="image/shadow__mobile.png" alt="">
                                <div class="item__price">
                                    <div class="price__day">
                                        <h4>Цена за 1 сутки</h4>
                                        <h3>от 4500 USD</h3>
                                    </div>
                                    <div class="price__deposit">
                                        <h4>Депозид</h4>
                                        <h3>5000 AED</h3>
                                    </div>
                                </div>
                                <div class="item__btn">
                                    <button>Забронировать</button>
                                    <button>Условия аренды</button>
                                </div>
                            </div>
                        </div>
                        <div class="cars__image__add cars__add__open" style="display: none;">
                            <div class="cars__inner__image">
                                <img src="image/cars/cullinan/1.png"  alt="">
                                <img src="image/cars/cullinan/2.png"  alt="">
                                <img src="image/cars/cullinan/3.png"  alt="">
                            </div>
                            <div class="add__image__btn">
                                <a href="#openModal1">Смотреть фото</a>
                            </div>
                            <div class="cars__text">
                                <p>Хотите путешествовать в роскошных условиях, но при этом в автомобиле вам важна практичность, функциональность и проходимость? Тогда выбирайте Rolls Royce Cullinan.
                                    Это автомобиль с внушительными размерами, классическим эффектным дизайном и характеристиками внедорожника с роскошным салоном,
                                </p>
                            </div>
                            <h3 class="specifications__logo">технические характеристики</h3>
                            <table class="cars__specifications">
                                <tbody>
                                    <tr>
                                        <td>Количество мест:</td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td>Объём двигателя:</td>
                                        <td>6,7 л (6700 СС)</td>
                                    </tr>
                                    <tr>
                                        <td>Максимальная скорость:</td>
                                        <td>250 км/ч</td>
                                    </tr>
                                    <tr>
                                        <td>Трансмиссия:</td>
                                        <td>Автомат</td>
                                    </tr>
                                    <tr>
                                        <td>Разгон до 100 км/ч:</td>
                                        <td>6,7 сек</td>
                                    </tr>
                                    <tr>
                                        <td>Мощность:</td>
                                        <td>563 л.с.</td>
                                    </tr>
                                    <tr>
                                        <td>Тип двигателя:</td>
                                        <td>V12</td>
                                    </tr>
                                    <tr>
                                        <td>Привод:</td>
                                        <td>4WD</td>
                                    </tr>
                                    <tr>
                                        <td>Топливо:</td>
                                        <td>бензин</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="specifications__logo">условия аренды</h3>
                            <table class="cars__specifications">
                                <tbody>
                                    <tr>
                                        <td>Возрастное ограничение:</td>
                                        <td>23+</td>
                                    </tr>
                                    <tr>
                                        <td>Стаж вождения:</td>
                                        <td>не менее 1 года</td>
                                    </tr>
                                    <tr>
                                        <td>Пробег за сутки:</td>
                                        <td>250 км</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="item__circle cars__btn">
                            <h4 class="cars__open">подробнее</h4>
                            <h4 class="cars__close" style="display: none;">скрыть</h4>
                            <img class="cars__image" src="image/icon/cross.svg" alt="">
                        </div>
                    </div>
                    <div class="cars__item swiper-slide" style="max-width:  330.09px; margin-left: 10px;">
                        <div class="cars__item__top">
                            <h3 class="item__name">Rolls Royce Dawn</h3>
                            <img class="item__image" src="image/cars/Rolls-Royce-Cullinan-1-FW-DAloFK-transformed.png" alt="">
                            <div class="item__back">
                                <img class="shadow__mobile" src="image/shadow__mobile.png" alt="">
                                <div class="item__price">
                                    <div class="price__day">
                                        <h4>Цена за 1 сутки</h4>
                                        <h3>от 3600 USD</h3>
                                    </div>
                                    <div class="price__deposit">
                                        <h4>Депозид</h4>
                                        <h3>5000 AED</h3>
                                    </div>
                                </div>
                                <div class="item__btn">
                                    <button>Забронировать</button>
                                    <button>Условия аренды</button>
                                </div>
                            </div>
                        </div>
                        <div class="cars__image__add cars__add__open" style="display: none;">
                            <div class="cars__inner__image">
                                <img src="image/cars/dawn/1.png"  alt="">
                                <img src="image/cars/dawn/2.png"  alt="">
                                <img src="image/cars/dawn/3.png"  alt="">
                            </div>
                            <div class="add__image__btn">
                                <a href="#openModal2">Смотреть фото</a>
                            </div>
                            <div class="cars__text">
                                <p>Если вы являетесь приверженцем утонченного стиля и элегантности, то вам понравится путешествовать в кабриолете Rolls Royce Dawn. Каждая поездка на нем дарит неповторимые эмоции от комфорта, функциональности и английской эстетики.
                                    Он отлично подчеркнет ваш статус.
                                    Всего 22 секунды нужно, чтобы открыть салон и насладиться приятным бризом на дорогах 
                                </p>
                            </div>
                            <h3 class="specifications__logo">технические характеристики</h3>
                            <table class="cars__specifications">
                                <tbody>
                                    <tr>
                                        <td>Количество мест:</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>Объём двигателя:</td>
                                        <td>6,6 л (6600 СС)</td>
                                    </tr>
                                    <tr>
                                        <td>Максимальная скорость:</td>
                                        <td>250 км/ч</td>
                                    </tr>
                                    <tr>
                                        <td>Трансмиссия:</td>
                                        <td>Автомат</td>
                                    </tr>
                                    <tr>
                                        <td>Разгон до 100 км/ч:</td>
                                        <td>5 сек</td>
                                    </tr>
                                    <tr>
                                        <td>Мощность:</td>
                                        <td>563 л.с.</td>
                                    </tr>
                                    <tr>
                                        <td>Тип двигателя:</td>
                                        <td>V12</td>
                                    </tr>
                                    <tr>
                                        <td>Привод:</td>
                                        <td>2WD</td>
                                    </tr>
                                    <tr>
                                        <td>Топливо:</td>
                                        <td>бензин</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="specifications__logo">условия аренды</h3>
                            <table class="cars__specifications">
                                <tbody>
                                    <tr>
                                        <td>Возрастное ограничение:</td>
                                        <td>23+</td>
                                    </tr>
                                    <tr>
                                        <td>Стаж вождения:</td>
                                        <td>не менее 1 года</td>
                                    </tr>
                                    <tr>
                                        <td>Пробег за сутки:</td>
                                        <td>250 км</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="item__circle cars__btn">
                            <h4 class="cars__open">подробнее</h4>
                            <h4 class="cars__close" style="display: none;">скрыть</h4>
                            <img class="cars__image" src="image/icon/cross.svg" alt="">
                        </div>
                    </div>
                    <div class="cars__item swiper-slide" style="max-width:  330.09px; margin-left: 10px;">
                        <div class="cars__item__top">
                            <h3 class="item__name">Bentley Bentayga</h3>
                            <img class="item__image" src="image/cars/Rolls-Royce-Cullinan-1-(1)-transformed.png" alt="">
                            <div class="item__back">
                                <img class="shadow__mobile" src="image/shadow__mobile.png" alt="">
                                <div class="item__price">
                                    <div class="price__day">
                                        <h4>Цена за 1 сутки</h4>
                                        <h3>от 4500 USD</h3>
                                    </div>
                                    <div class="price__deposit">
                                        <h4>Депозид</h4>
                                        <h3>5000 AED</h3>
                                    </div>
                                </div>
                                <div class="item__btn">
                                    <button>Забронировать</button>
                                    <button>Условия аренды</button>
                                </div>
                            </div>
                        </div>
                        <div class="cars__image__add cars__add__open" style="display: none;">
                            <div class="cars__inner__image">
                                <img src="image/cars/bentayga/1.png"  alt="">
                                <img src="image/cars/bentayga/2.png"  alt="">
                                <img src="image/cars/bentayga/3.png"  alt="">
                            </div>
                            <div class="add__image__btn">
                                <a href="#openModal3">Смотреть фото</a>
                            </div>
                            <div class="cars__text">
                                <p>Получите совершенно новый опыт езды на автомобиле с улучшенными внедорожными характеристиками. Он оснащен мощным двигателем и способен развивать высокую скорость, сохраняя устойчивость, маневренность и управляемость.
                                    Bentley Bentayga - поистине роскошный внедорожник, который задает новые 
                                </p>
                            </div>
                            <h3 class="specifications__logo">технические характеристики</h3>
                            <table class="cars__specifications">
                                <tbody>
                                    <tr>
                                        <td>Количество мест:</td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td>Объём двигателя:</td>
                                        <td>4 л</td>
                                    </tr>
                                    <tr>
                                        <td>Максимальная скорость:</td>
                                        <td>290 км/ч</td>
                                    </tr>
                                    <tr>
                                        <td>Трансмиссия:</td>
                                        <td>Автомат</td>
                                    </tr>
                                    <tr>
                                        <td>Разгон до 100 км/ч:</td>
                                        <td>4,4 сек</td>
                                    </tr>
                                    <tr>
                                        <td>Мощность:</td>
                                        <td>542 л.с.</td>
                                    </tr>
                                    <tr>
                                        <td>Тип двигателя:</td>
                                        <td>V8</td>
                                    </tr>
                                    <tr>
                                        <td>Привод:</td>
                                        <td>4WD</td>
                                    </tr>
                                    <tr>
                                        <td>Топливо:</td>
                                        <td>бензин</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="specifications__logo">условия аренды</h3>
                            <table class="cars__specifications">
                                <tbody>
                                    <tr>
                                        <td>Возрастное ограничение:</td>
                                        <td>23+</td>
                                    </tr>
                                    <tr>
                                        <td>Стаж вождения:</td>
                                        <td>не менее 1 года</td>
                                    </tr>
                                    <tr>
                                        <td>Пробег за сутки:</td>
                                        <td>250 км</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="item__circle cars__btn">
                            <h4 class="cars__open">подробнее</h4>
                            <h4 class="cars__close" style="display: none;">скрыть</h4>
                            <img class="cars__image" src="image/icon/cross.svg" alt="">
                        </div>
                    </div>
                    <div class="cars__item swiper-slide" style="max-width:  330.09px; margin-left: 10px;">
                        <div class="cars__item__top">
                            <h3 class="item__name">Ferrari F8</h3>
                            <img class="item__image" src="image/cars/Rolls-Royce-Cullinan-1-(2)-transformed.png" alt="">
                            <div class="item__back">
                                <img class="shadow__mobile" src="image/shadow__mobile.png" alt="">
                                <div class="item__price">
                                    <div class="price__day">
                                        <h4>Цена за 1 сутки</h4>
                                        <h3>от 4000 USD</h3>
                                    </div>
                                    <div class="price__deposit">
                                        <h4>Депозид</h4>
                                        <h3>5000 AED</h3>
                                    </div>
                                </div>
                                <div class="item__btn">
                                    <button>Забронировать</button>
                                    <button>Условия аренды</button>
                                </div>
                            </div>
                        </div>
                        <div class="cars__image__add cars__add__open" style="display: none;">
                            <div class="cars__inner__image">
                                <img src="image/cars/f8/1.png"  alt="">
                                <img src="image/cars/f8/2.png"  alt="">
                                <img src="image/cars/f8/3.png"  alt="">
                            </div>
                            <div class="add__image__btn">
                                <a href="#openModal4">Смотреть фото</a>
                            </div>
                            <div class="cars__text">
                                <p>Выбор для самых искушенных гонщиков. Самый мощный и быстрый автомобиль в семействе Ferrari. Трижды обладатель награды “Лучший двигатель года”.
                                    Этот спорткар порадует вас не только своими скоростными качествами, но и продуманными системами помощи при торможении, разгоне, заносах. Благодаря ним вы будете уверенно чувствовать себя,
                                </p>
                            </div>
                            <h3 class="specifications__logo">технические характеристики</h3>
                            <table class="cars__specifications">
                                <tbody>
                                    <tr>
                                        <td>Количество мест:</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Объём двигателя:</td>
                                        <td>3,9 л (3900 СС)</td>
                                    </tr>
                                    <tr>
                                        <td>Максимальная скорость:</td>
                                        <td>340 км/ч</td>
                                    </tr>
                                    <tr>
                                        <td>Трансмиссия:</td>
                                        <td>Автомат</td>
                                    </tr>
                                    <tr>
                                        <td>Разгон до 100 км/ч:</td>
                                        <td>2,9 сек</td>
                                    </tr>
                                    <tr>
                                        <td>Мощность:</td>
                                        <td>410 л.с.</td>
                                    </tr>
                                    <tr>
                                        <td>Тип двигателя:</td>
                                        <td>V8</td>
                                    </tr>
                                    <tr>
                                        <td>Привод:</td>
                                        <td>2WD</td>
                                    </tr>
                                    <tr>
                                        <td>Топливо:</td>
                                        <td>бензин</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="specifications__logo">условия аренды</h3>
                            <table class="cars__specifications">
                                <tbody>
                                    <tr>
                                        <td>Возрастное ограничение:</td>
                                        <td>23+</td>
                                    </tr>
                                    <tr>
                                        <td>Стаж вождения:</td>
                                        <td>не менее 1 года</td>
                                    </tr>
                                    <tr>
                                        <td>Пробег за сутки:</td>
                                        <td>250 км</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="item__circle cars__btn">
                            <h4 class="cars__open">подробнее</h4>
                            <h4 class="cars__close" style="display: none;">скрыть</h4>
                            <img class="cars__image" src="image/icon/cross.svg" alt="">
                        </div>
                    </div>
                    <div class="cars__item swiper-slide" style="max-width:  330.09px; margin-left: 10px;">
                        <div class="cars__item__top">
                            <h3 class="item__name">Ferrari Portofino</h3>
                            <img class="item__image" src="image/cars/Rolls-Royce-Cullinan-1-(3)-transformed.png" alt="">
                            <div class="item__back">
                                <img class="shadow__mobile" src="image/shadow__mobile.png" alt="">
                                <div class="item__price">
                                    <div class="price__day">
                                        <h4>Цена за 1 сутки</h4>
                                        <h3>от 3600 USD</h3>
                                    </div>
                                    <div class="price__deposit">
                                        <h4>Депозид</h4>
                                        <h3>5000 AED</h3>
                                    </div>
                                </div>
                                <div class="item__btn">
                                    <button>Забронировать</button>
                                    <button>Условия аренды</button>
                                </div>
                            </div>
                        </div>
                        <div class="cars__image__add cars__add__open" style="display: none;">
                            <div class="cars__inner__image">
                                <img src="image/cars/portofino/1.png"  alt="">
                                <img src="image/cars/portofino/2.png"  alt="">
                                <img src="image/cars/portofino/3.png"  alt="">
                            </div>
                            <div class="add__image__btn">
                                <a href="#openModal5">Смотреть фото</a>
                            </div>
                            <div class="cars__text">
                                <p>Автомобиль класса Gran Turismo не оставит равнодушными ценителей скорости, комфорта и функциональности.
                                    Ferrari Portofino - самый мощный открытый автомобиль в модельном ряде Ferrari. Его назвали в честь одной из деревушек в Италии. Он подходит как для повседневных поездок, так и для легких живописных 
                                </p>
                            </div>
                            <h3 class="specifications__logo">технические характеристики</h3>
                            <table class="cars__specifications">
                                <tbody>
                                    <tr>
                                        <td>Количество мест:</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>Объём двигателя:</td>
                                        <td>3,9 л (3900 СС)</td>
                                    </tr>
                                    <tr>
                                        <td>Максимальная скорость:</td>
                                        <td>320 км/ч</td>
                                    </tr>
                                    <tr>
                                        <td>Трансмиссия:</td>
                                        <td>Автомат</td>
                                    </tr>
                                    <tr>
                                        <td>Разгон до 100 км/ч:</td>
                                        <td>3,5 сек</td>
                                    </tr>
                                    <tr>
                                        <td>Мощность:</td>
                                        <td>612 л.с.</td>
                                    </tr>
                                    <tr>
                                        <td>Тип двигателя:</td>
                                        <td>V8</td>
                                    </tr>
                                    <tr>
                                        <td>Привод:</td>
                                        <td>2WD</td>
                                    </tr>
                                    <tr>
                                        <td>Топливо:</td>
                                        <td>бензин</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="specifications__logo">условия аренды</h3>
                            <table class="cars__specifications">
                                <tbody>
                                    <tr>
                                        <td>Возрастное ограничение:</td>
                                        <td>23+</td>
                                    </tr>
                                    <tr>
                                        <td>Стаж вождения:</td>
                                        <td>не менее 1 года</td>
                                    </tr>
                                    <tr>
                                        <td>Пробег за сутки:</td>
                                        <td>250 км</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="item__circle cars__btn">
                            <h4 class="cars__open">подробнее</h4>
                            <h4 class="cars__close" style="display: none;">скрыть</h4>
                            <img class="cars__image" src="image/icon/cross.svg" alt="">
                        </div>
                    </div>
                    <div class="cars__item swiper-slide" style="max-width:  330.09px; margin-left: 10px;">
                        <div class="cars__item__top">
                            <h3 class="item__name">Lamborghini URUS</h3>
                            <img class="item__image" src="image/cars/Rolls-Royce-Cullinan-1-(4)-transformed.png" alt="">
                            <div class="item__back">
                                <img class="shadow__mobile" src="image/shadow__mobile.png" alt="">
                                <div class="item__price">
                                    <div class="price__day">
                                        <h4>Цена за 1 сутки</h4>
                                        <h3>от 4500 USD</h3>
                                    </div>
                                    <div class="price__deposit">
                                        <h4>Депозид</h4>
                                        <h3>5000 AED</h3>
                                    </div>
                                </div>
                                <div class="item__btn">
                                    <button>Забронировать</button>
                                    <button>Условия аренды</button>
                                </div>
                            </div>
                        </div>
                        <div class="cars__image__add cars__add__open" style="display: none;">
                            <div class="cars__inner__image">
                                <img src="image/cars/urus/1.png"  alt="">
                                <img src="image/cars/urus/2.png"  alt="">
                                <img src="image/cars/urus/3.png"  alt="">
                            </div>
                            <div class="add__image__btn">
                                <a href="#openModal6">Смотреть фото</a>
                            </div>
                            <div class="cars__text">
                                <p>С Lamborghini Urus вы сможете покорить любые маршруты. Это первый в мире спортивный кроссовер, который обладает всеми преимуществами внедорожника и скоростного автомобиля.
                                    Если вам нужен универсальный автомобиль, то это точно будет Lamborghini Urus.<br>
                                    Роскошный итальянский дизайн не оставит
                                </p>
                            </div>
                            <h3 class="specifications__logo">технические характеристики</h3>
                            <table class="cars__specifications">
                                <tbody>
                                    <tr>
                                        <td>Количество мест:</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>Объём двигателя:</td>
                                        <td>4 л (4000 СС)</td>
                                    </tr>
                                    <tr>
                                        <td>Максимальная скорость:</td>
                                        <td>305 км/ч</td>
                                    </tr>
                                    <tr>
                                        <td>Трансмиссия:</td>
                                        <td>Автомат</td>
                                    </tr>
                                    <tr>
                                        <td>Разгон до 100 км/ч:</td>
                                        <td>3,6 сек</td>
                                    </tr>
                                    <tr>
                                        <td>Мощность:</td>
                                        <td>641 л.с.</td>
                                    </tr>
                                    <tr>
                                        <td>Тип двигателя:</td>
                                        <td>V8</td>
                                    </tr>
                                    <tr>
                                        <td>Привод:</td>
                                        <td>4WD</td>
                                    </tr>
                                    <tr>
                                        <td>Топливо:</td>
                                        <td>бензин</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="specifications__logo">условия аренды</h3>
                            <table class="cars__specifications">
                                <tbody>
                                    <tr>
                                        <td>Возрастное ограничение:</td>
                                        <td>23+</td>
                                    </tr>
                                    <tr>
                                        <td>Стаж вождения:</td>
                                        <td>не менее 1 года</td>
                                    </tr>
                                    <tr>
                                        <td>Пробег за сутки:</td>
                                        <td>250 км</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="item__circle cars__btn">
                            <h4 class="cars__open">подробнее</h4>
                            <h4 class="cars__close" style="display: none;">скрыть</h4>
                            <img class="cars__image" src="image/icon/cross.svg" alt="">
                        </div>
                    </div>
                    <div class="cars__item swiper-slide" style="max-width:  330.09px; margin-left: 10px;">
                        <div class="cars__item__top">
                            <h3 class="item__name">Lamborghini Huracan</h3>
                            <img class="item__image" src="image/cars/Rolls-Royce-Cullinan-1-(5)-transformed.png" alt="">
                            <div class="item__back">
                                <img class="shadow__mobile" src="image/shadow__mobile.png" alt="">
                                <div class="item__price">
                                    <div class="price__day">
                                        <h4>Цена за 1 сутки</h4>
                                        <h3>от 3300 USD</h3>
                                    </div>
                                    <div class="price__deposit">
                                        <h4>Депозид</h4>
                                        <h3>5000 AED</h3>
                                    </div>
                                </div>
                                <div class="item__btn">
                                    <button>Забронировать</button>
                                    <button>Условия аренды</button>
                                </div>
                            </div>
                        </div>
                        <div class="cars__image__add cars__add__open" style="display: none;">
                            <div class="cars__inner__image">
                                <img src="image/cars/huracan1/1.png"  alt="">
                                <img src="image/cars/huracan1/2.png"  alt="">
                                <img src="image/cars/huracan1/3.png"  alt="">
                            </div>
                            <div class="add__image__btn">
                                <a href="#openModal7">Смотреть фото</a>
                            </div>
                            <div class="cars__text">
                                <p>Хотите испытать ощущение превосходства на дороге? Lamborghini Huracan с роскошным итальянским дизайном покоряет с первого взгляда.<br>
                                    Это первый в мире технлологичный спорткар, который использует систему автономной интернациональной навигации. Благодаря этому он обладает
                                </p>
                            </div>
                            <h3 class="specifications__logo">технические характеристики</h3>
                            <table class="cars__specifications">
                                <tbody>
                                    <tr>
                                        <td>Количество мест:</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Объём двигателя:</td>
                                        <td>5,2 л (5200 СС)</td>
                                    </tr>
                                    <tr>
                                        <td>Максимальная скорость:</td>
                                        <td>325 км/ч</td>
                                    </tr>
                                    <tr>
                                        <td>Трансмиссия:</td>
                                        <td>Автомат</td>
                                    </tr>
                                    <tr>
                                        <td>Разгон до 100 км/ч:</td>
                                        <td>3,1 сек</td>
                                    </tr>
                                    <tr>
                                        <td>Мощность:</td>
                                        <td>640 л.с.</td>
                                    </tr>
                                    <tr>
                                        <td>Тип двигателя:</td>
                                        <td>V10</td>
                                    </tr>
                                    <tr>
                                        <td>Привод:</td>
                                        <td>2WD</td>
                                    </tr>
                                    <tr>
                                        <td>Топливо:</td>
                                        <td>бензин</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="specifications__logo">условия аренды</h3>
                            <table class="cars__specifications">
                                <tbody>
                                    <tr>
                                        <td>Возрастное ограничение:</td>
                                        <td>23+</td>
                                    </tr>
                                    <tr>
                                        <td>Стаж вождения:</td>
                                        <td>не менее 1 года</td>
                                    </tr>
                                    <tr>
                                        <td>Пробег за сутки:</td>
                                        <td>250 км</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="item__circle cars__btn">
                            <h4 class="cars__open">подробнее</h4>
                            <h4 class="cars__close" style="display: none;">скрыть</h4>
                            <img class="cars__image" src="image/icon/cross.svg" alt="">
                        </div>
                    </div>
                    <div class="cars__item swiper-slide" style="max-width:  330.09px; margin-left: 10px;">
                        <div class="cars__item__top">
                            <h3 class="item__name">Lamborghini Huracan</h3>
                            <img class="item__image" src="image/cars/23456345634563456345634563.png" alt="">
                            <div class="item__back">
                                <img class="shadow__mobile" src="image/shadow__mobile.png" alt="">
                                <div class="item__price">
                                    <div class="price__day">
                                        <h4>Цена за 1 сутки</h4>
                                        <h3>от 4500 USD</h3>
                                    </div>
                                    <div class="price__deposit">
                                        <h4>Депозид</h4>
                                        <h3>5000 AED</h3>
                                    </div>
                                </div>
                                <div class="item__btn">
                                    <button>Забронировать</button>
                                    <button>Условия аренды</button>
                                </div>
                            </div>
                        </div>
                        <div class="cars__image__add cars__add__open" style="display: none;">
                            <div class="cars__inner__image">
                                <img src="image/cars/huracan2/1.png"  alt="">
                                <img src="image/cars/huracan2/2.png"  alt="">
                                <img src="image/cars/huracan2/3.png"  alt="">
                            </div>
                            <div class="add__image__btn">
                                <a href="#openModal8">Смотреть фото</a>
                            </div>
                            <div class="cars__text">
                                <p>Хотите испытать ощущение превосходства на дороге? Lamborghini Huracan с роскошным итальянским дизайном покоряет с первого взгляда.<br>
    
                                    Это первый в мире технлологичный спорткар, который использует систему автономной интернациональной навигации. Благодаря этому он обладает
                                </p>
                            </div>
                            <h3 class="specifications__logo">технические характеристики</h3>
                            <table class="cars__specifications">
                                <tbody>
                                    <tr>
                                        <td>Количество мест:</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Объём двигателя:</td>
                                        <td>5,2 л (6700 СС)</td>
                                    </tr>
                                    <tr>
                                        <td>Максимальная скорость:</td>
                                        <td>325 км/ч</td>
                                    </tr>
                                    <tr>
                                        <td>Трансмиссия:</td>
                                        <td>Автомат</td>
                                    </tr>
                                    <tr>
                                        <td>Разгон до 100 км/ч:</td>
                                        <td>3,1 сек</td>
                                    </tr>
                                    <tr>
                                        <td>Мощность:</td>
                                        <td>640 л.с.</td>
                                    </tr>
                                    <tr>
                                        <td>Тип двигателя:</td>
                                        <td>V10</td>
                                    </tr>
                                    <tr>
                                        <td>Привод:</td>
                                        <td>2WD</td>
                                    </tr>
                                    <tr>
                                        <td>Топливо:</td>
                                        <td>бензин</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="specifications__logo">условия аренды</h3>
                            <table class="cars__specifications">
                                <tbody>
                                    <tr>
                                        <td>Возрастное ограничение:</td>
                                        <td>23+</td>
                                    </tr>
                                    <tr>
                                        <td>Стаж вождения:</td>
                                        <td>не менее 1 года</td>
                                    </tr>
                                    <tr>
                                        <td>Пробег за сутки:</td>
                                        <td>250 км</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="item__circle cars__btn">
                            <h4 class="cars__open">подробнее</h4>
                            <h4 class="cars__close" style="display: none;">скрыть</h4>
                            <img class="cars__image" src="image/icon/cross.svg" alt="">
                        </div>
                    </div>
                    <div class="cars__item swiper-slide" style="max-width:  330.09px; margin-left: 10px;">
                        <div class="cars__item__top">
                            <h3 class="item__name">Mercedes G63</h3>
                            <img class="item__image" src="image/cars/Rolls-Royce-Cullinan-1-(6)-transformed.png" alt="">
                            <div class="item__back">
                                <img class="shadow__mobile" src="image/shadow__mobile.png" alt="">
                                <div class="item__price">
                                    <div class="price__day">
                                        <h4>Цена за 1 сутки</h4>
                                        <h3>от 2000 USD</h3>
                                    </div>
                                    <div class="price__deposit">
                                        <h4>Депозид</h4>
                                        <h3>5000 AED</h3>
                                    </div>
                                </div>
                                <div class="item__btn">
                                    <button>Забронировать</button>
                                    <button>Условия аренды</button>
                                </div>
                            </div>
                        </div>
                        <div class="cars__image__add cars__add__open" style="display: none;">
                            <div class="cars__inner__image">
                                <img src="image/cars/g63/1.png"  alt="">
                                <img src="image/cars/g63/2.png"  alt="">
                                <img src="image/cars/g63/3.png"  alt="">
                            </div>
                            <div class="add__image__btn">
                                <a href="#openModal9">Смотреть фото</a>
                            </div>
                            <div class="cars__text">
                                <p>Легендарный спортивный внедорожник. Он подходит как для путешествий по самым неожиданным маршрутам, так и для скоростных приключений на трассах.
                                    Mercedes G63 оснащен мощным двигателем V8 двойным турбонаддувом.
                                    Неповторимый дизайн Mercedes G63 с внушительной решеткой радиатора понравится ценителям мощности и 
                                </p>
                            </div>
                            <h3 class="specifications__logo">технические характеристики</h3>
                            <table class="cars__specifications">
                                <tbody>
                                    <tr>
                                        <td>Количество мест:</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>Объём двигателя:</td>
                                        <td>4 л (4000 СС)</td>
                                    </tr>
                                    <tr>
                                        <td>Максимальная скорость:</td>
                                        <td>240 км/ч</td>
                                    </tr>
                                    <tr>
                                        <td>Трансмиссия:</td>
                                        <td>Автомат</td>
                                    </tr>
                                    <tr>
                                        <td>Разгон до 100 км/ч:</td>
                                        <td>4,5 сек</td>
                                    </tr>
                                    <tr>
                                        <td>Мощность:</td>
                                        <td>577 л.с.</td>
                                    </tr>
                                    <tr>
                                        <td>Тип двигателя:</td>
                                        <td>V8</td>
                                    </tr>
                                    <tr>
                                        <td>Привод:</td>
                                        <td>4WD</td>
                                    </tr>
                                    <tr>
                                        <td>Топливо:</td>
                                        <td>бензин</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="specifications__logo">условия аренды</h3>
                            <table class="cars__specifications">
                                <tbody>
                                    <tr>
                                        <td>Возрастное ограничение:</td>
                                        <td>23+</td>
                                    </tr>
                                    <tr>
                                        <td>Стаж вождения:</td>
                                        <td>не менее 1 года</td>
                                    </tr>
                                    <tr>
                                        <td>Пробег за сутки:</td>
                                        <td>250 км</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="item__circle cars__btn">
                            <h4 class="cars__open">подробнее</h4>
                            <h4 class="cars__close" style="display: none;">скрыть</h4>
                            <img class="cars__image" src="image/icon/cross.svg" alt="">
                        </div>
                    </div>
                    <div class="cars__item swiper-slide" style="max-width:  330.09px; margin-left: 10px;">
                        <div class="cars__item__top">
                            <h3 class="item__name">Porsche 911</h3>
                            <img class="item__image" src="image/cars/Rolls-Royce-Cullinan-1-(7)-transformed.png" alt="">
                            <div class="item__back">
                                <img class="shadow__mobile" src="image/shadow__mobile.png" alt="">
                                <div class="item__price">
                                    <div class="price__day">
                                        <h4>Цена за 1 сутки</h4>
                                        <h3>от 1800 USD</h3>
                                    </div>
                                    <div class="price__deposit">
                                        <h4>Депозид</h4>
                                        <h3>5000 AED</h3>
                                    </div>
                                </div>
                                <div class="item__btn">
                                    <button>Забронировать</button>
                                    <button>Условия аренды</button>
                                </div>
                            </div>
                        </div>
                        <div class="cars__image__add cars__add__open" style="display: none;">
                            <div class="cars__inner__image">
                                <img src="image/cars/911/1.png"  alt="">
                                <img src="image/cars/911/2.png"  alt="">
                                <img src="image/cars/911/3.png"  alt="">
                            </div>
                            <div class="add__image__btn">
                            <a href="#openModal10">Смотреть фото</a>
                            </div>
                            <div class="cars__text">
                                <p>Porsche 911 - спортивный премиальный автомобиль с длинной историей.
                                    Он производится с 1963, регулярно обновляясь и не теряя своей популярности.
                                    Комфорт, безопасность и технологичность - так можно охарактеризовать Porsche 911.
                                    Несмотря на небольшие габариты, в салоне вам будет просторно и удобно. А наличие систем помощи водителю и других 
                                </p>
                            </div>
                            <h3 class="specifications__logo">технические характеристики</h3>
                            <table class="cars__specifications">
                                <tbody>
                                    <tr>
                                        <td>Количество мест:</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>Объём двигателя:</td>
                                        <td>3 л (3000 СС)</td>
                                    </tr>
                                    <tr>
                                        <td>Максимальная скорость:</td>
                                        <td>290 км/ч</td>
                                    </tr>
                                    <tr>
                                        <td>Трансмиссия:</td>
                                        <td>Автомат</td>
                                    </tr>
                                    <tr>
                                        <td>Разгон до 100 км/ч:</td>
                                        <td>2,7 сек</td>
                                    </tr>
                                    <tr>
                                        <td>Мощность:</td>
                                        <td>379 л.с.</td>
                                    </tr>
                                    <tr>
                                        <td>Тип двигателя:</td>
                                        <td>V6</td>
                                    </tr>
                                    <tr>
                                        <td>Привод:</td>
                                        <td>4WD</td>
                                    </tr>
                                    <tr>
                                        <td>Топливо:</td>
                                        <td>бензин</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="specifications__logo">условия аренды</h3>
                            <table class="cars__specifications">
                                <tbody>
                                    <tr>
                                        <td>Возрастное ограничение:</td>
                                        <td>23+</td>
                                    </tr>
                                    <tr>
                                        <td>Стаж вождения:</td>
                                        <td>не менее 1 года</td>
                                    </tr>
                                    <tr>
                                        <td>Пробег за сутки:</td>
                                        <td>250 км</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="item__circle cars__btn">
                            <h4 class="cars__open">подробнее</h4>
                            <h4 class="cars__close" style="display: none;">скрыть</h4>
                            <img class="cars__image" src="image/icon/cross.svg" alt="">
                        </div>
                    </div>
                    <div class="cars__item swiper-slide" style="max-width:  330.09px; margin-left: 10px;">
                        <div class="cars__item__top">
                            <h3 class="item__name">Porsche Cayman 718</h3>
                            <img class="item__image" src="image/cars/Rolls-Royce-Cullinan-2-(8)-transformed.png" alt="">
                            <div class="item__back">
                                <img class="shadow__mobile" src="image/shadow__mobile.png" alt="">
                                <div class="item__price">
                                    <div class="price__day">
                                        <h4>Цена за 1 сутки</h4>
                                        <h3>от 3200 USD</h3>
                                    </div>
                                    <div class="price__deposit">
                                        <h4>Депозид</h4>
                                        <h3>5000 AED</h3>
                                    </div>
                                </div>
                                <div class="item__btn">
                                    <button>Забронировать</button>
                                    <button>Условия аренды</button>
                                </div>
                            </div>
                        </div>
                        <div class="cars__image__add cars__add__open" style="display: none;">
                            <div class="cars__inner__image">
                                <img src="image/cars/718/1.png"  alt="">
                                <img src="image/cars/718/2.png"  alt="">
                                <img src="image/cars/718/3.png"  alt="">
                            </div>
                            <div class="add__image__btn">
                            <a href="#openModal11">Смотреть фото</a>
                            </div>
                            <div class="cars__text">
                                <p>Спортивный автомобиль с невероятно стильным дизайном. Он оснащен специальными адаптивными амортизаторами, чтобы вы чувствовали себя комфортно и в повседневных поездках.
                                    Porsche Cayman 718 идеально подходит для коротких и длинных путешествий. Просторный салон с удобными
                                </p>
                            </div>
                            <h3 class="specifications__logo">технические характеристики</h3>
                            <table class="cars__specifications">
                                <tbody>
                                    <tr>
                                        <td>Количество мест:</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Объём двигателя:</td>
                                        <td>2,5 л (6700 СС)</td>
                                    </tr>
                                    <tr>
                                        <td>Максимальная скорость:</td>
                                        <td>290 км/ч</td>
                                    </tr>
                                    <tr>
                                        <td>Трансмиссия:</td>
                                        <td>Автомат</td>
                                    </tr>
                                    <tr>
                                        <td>Разгон до 100 км/ч:</td>
                                        <td>4,3 сек</td>
                                    </tr>
                                    <tr>
                                        <td>Мощность:</td>
                                        <td>365 л.с.</td>
                                    </tr>
                                    <tr>
                                        <td>Тип двигателя:</td>
                                        <td>V4</td>
                                    </tr>
                                    <tr>
                                        <td>Привод:</td>
                                        <td>2WD</td>
                                    </tr>
                                    <tr>
                                        <td>Топливо:</td>
                                        <td>бензин</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="specifications__logo">условия аренды</h3>
                            <table class="cars__specifications">
                                <tbody>
                                    <tr>
                                        <td>Возрастное ограничение:</td>
                                        <td>23+</td>
                                    </tr>
                                    <tr>
                                        <td>Стаж вождения:</td>
                                        <td>не менее 1 года</td>
                                    </tr>
                                    <tr>
                                        <td>Пробег за сутки:</td>
                                        <td>250 км</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="item__circle cars__btn">
                            <h4 class="cars__open">подробнее</h4>
                            <h4 class="cars__close" style="display: none;">скрыть</h4>
                            <img class="cars__image" src="image/icon/cross.svg" alt="">
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </section>
    <div class="calc" id="calc">
        <img class="effect__sand__right" src="image/effect/effect_sand_right.png" alt="">
        <div class="container">
            <h2 class="calc__trip">калькулятор поездки</h2>
            <h3 class="calc__buy">рассчитайте стоимость Вашей поездки</h3>
            <div class="calc__inner">
                <div class="calc__cars">
                    <h3 class="change_text_calc">Rolls Royce Cullinan</h3>
                    <img class="calc__image change__calc__car" src="image/form/Rolls-Royce-Cullinan-1-transformed.png" alt="">
                    <div class="calc__select">
                        <!-- <h4>Выбрать другой автомобиль</h4> -->
                        <select id="cars_picker" onchange="cars_date()">
                            <option value="Rolls Royce Cullinan">Выбрать другой автомобиль</option>
                            <option value="Rolls Royce Cullinan">Rolls Royce Cullinan</option>
                            <option value="Rolls Royce Dawn">Rolls Royce Dawn</option>
                            <option value="Bentley Bentayga">Bentley Bentayga</option>
                            <option value="Ferrari F8">Ferrari F8</option>
                            <option value="Ferrari Portofino">Ferrari Portofino</option>
                            <option value="Lamborghini URUS">Lamborghini URUS</option>
                            <option value="Lamborghini Huracan 2022">Lamborghini Huracan 2022</option>
                            <option value="Lamborghini Huracan 2023">Lamborghini Huracan 2023</option>
                            <option value="Mercedes G63">Mercedes G63</option>
                            <option value="Porsche 911">Porsche 911</option>
                            <option value="Porsche Cayman 718">Porsche Cayman 718</option>
                            <!-- <option value="1">Выбрать другой автомобиль</option>
                            <option value="4500">Rolls Royce Dawn</option>
                            <option value="4500">Bentley Bentayga
                            <option value="4000">Ferrari F8</option>
                            <option value="3600">Ferrari Portofino</option>
                            <option value="4500">Lamborghini URUS</option>
                            <option value="3300">Lamborghini Huracan 2022</option>
                            <option value="4500">Lamborghini Huracan 2023</option>
                            <option value="2000">Mercedes G63</option>
                            <option value="1800">Porsche 911</option>
                            <option value="3200">Porsche Cayman 718</option> -->
                        </select>
                        <img class="select__image" src="image/icon/cross20.svg" alt="">
                    </div>
                    <img class="calc__shadow__pc" src="image/shadow_calc_pc.png" alt="">
                    <img class="calc__cars__mobile" src="image/shadow__mobile__form.png" alt="">
                </div>
                <div class="calc__date__inner">
                    <div class="calc__begin__date">
                        <h3>Дата начала</h3>
                        <div class="date__select">
                            <!-- <h3>выберите дату</h3> -->
                            <input type="text" id="datepicker" onchange="begin_date()" class="date" readonly="readonly" placeholder="выберите дату ">
                            <img src="image/icon/cross_date.svg" alt="">
                        </div>
                    </div>
                    <div class="calc__end__date">
                        <h3>Дата окончания</h3>
                        <div class="date__select">
                            <!-- <h3>выберите дату</h3> -->
                            <input type="text" id="datepicker2" onchange="end_date()" class="date2" readonly="readonly" placeholder="выберите дату ">
                            <img src="image/icon/cross_date.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="calc__deposit">
                    <h3>ДЕПОЗИД</h3>
                    <h2>5000 AED</h2>
                </div>
                <div class="calc__price">
                    <h3>СТОИМОСТЬ</h3>
                    <div class="calc__full">
                        <div>
                            <h3><span id="end__day">10</span> дней</h3>
                            <h4>( <span id="begin__date">20.01.2022</span> - <span id="end__date">30.01.2022</span>)</h4>
                        </div>
                        <span>-</span>
                        <div class="dep__mobile">
                            <h3>ДЕПОЗИТ</h3>
                            <h4>5000 AED</h4>
                        </div>
                        <span class="dep__mobile">-</span>
                        <h3><span id="end__price">50000</span> AED</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function begin_date() {
            let input_taker = document.getElementById('datepicker').value;
            console.log(Number(input_taker[0] + input_taker[1]))
            document.getElementById('begin__date').innerHTML = input_taker;
            return Number(input_taker[0] + input_taker[1])
        }

        function end_date() {
            let input_taker = document.getElementById('datepicker2').value;
            document.getElementById('end__date').innerHTML = input_taker;
            return Number(input_taker[0] + input_taker[1])
        }

        function cars_date() {
            let input_taker = document.getElementById('cars_picker').value;

            let pictureList = {
                "Rolls Royce Cullinan": "4500",
                "Rolls Royce Dawn": "3600",
                "Bentley Bentayga": "4000",
                "Ferrari F8": "4000",
                "Ferrari Portofino": "3600",
                "Lamborghini URUS": "4500",
                "Lamborghini Huracan 2022": "3300",
                "Lamborghini Huracan 2023": "4500",
                "Mercedes G63": "2000",
                "Porsche 911": "1800",
                "Porsche Cayman 718": "3200"
            }

            let start_date = begin_date()
            let fis_date = end_date()
            let finish_date = fis_date - start_date
            let finish_price = Number(pictureList[input_taker]) * finish_date + 5000
            document.getElementById('end__day').innerHTML = finish_date;
            document.getElementById('end__price').innerHTML = finish_price;

            let cars_date =  Number(input_taker)
            return cars_date
        }
    </script>

    <section class="rent" id="rent">
        <div class="container">
            <h3 class="rent__logo">Форма<br class="mobile__transfer"> для заявки<br class="mobile__transfer"> на аренду</h3>
            <h4 class="rent__bron">оставить заявку<br class="mobile__transfer"> на бронирование автомобиля</h4>

            <?php

            $email_admin = "";

            if(isset($_POST['phone__rent']) and isset($_POST['email__rent']) and isset($_POST['name__rent']) and isset($_POST['comm__rent'])) {
                $email = $_POST['phone__rent'];
                $phone = $_POST['email__rent'];
                $name = $_POST['name__rent'];
                $comm = $_POST['comm__rent'];

                $headers  = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html; charset=utf-8\r\n";
                $headers .= "To: <$email>\r\n";
                $headers .= "From: <mail@example.com>\r\n";

                $message = "
                    <html>
                    <head>
                        <title>Aiwa.ru</title>
                    </head>
                    <body>
                        <p>E-mail: $email</p>
                        <p>Телефон: $phone</p>
                        <p>Имя: $name</p>
                        <p>Комментарий: $comm</p>
                    </body>
                    </html>
                ";
                mail($email_admin, "Заказ", $message, $headers);
                echo "<style> .form__block__thx { display: block; } .btn__thx {display: none;} </style>";
            }
            ?>

            <form class="rent__inner" method="POST" action="/#rent">
                <div class="rent__cars">
                    <h3 class="change_text">Rolls Royce Cullinan</h3>
                    <img class="change__rent__car" src="image/form/Rolls-Royce-Cullinan-1-transformed.png" height="347px" alt="">
                    <div class="rent__select">
                        <!-- <h4>Выбрать другой автомобиль</h4> -->
                        <select id="rent_change">
                            <option value="Rolls Royce Cullinan">Выбрать другой автомобиль</option>
                            <option value="Rolls Royce Cullinan">Rolls Royce Cullinan</option>
                            <option value="Rolls Royce Dawn">Rolls Royce Dawn</option>
                            <option value="Bentley Bentayga">Bentley Bentayga</option>
                            <option value="Ferrari F8">Ferrari F8</option>
                            <option value="Ferrari Portofino">Ferrari Portofino</option>
                            <option value="Lamborghini URUS">Lamborghini URUS</option>
                            <option value="Lamborghini Huracan 2022">Lamborghini Huracan 2022</option>
                            <option value="Lamborghini Huracan 2023">Lamborghini Huracan 2023</option>
                            <option value="Mercedes G63">Mercedes G63</option>
                            <option value="Porsche 911">Porsche 911</option>
                            <option value="Porsche Cayman 718">Porsche Cayman 718</option>
                        </select>
                        <img class="select__rent__image" src="image/icon/cross20.svg" alt="">
                    </div>
                    <div class="rent__shadow"></div>
                </div>
                <div class="rent__date">
                    <div class="rent__begin__date rent__begin__mobile">
                        <h3>Дата начала</h3>
                        <div class="date__select rent__select__mobile">
                            <!-- <h3>выберите дату</h3> -->
                            <input type="text" id="datepicker3" class="date3" readonly="readonly" placeholder="выберите дату ">
                            <img src="image/icon/cross_date.svg" alt="">
                        </div>
                    </div>
                    <div class="rent__end__date rent__begin__mobile">
                        <h3>Дата окончания</h3>
                        <div class="date__select rent__select__mobile">
                            <!-- <h3>выберите дату</h3> -->
                            <input type="text" id="datepicker4" class="date4" readonly="readonly" placeholder="выберите дату ">
                            <img src="image/icon/cross_date.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="rent__data">
                    <input name="phone__rent" type="text" placeholder="Телефон" required />
                    <input name="email__rent" type="text" placeholder="e-mail" required />
                    <input name="name__rent" type="text" placeholder="имя" required />
                </div>
                <div class="rent__btn">
                    <textarea name="comm__rent" cols="30" rows="10" placeholder="комментарий"></textarea>
                    <button class="btn__thx">Забронировать</button>
                    <div class="form__thx form__block__thx">
                        <h3>Спасибо!</h3>
                        <p>Наш менеджер свяжется с Вами в ближайшее время</p>
                    </div>
                </div>
            </form>
            <p class="rent__bron__date">Нажимая на кнопку “Забронировать”, вы соглашаетесь на обработку персональных данных и принимаете Политику конфиденциальности</p>
        </div>
    </section>

    <section class="how" id="how">
        <div class="container">
            <h3 class="how__logo">Как арендовать автомобиль</h3>
            <h4 class="how__step">Аренда автомобиля в AIWA - это 5 простых шагов, которые займут у вас не более 5 минут!</h4>
            <div class="how__inner">
                <div class="how__item">
                    <div class="how__icon1"></div>
                    <h3 class="span">Оставьте заявку</h3>
                    <h4>на аренду через специальную форму или в любом удобном мессенджере</h4>
                </div>
                <div class="how__item">
                    <div class="how__icon2"></div>
                    <h3>Наши менеджеры</h3>
                    <h4>свяжутся с вами в течение 15 минут, чтобы подтвердить бронь</h4>
                </div>
                <div class="how__item">
                    <div class="how__icon3"></div>
                    <h3>Мы доставим</h3>
                    <h4>автомобиль в согласованное время и место в Дубае</h4>
                </div>
                <div class="how__item">
                    <div class="how__icon4"></div>
                    <h3>После</h3>
                    <h4>внимательного осмотра автомобиля вы подписываете контракт и оплачиваете аренду</h4>
                </div>
                <div class="how__item">
                    <div class="how__icon5"></div>
                    <h3>Получаете</h3>
                    <h4>удовольствие и неповторимые эмоции от поездок на люксовом авто</h4>
                </div>
            </div>

            <div class="swiper">
                <div class="how__inner__mobile">
                    <div class="how__item swiper-slide" style="max-width: 255.64px; height: 248.69px;">
                        <div class="how__icon1"></div>
                        <h3 class="span">Оставьте заявку</h3>
                        <h4>на аренду через специальную форму или в любом удобном мессенджере</h4>
                    </div>
                    <div class="how__item swiper-slide" style="max-width: 255.64px; height: 248.69px;">
                        <div class="how__icon2"></div>
                        <h3>Наши менеджеры</h3>
                        <h4>свяжутся с вами в течение 15 минут, чтобы подтвердить бронь</h4>
                    </div>
                    <div class="how__item swiper-slide" style="max-width: 255.64px; height: 248.69px;">
                        <div class="how__icon3"></div>
                        <h3>Мы доставим</h3>
                        <h4>автомобиль в согласованное время и место в Дубае</h4>
                    </div>
                    <div class="how__item swiper-slide" style="max-width: 255.64px; height: 248.69px;">
                        <div class="how__icon4"></div>
                        <h3>После</h3>
                        <h4>внимательного осмотра автомобиля вы подписываете контракт и оплачиваете аренду</h4>
                    </div>
                    <div class="how__item swiper-slide" style="max-width: 255.64px; height: 248.69px;">
                        <div class="how__icon5"></div>
                        <h3>Получаете</h3>
                        <h4>удовольствие и неповторимые эмоции от поездок на люксовом авто</h4>
                    </div>
                </div>
              </div>
            <div class="how__btn">
                <a href="#rent">Забронировать</a>
            </div>
        </div>
    </section>

    <section class="cond" id="cond">
        <div class="container">
            <h3 class="cond__logo">Условия аренды</h3>
            <div class="cars__swipe">
                <img src="image/icon/swipe.svg" alt="">
                <span>листайте</span>
            </div>
            <div class="cond__inner">
                <div class="cond__item" style="max-height: 908px; z-index: 9999;">
                    <p class="cond__name">Оплата и комиссии</p>
                    <div class="cond__blur cond__text">
                        <ul>
                            <li>Вы можете произвести оплату наличными средствами, дебетовой картой ….</li>
                        </ul>
                    </div>
                    <div class="cond__text cond__text__open" style="display: none;">
                        <ul>
                            <li>Вы можете произвести оплату наличными средствами, дебетовой картой ….</li>
                            <li>До начала аренды необходимо внести Депозит и оплатить весь период аренды</li>
                            <li>Мы возвращаем Депозит в течение 21 дня со дня окончания срока аренды</li>
                            <li>Внесенный Депозит может быть израсходован на оплату любых штрафов, платного проезда Salik, 
                            ремонта повреждений и прочего. В случае если сумма указанных расходов превышает 20% Депозита, то они должны быть оплачены немедленно.</li>
                        </ul>
                    </div>
                    <div class="cond__btn">
                        <h4 class="cond__open">подробнее</h4>
                        <h4 class="cond__close" style="display: none;">скрыть</h4>
                        <img class="cond__image" src="image/icon/cross6.svg" alt="">
                    </div>
                    <div class="cond__shadow"></div>
                </div>
                <div class="cond__item" style="max-height: 908px; z-index: 9999;">
                    <p class="cond__name">Автомобиль</p>
                    <div class="cond__blur cond__text">
                        <ul>
                            <li>Автомобиль предоставляется в технически исправном состоянии, полностью</li>
                        </ul>
                    </div>
                    <div class="cond__text cond__text__open" style="display: none;">
                        <ul>
                            <li>Автомобиль предоставляется в технически исправном состоянии, полностью заправленный и чистый</li>
                            <li>Любой видимый дефект, который вы увидели при осмотре автомобиля до начала аренды, должен быть зафиксирован и задокументирован обеими сторонами</li>
                            <li>Автомобиль должен быть возвращен в таком же состоянии, в каком был получен</li>
                            <li>Мы оставляем за собой право истребовать Автомобиль без предупреждения, в случае если он используется в нарушении заключённого контракта.</li>
                        </ul>
                    </div>
                    <div class="cond__btn">
                        <h4 class="cond__open">подробнее</h4>
                        <h4 class="cond__close" style="display: none;">скрыть</h4>
                        <img class="cond__image" src="image/icon/cross6.svg" alt="">
                    </div>
                    <div class="cond__shadow"></div>
                </div>
                <div class="cond__item" style="max-height: 908px; z-index: 9999;">
                    <p class="cond__name">Требования к водителю</p>
                    <div class="cond__blur cond__text">
                        <ul>
                            <li>Водитель/Арендатор должен быть не моложе 23 лет</li>
                        </ul>
                    </div>
                    <div class="cond__text cond__text__open" style="display: none;">
                        <ul>
                            <li>Водитель/Арендатор должен быть не моложе 23 лет</li>
                            <li>Стаж вождения - не менее 1 года</li>
                            <li>Срок окончания водительского удостоверения должен заканчиваться не раньше 1 года с момента окончания срока аренды</li>
                        </ul>
                    </div>
                    <div class="cond__btn">
                        <h4 class="cond__open">подробнее</h4>
                        <h4 class="cond__close" style="display: none;">скрыть</h4>
                        <img class="cond__image" src="image/icon/cross6.svg" alt="">
                    </div>
                    <div class="cond__shadow"></div>
                </div>
            </div>
            <div class="cond__inner">
                <div class="cond__item" style="max-height: 908px; z-index: 9998;">
                    <p class="cond__name">Требуемые документы</p>
                    <div class="cond__blur cond__text">
                        <ul>
                            <li>Действительное Удостоверение ОАЭ,</li>
                            <li>Паспорт с действительным местом</li>
                        </ul>
                    </div>
                    <div class="cond__text cond__text__open" style="display: none;">
                        <ul>
                            <li>Действительное Удостоверение ОАЭ,</li>
                            <li>Паспорт с действительным местом жительства</li>
                            <li>Водительское удостоверение той же страны, что и идентификационный документ. (Для нерезидентов Международное Водительское удостоверение, в зависимости от страны)</li>
                            <li>Штамп о въезде или Туристическая виза.</li>
                        </ul>
                    </div>
                    <div class="cond__btn">
                        <h4 class="cond__open">подробнее</h4>
                        <h4 class="cond__close" style="display: none;">скрыть</h4>
                        <img class="cond__image" src="image/icon/cross6.svg" alt="">
                    </div>
                    <div class="cond__shadow"></div>
                </div>
                <div class="cond__item" style="max-height: 908px; z-index: 9998;">
                    <p class="cond__name">Дополнительный водитель</p>
                    <div class="cond__blur cond__text">
                        <ul>
                            <li>Разрешен дополнительный водитель, если он удовлетворяет требованиям, которые</li>
                        </ul>
                    </div>
                    <div class="cond__text cond__text__open" style="display: none;">
                        <ul>
                            <li>Разрешен дополнительный водитель, если он удовлетворяет требованиям, которые предъявляются к водителю</li>
                            <li>Дополнительный водитель указывается в Контракте</li>
                        </ul>
                    </div>
                    <div class="cond__btn" class="cond2">
                        <h4 class="cond__open">подробнее</h4>
                        <h4 class="cond__close" style="display: none;">скрыть</h4>
                        <img class="cond__image" src="image/icon/cross6.svg" alt="">
                    </div>
                    <div class="cond__shadow"></div>
                </div>
                <div class="cond__item" style="max-height: 908px; z-index: 9998;">
                    <p class="cond__name">Доставка и география</p>
                    <div class="cond__blur cond__text">
                        <ul>
                            <li>Мы БЕСПЛАТНО доставим вам автомобиль в согласованное время и место в Дубае</li>
                        </ul>
                    </div>
                    <div class="cond__text cond__text__open" style="display: none;">
                        <ul>
                            <li> Мы БЕСПЛАТНО доставим вам автомобиль в согласованное время и место в Дубае</li>
                            <li>Доставка за пределами г. Дубай производится за дополнительную плату и рассчитывается в зависимости от местоположения</li>
                            <li>Все услуги компании и пользование автомобилем осуществляется только в пределах ОАЭ</li>
                            <li>Арендатор обязан запросить разрешение на пересечение границы ОАЭ. Мы оставляем за собой право разрешить или отклонить данный запрос.</li>
                        </ul>
                    </div>
                    <div class="cond__btn" class="cond2">
                        <h4 class="cond__open">подробнее</h4>
                        <h4 class="cond__close" style="display: none;">скрыть</h4>
                        <img class="cond__image" src="image/icon/cross6.svg" alt="">
                    </div>
                    <div class="cond__shadow"></div>
                </div>
            </div>
            <div class="cond__inner">
                <div class="cond__item" style="max-height: 908px; z-index: 9997;">
                    <p class="cond__name">Срок аренды</p>
                    <div class="cond__blur cond__text">
                        <ul>
                            <li>Период аренды автомобиля исчисляется посуточно, понедельно или помесячно.</li>
                        </ul>
                    </div>
                    <div class="cond__text cond__text__open" style="display: none;">
                        <ul>
                            <li>Период аренды автомобиля исчисляется посуточно, понедельно или помесячно. Суточный период аренды - 24 часа</li>
                            <li>После истечения суточного периода аренды предоставляется льготный период 1 час</li>
                            <li>При задержке возврата авто взимается дополнительная плата:</li>
                            <li>свыше 1 часа после окончания суточного периода аренды, но менее 2 часов - 20% от стоимости суточного периода;</li>
                            <li>до 3 часов, но менее 2 часов - ½ от стоимости суточного периода;</li>
                            <li>При необоснованной задержке возврата автомобиля или недоступности Арендатора для связи, мы оставляем за собой право дистанционно остановить двигатель автомобиля.</li>
                            <li>При досрочном возвращении автомобиля возмещение средств за неиспользованное время не производится</li>
                            <li>Разрешается продлить аренду при отсутствии бронирования данного авто и с предварительного согласия Владельца.</li>
                        </ul>
                    </div>
                    <div class="cond__btn">
                        <h4 class="cond__open">подробнее</h4>
                        <h4 class="cond__close" style="display: none;">скрыть</h4>
                        <img class="cond__image" src="image/icon/cross6.svg" alt="">
                    </div>
                    <div class="cond__shadow"></div>
                </div>
                <div class="cond__item" style="max-height: 908px; z-index: 9997;">
                    <p class="cond__name">В дороге</p>
                    <div class="cond__blur cond__text">
                        <ul>
                            <li>Суточный норматив аренды автомобиля включает ограниченное количество</li>
                        </ul>
                    </div>
                    <div class="cond__text cond__text__open" style="display: none;">
                        <ul>
                            <li>Суточный норматив аренды автомобиля включает ограниченное количество пробега, который указывается в контракте на каждый автомобиль</li>
                            <li>За каждый 1 км превышения суточного норматива пробега взимается дополнительная плата, которая определяется в контракте на каждый автомобиль</li>
                            <li>Автомобиль разрешается использовать только по дорогам общего пользования</li>
                            <li>Водитель/Арендатор должен соблюдать все правила дорожного движения и несет ответственность за штрафы, связанные с нарушением правил дорожного движения</li>
                            <li>Управлять автомобилем имеют право только зарегистрированные в контракте лица</li>
                            <li>Мы не несем ответственности за любые вещи Арендатора, оставленные или утерянные в автомобиле во время его арендования. Однако в случае обнаружения имущества Арендатора после возврата автомобиля мы храним его в течение 1 месяца</li>
                        </ul>
                    </div>
                    <div class="cond__btn">
                        <h4 class="cond__open">подробнее</h4>
                        <h4 class="cond__close" style="display: none;">скрыть</h4>
                        <img class="cond__image" src="image/icon/cross6.svg" alt="">
                    </div>
                    <div class="cond__shadow"></div>
                </div>
                <div class="cond__item" style="max-height: 908px; z-index: 9997;">
                    <p class="cond__name">Запрещено</p>
                    <div class="cond__blur cond__text">
                        <ul>
                            <li>Курение в автомобиле</li>
                            <li>Участие арендуемого автомобиля в гонках</li>
                        </ul>
                    </div>
                    <div class="cond__text cond__text__open" style="display: none;">
                        <ul>
                            <li>Курение в автомобиле</li>
                            <li>Участие арендуемого автомобиля в гонках, соревнованиях или тестах любого типа</li>
                            <li>Перевозка пассажиров в качестве такси и любого другого частного извоза коммерческого характера</li>
                            <li>Перевозка предметов, представляющих опасность повреждения автомобиля (включая неприятные запахи)</li>
                            <li>Перевозка незаконных веществ (алкоголь, наркотики и т.д.)</li>
                            <li>Управление автомобилем под воздействием алкоголя, галлюциногенов, наркотиков, барбитуратов или любых других веществ, ухудшающих сознание или способность реагировать</li>
                            <li>Буксировка категорически запрещена</li>
                            <li>Использование автомобиля для езды по бездорожью</li>
                            <li>Управление автомобилем лицом, не указанным в договоре</li>
                            <li>Использование автомобиля за пределами ОАЭ и/или в географических областях, которые не были согласованы с Арендодателем</li>
                        </ul>
                    </div>
                    <div class="cond__btn">
                        <h4 class="cond__open">подробнее</h4>
                        <h4 class="cond__close" style="display: none;">скрыть</h4>
                        <img class="cond__image" src="image/icon/cross6.svg" alt="">
                    </div>
                    <div class="cond__shadow"></div>
                </div>
            </div>

            <div class="cond__mobile swiper">
                <div>
                    <div class="cond__inner__mobile__scroll">
                        <div class="cond__inner__mobile">
                            <div class="cond__item" style="max-height: 608px; z-index: 9999;">
                                <p class="cond__name">Оплата и комиссии</p>
                                <div class="cond__blur cond__text">
                                    <ul>
                                        <li>Вы можете произвести оплату наличными средствами, дебетовой картой ….</li>
                                    </ul>
                                </div>
                                <div class="cond__text cond__text__open" style="display: none;">
                                    <ul>
                                        <li>Вы можете произвести оплату наличными средствами, дебетовой картой ….</li>
                                        <li>До начала аренды необходимо внести Депозит и оплатить весь период аренды</li>
                                        <li>Мы возвращаем Депозит в течение 21 дня со дня окончания срока аренды</li>
                                        <li>Внесенный Депозит может быть израсходован на оплату любых штрафов, платного проезда Salik, 
                                        ремонта повреждений и прочего. В случае если сумма указанных расходов превышает 20% Депозита, то они должны быть оплачены немедленно.</li>
                                    </ul>
                                </div>
                                <div class="cond__btn">
                                    <h4 class="cond__open">подробнее</h4>
                                    <h4 class="cond__close" style="display: none;">скрыть</h4>
                                    <img class="cond__image" src="image/icon/cross6.svg" alt="">
                                </div>
                            </div>
                            <div class="cond__item" style="max-height: 658px; z-index: 9998;">
                                <p class="cond__name">Автомобиль</p>
                                <div class="cond__blur cond__text">
                                    <ul>
                                        <li>Автомобиль предоставляется в технически исправном состоянии, полностью</li>
                                    </ul>
                                </div>
                                <div class="cond__text cond__text__open" style="display: none;">
                                    <ul>
                                        <li>Автомобиль предоставляется в технически исправном состоянии, полностью заправленный и чистый</li>
                                        <li>Любой видимый дефект, который вы увидели при осмотре автомобиля до начала аренды, должен быть зафиксирован и задокументирован обеими сторонами</li>
                                        <li>Автомобиль должен быть возвращен в таком же состоянии, в каком был получен</li>
                                        <li>Мы оставляем за собой право истребовать Автомобиль без предупреждения, в случае если он используется в нарушении заключённого контракта.</li>
                                    </ul>
                                </div>
                                <div class="cond__btn">
                                    <h4 class="cond__open">подробнее</h4>
                                    <h4 class="cond__close" style="display: none;">скрыть</h4>
                                    <img class="cond__image" src="image/icon/cross6.svg" alt="">
                                </div>
                            </div>
                            <div class="cond__item" style="max-height: 438px; z-index: 9997;">
                                <p class="cond__name">Требования к водителю</p>
                                <div class="cond__blur cond__text">
                                    <ul>
                                        <li>Водитель/Арендатор должен быть не моложе 23 лет</li>
                                    </ul>
                                </div>
                                <div class="cond__text cond__text__open" style="display: none;">
                                    <ul>
                                        <li>Водитель/Арендатор должен быть не моложе 23 лет</li>
                                        <li>Стаж вождения - не менее 1 года</li>
                                        <li>Срок окончания водительского удостоверения должен заканчиваться не раньше 1 года с момента окончания срока аренды</li>
                                    </ul>
                                </div>
                                <div class="cond__btn">
                                    <h4 class="cond__open">подробнее</h4>
                                    <h4 class="cond__close" style="display: none;">скрыть</h4>
                                    <img class="cond__image" src="image/icon/cross6.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="cond__inner__mobile">
                            <div class="cond__item" style="max-height: 508px; z-index: 9999;">
                                <p class="cond__name">Требуемые документы</p>
                                <div class="cond__blur cond__text">
                                    <ul>
                                        <li>Действительное Удостоверение ОАЭ,</li>
                                        <li>Паспорт с действительным местом</li>
                                    </ul>
                                </div>
                                <div class="cond__text cond__text__open" style="display: none;">
                                    <ul>
                                        <li>Действительное Удостоверение ОАЭ,</li>
                                        <li>Паспорт с действительным местом жительства</li>
                                        <li>Водительское удостоверение той же страны, что и идентификационный документ. (Для нерезидентов Международное Водительское удостоверение, в зависимости от страны)</li>
                                        <li>Штамп о въезде или Туристическая виза.</li>
                                    </ul>
                                </div>
                                <div class="cond__btn">
                                    <h4 class="cond__open">подробнее</h4>
                                    <h4 class="cond__close" style="display: none;">скрыть</h4>
                                    <img class="cond__image" src="image/icon/cross6.svg" alt="">
                                </div>
                            </div>
                            <div class="cond__item" style="max-height: 308px; z-index: 9998;">
                                <p class="cond__name">Дополнительный водитель</p>
                                <div class="cond__blur cond__text">
                                    <ul>
                                        <li>Разрешен дополнительный водитель, если он удовлетворяет требованиям, которые</li>
                                    </ul>
                                </div>
                                <div class="cond__text cond__text__open" style="display: none;">
                                    <ul>
                                        <li>Разрешен дополнительный водитель, если он удовлетворяет требованиям, которые предъявляются к водителю</li>
                                        <li>Дополнительный водитель указывается в Контракте</li>
                                    </ul>
                                </div>
                                <div class="cond__btn">
                                    <h4 class="cond__open">подробнее</h4>
                                    <h4 class="cond__close" style="display: none;">скрыть</h4>
                                    <img class="cond__image" src="image/icon/cross6.svg" alt="">
                                </div>
                            </div>
                            <div class="cond__item" style="max-height: 548px; z-index: 9997;">
                                <p class="cond__name">Доставка и география</p>
                                <div class="cond__blur cond__text">
                                    <ul>
                                        <li>Мы БЕСПЛАТНО доставим вам автомобиль в согласованное время и место в Дубае</li>
                                    </ul>
                                </div>
                                <div class="cond__text cond__text__open" style="display: none;">
                                    <ul>
                                        <li> Мы БЕСПЛАТНО доставим вам автомобиль в согласованное время и место в Дубае</li>
                                        <li>Доставка за пределами г. Дубай производится за дополнительную плату и рассчитывается в зависимости от местоположения</li>
                                        <li>Все услуги компании и пользование автомобилем осуществляется только в пределах ОАЭ</li>
                                        <li>Арендатор обязан запросить разрешение на пересечение границы ОАЭ. Мы оставляем за собой право разрешить или отклонить данный запрос.</li>
                                    </ul>
                                </div>
                                <div class="cond__btn">
                                    <h4 class="cond__open">подробнее</h4>
                                    <h4 class="cond__close" style="display: none;">скрыть</h4>
                                    <img class="cond__image" src="image/icon/cross6.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="cond__inner__mobile">
                            <div class="cond__item" style="max-height: 908px; z-index: 9999;">
                                <p class="cond__name">Срок аренды</p>
                                <div class="cond__blur cond__text">
                                    <ul>
                                        <li>Период аренды автомобиля исчисляется посуточно, понедельно или помесячно.</li>
                                    </ul>
                                </div>
                                <div class="cond__text cond__text__open" style="display: none;">
                                    <ul>
                                        <li>Период аренды автомобиля исчисляется посуточно, понедельно или помесячно. Суточный период аренды - 24 часа</li>
                                        <li>После истечения суточного периода аренды предоставляется льготный период 1 час</li>
                                        <li>При задержке возврата авто взимается дополнительная плата:</li>
                                        <li>свыше 1 часа после окончания суточного периода аренды, но менее 2 часов - 20% от стоимости суточного периода;</li>
                                        <li>до 3 часов, но менее 2 часов - ½ от стоимости суточного периода;</li>
                                        <li>При необоснованной задержке возврата автомобиля или недоступности Арендатора для связи, мы оставляем за собой право дистанционно остановить двигатель автомобиля.</li>
                                        <li>При досрочном возвращении автомобиля возмещение средств за неиспользованное время не производится</li>
                                        <li>Разрешается продлить аренду при отсутствии бронирования данного авто и с предварительного согласия Владельца.</li>
                                    </ul>
                                </div>
                                <div class="cond__btn">
                                    <h4 class="cond__open">подробнее</h4>
                                    <h4 class="cond__close" style="display: none;">скрыть</h4>
                                    <img class="cond__image" src="image/icon/cross6.svg" alt="">
                                </div>
                            </div>
                            <div class="cond__item" style="max-height: 908px; z-index: 9998;">
                                <p class="cond__name">В дороге</p>
                                <div class="cond__blur cond__text">
                                    <ul>
                                        <li>Суточный норматив аренды автомобиля включает ограниченное количество</li>
                                    </ul>
                                </div>
                                <div class="cond__text cond__text__open" style="display: none;">
                                    <ul>
                                        <li>Суточный норматив аренды автомобиля включает ограниченное количество пробега, который указывается в контракте на каждый автомобиль</li>
                                        <li>За каждый 1 км превышения суточного норматива пробега взимается дополнительная плата, которая определяется в контракте на каждый автомобиль</li>
                                        <li>Автомобиль разрешается использовать только по дорогам общего пользования</li>
                                        <li>Водитель/Арендатор должен соблюдать все правила дорожного движения и несет ответственность за штрафы, связанные с нарушением правил дорожного движения</li>
                                        <li>Управлять автомобилем имеют право только зарегистрированные в контракте лица</li>
                                        <li>Мы не несем ответственности за любые вещи Арендатора, оставленные или утерянные в автомобиле во время его арендования. Однако в случае обнаружения имущества Арендатора после возврата автомобиля мы храним его в течение 1 месяца</li>
                                    </ul>
                                </div>
                                <div class="cond__btn">
                                    <h4 class="cond__open">подробнее</h4>
                                    <h4 class="cond__close" style="display: none;">скрыть</h4>
                                    <img class="cond__image" src="image/icon/cross6.svg" alt="">
                                </div>
                            </div>
                            <div class="cond__item" style="max-height: 908px; z-index: 9997;">
                                <p class="cond__name">Запрещено</p>
                                <div class="cond__blur cond__text">
                                    <ul>
                                        <li>Курение в автомобиле</li>
                                        <li>Участие арендуемого автомобиля в гонках</li>
                                    </ul>
                                </div>
                                <div class="cond__text cond__text__open" style="display: none;">
                                    <ul>
                                        <li>Курение в автомобиле</li>
                                        <li>Участие арендуемого автомобиля в гонках, соревнованиях или тестах любого типа</li>
                                        <li>Перевозка пассажиров в качестве такси и любого другого частного извоза коммерческого характера</li>
                                        <li>Перевозка предметов, представляющих опасность повреждения автомобиля (включая неприятные запахи)</li>
                                        <li>Перевозка незаконных веществ (алкоголь, наркотики и т.д.)</li>
                                        <li>Управление автомобилем под воздействием алкоголя, галлюциногенов, наркотиков, барбитуратов или любых других веществ, ухудшающих сознание или способность реагировать</li>
                                        <li>Буксировка категорически запрещена</li>
                                        <li>Использование автомобиля для езды по бездорожью</li>
                                        <li>Управление автомобилем лицом, не указанным в договоре</li>
                                        <li>Использование автомобиля за пределами ОАЭ и/или в географических областях, которые не были согласованы с Арендодателем</li>
                                    </ul>
                                </div>
                                <div class="cond__btn">
                                    <h4 class="cond__open">подробнее</h4>
                                    <h4 class="cond__close" style="display: none;">скрыть</h4>
                                    <img class="cond__image" src="image/icon/cross6.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>

    <section class="info" id="info">
        <div class="container">
            <h3 class="info__logo">О компании “AIWA Rent a Car”</h3>
        </div>
        <div class="info__bg">
            <div class="container">
                <div class="info__inner">
                    <div class="info__item">
                        <p>
                            Компания AIWA rent a car основана в 2022 году. Наш автопарк создан специально под потребности активных осознанных людей, 
                            которые ценят свое время, комфорт и привыкли окружать себя только самым лучшим.
                        </p>
                        <p>
                            Название бренда не случайно! AIWA в переводе с арабского означает “Yes”! Скажите 
                            “Yes” своей уникальности, комфорту и безупречной роскоши!У нас вы можете 
                            выбрать автомобили класса “Люкс”: Rolls-Royce, Bentley, Mercedes-Benz, Ferrari, Lamborghini, Porsche.
                        </p>
                        <h3>Мы делаем все, чтобы наши клиенты сохраняли
                            свой привычный ритм и уровень жизни</h3>
                    </div>
                    <div class="info__item">
                        <h3>AIWA Rent a Car - технологичная развивающаяся компания</h3>
                        <p>
                            К каждому клиенту мы применяем индивидуальный подход и заботимся
                            о вашем комфорте в поездках на протяжении всего срока аренды автомобиля.
                        </p>
                        <p>Мы понимаем, что жизнь современного человека неразрывно связана с технологиями, 
                            поэтому постоянно совершенствуем свои бизнес-процессы и процессы взаимодействия с клиентами 
                            путем внедрения инновационных методов. Все наши автомобили не старше 2019 года выпуска и оснащены 
                            современными системами, которые делают ваши поездки максимально безопасными, легкими и комфортными.
                        </p>
                    </div>
                </div>
                <div class="swiper">
                    <div>
                        <div class="info__item__2">
                            <h3 style="border-bottom: 1px solid #EDC89E; text-align: left;">Мы делаем все, чтобы наши клиенты сохраняли свой привычный ритм и уровень жизни</h3>
                        </div>
                        <div class="info__inner__mobile">
                            <div class="info__item" style="margin-left: 20px;">
                                <div class="cars__swipe">
                                    <img src="image/icon/swipe.svg" alt="">
                                    <span>листайте</span>
                                </div>
                                <p>
                                    К каждому клиенту мы применяем индивидуальный подход и заботимся
                                    о вашем комфорте в поездках на протяжении всего срока аренды автомобиля.
                                </p>
                                <p>Мы понимаем, что жизнь современного человека неразрывно связана с технологиями, 
                                    поэтому постоянно совершенствуем свои бизнес-процессы и процессы взаимодействия с клиентами 
                                    путем внедрения инновационных методов. Все наши автомобили не старше 2019 года выпуска и оснащены 
                                    современными системами, которые делают ваши поездки максимально безопасными, легкими и комфортными.
                                </p>
                            </div>
                            <div class="info__item " style="margin-left: 20px;">
                                <p>
                                    Компания AIWA rent a car основана в 2022 году. Наш автопарк создан специально под потребности активных осознанных людей, 
                                    которые ценят свое время, комфорт и привыкли окружать себя только самым лучшим.
                                </p>
                                <p>
                                    Название бренда не случайно! AIWA в переводе с арабского означает “Yes”! Скажите 
                                    “Yes” своей уникальности, комфорту и безупречной роскоши!У нас вы можете 
                                    выбрать автомобили класса “Люкс”: Rolls-Royce, Bentley, Mercedes-Benz, Ferrari, Lamborghini, Porsche.
                                </p>
                                <h3 style="border-top: 1px solid #EDC89E; text-align: left;">AIWA Rent a Car - технологичная развивающаяся компания </h3>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>

    <section class="values" id="values">
        <div class="container">
            <h3 class="values__logo">Наши ценности</h3>
            <div class="values__inner">
                <div class="values__item" style="max-height: 733px;">
                    <p class="values__name">Качественные <span>коммуникации и клиентоориентированность</span></p>
                    <div class="values__blur values__text">
                        <p>Мы создаем вокруг себя <i class="values__allocator">здоровую коммуникационную среду.</i></p>
                    </div>
                    <div class="values__text values__text__open" style="display: none;">
                        <p>Мы создаем вокруг себя <i class="values__allocator">здоровую коммуникационную среду.</i></p>
                        <p>Количеству мы предпочтем качество взаимодействия.
                            Поэтому наши отношения с клиентами и партнерами строятся <i class="values__allocator">на принципах долгосрочности и понимания ключевых потребностей, предпочтений и ценностей.</i></p>
                        <p>Благодаря этому у наших клиентов всегда самые выгодные и эксклюзивные условия, которые подходят именно им.</p>
                    </div>
                    <div class="values__btn">
                        <h4 class="values__open">подробнее</h4>
                        <h4 class="values__close" style="display: none;">скрыть</h4>
                        <img class="values__image" src="image/icon/cross6.svg" alt="">
                    </div>
                    <div class="values__shadow"></div>
                </div>
                <div class="values__item" style="max-height: 683px;">
                    <p class="values__name">Развитие <span>и совершенствование</span></p>
                    <div class="values__blur values__text">
                        <p>Нам важно сохранять актуальность и предлагать своим клиентам востребованные услуги</p>
                    </div>
                    <div class="values__text values__text__open" style="display: none;">
                        <p>Нам важно сохранять актуальность и предлагать своим клиентам востребованные услуги и высокий уровень сервиса.</p>
                        <p>Поэтому мы следим за трендами и динамикой развития рынка, постоянно совершенствуя свои бизнес-процессы.</p>
                        <p>Внутри компании мы создаем общую культуру непрерывного развития как в продвижении компании, так и в личностном росте.</p>
                    </div>
                    <div class="values__btn">
                        <h4 class="values__open">подробнее</h4>
                        <h4 class="values__close" style="display: none;">скрыть</h4>
                        <img class="values__image" src="image/icon/cross6.svg" alt="">
                    </div>
                    <div class="values__shadow"></div>
                </div>
                <div class="values__item" style="max-height: 758px;">
                    <p class="values__name">Технологичность <span>и оптимизация бизнес-процессов</span></p>
                    <div class="values__blur values__text">
                        <p>Нам важна удовлетворенность клиентов и их комфорт при взаимодействии с нами.</p>
                    </div>
                    <div class="values__text values__text__open" style="display: none;">
                        <p>Нам важна удовлетворенность клиентов и их комфорт при взаимодействии с нами.</p>
                        <p>Мы также ценим своих сотрудников и хотим, чтобы работа не вызывала у них стресс и повышенную нагрузку.
                            Поэтому в своей компании мы придерживаемся принципов оптимизации труда и увеличения продуктивности.<br> Для этого мы используем и внедряем современные технологичные инструменты как для коммуникации внутри компании и с клиентами, так и в управлении бизнес-процессами.
                            </p>
                    </div>
                    <div class="values__btn">
                        <h4 class="values__open">подробнее</h4>
                        <h4 class="values__close" style="display: none;">скрыть</h4>
                        <img class="values__image" src="image/icon/cross6.svg" alt="">
                    </div>
                    <div class="values__shadow"></div>
                </div>
                <div class="values__item" style="max-height: 381px;">
                    <p class="values__name">Репутация <span class="values__rm">и прозрачность работы</span></p>
                    <div class="values__blur values__text">
                        <p>Мы дорожим своей репутацией и не используем в работе методов, которые могут ей навредить.</p>
                    </div>
                    <div class="values__text values__text__open" style="display: none;">
                        <p>Мы дорожим своей репутацией и не используем в работе методов, которые могут ей навредить.<br>
                            Все наши услуги прозрачны и взаимовыгодны.</p>

                    </div>
                    <div class="values__btn">
                        <h4 class="values__open">подробнее</h4>
                        <h4 class="values__close" style="display: none;">скрыть</h4>
                        <img class="values__image" src="image/icon/cross6.svg" alt="">
                    </div>
                    <div class="values__shadow"></div>
                </div>
            </div>
            <div class="swiper">
                <div class="values__inner__mobile">
                    <div class="values__item swiper-slide" style="max-height: 833px;">
                        <p class="values__name">Качественные <span>коммуникации и клиентоориентированность</span></p>
                        <div class="values__blur values__text">
                            <p>Мы создаем вокруг себя <i class="values__allocator">здоровую коммуникационную среду.</i></p>
                        </div>
                        <div class="values__text values__text__open" style="display: none;">
                            <p>Мы создаем вокруг себя <i class="values__allocator">здоровую коммуникационную среду.</i></p>
                            <p>Количеству мы предпочтем качество взаимодействия.
                                Поэтому наши отношения с клиентами и партнерами строятся <i class="values__allocator">на принципах долгосрочности и понимания ключевых потребностей, предпочтений и ценностей.</i></p>
                            <p>Благодаря этому у наших клиентов всегда самые выгодные и эксклюзивные условия, которые подходят именно им.</p>
                        </div>
                        <div class="values__btn">
                            <h4 class="values__open">подробнее</h4>
                            <h4 class="values__close" style="display: none;">скрыть</h4>
                            <img class="values__image" src="image/icon/cross6.svg" alt="">
                        </div>
                    </div>
                    <div class="values__item swiper-slide" style="max-height: 783px;">
                        <p class="values__name">Развитие <span>и совершенствование</span></p>
                        <div class="values__blur values__text">
                            <p>Нам важно сохранять актуальность и предлагать своим клиентам востребованные услуги</p>
                        </div>
                        <div class="values__text values__text__open" style="display: none;">
                            <p>Нам важно сохранять актуальность и предлагать своим клиентам востребованные услуги и высокий уровень сервиса.</p>
                            <p>Поэтому мы следим за трендами и динамикой развития рынка, постоянно совершенствуя свои бизнес-процессы.</p>
                            <p>Внутри компании мы создаем общую культуру непрерывного развития как в продвижении компании, так и в личностном росте.</p>
                        </div>
                        <div class="values__btn">
                            <h4 class="values__open">подробнее</h4>
                            <h4 class="values__close" style="display: none;">скрыть</h4>
                            <img class="values__image" src="image/icon/cross6.svg" alt="">
                        </div>
                    </div>
                    <div class="values__item swiper-slide" style="max-height: 858px;">
                        <p class="values__name">Технологичность <span>и оптимизация бизнес-процессов</span></p>
                        <div class="values__blur values__text">
                            <p>Нам важна удовлетворенность клиентов и их комфорт при взаимодействии с нами.</p>
                        </div>
                        <div class="values__text values__text__open" style="display: none;">
                            <p>Нам важна удовлетворенность клиентов и их комфорт при взаимодействии с нами.</p>
                            <p>Мы также ценим своих сотрудников и хотим, чтобы работа не вызывала у них стресс и повышенную нагрузку.
                                Поэтому в своей компании мы придерживаемся принципов оптимизации труда и увеличения продуктивности.<br> Для этого мы используем и внедряем современные технологичные инструменты как для коммуникации внутри компании и с клиентами, так и в управлении бизнес-процессами.
                                </p>
                        </div>
                        <div class="values__btn">
                            <h4 class="values__open">подробнее</h4>
                            <h4 class="values__close" style="display: none;">скрыть</h4>
                            <img class="values__image" src="image/icon/cross6.svg" alt="">
                        </div>
                    </div>
                    <div class="values__item swiper-slide" style="max-height: 481px;">
                        <p class="values__name">Репутация <span class="values__rm">и прозрачность работы</span></p>
                        <div class="values__blur values__text">
                            <p>Мы дорожим своей репутацией и не используем в работе методов, которые могут ей навредить.</p>
                        </div>
                        <div class="values__text values__text__open" style="display: none;">
                            <p>Мы дорожим своей репутацией и не используем в работе методов, которые могут ей навредить.<br>
                                Все наши услуги прозрачны и взаимовыгодны.</p>
    
                        </div>
                        <div class="values__btn">
                            <h4 class="values__open">подробнее</h4>
                            <h4 class="values__close" style="display: none;">скрыть</h4>
                            <img class="values__image" src="image/icon/cross6.svg" alt="">
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </section>

    <section class="advantages" id="advantages">
        <img class="advantages__effect" src="image/effect/effect_sand_right.png" alt="">
        <div class="container">
            <h3 class="advantages__logo">Наши преимущества</h3>
            <div class="advantages__inner">
                <div class="advantages__item">
                    <h4>Уникальный</h4>
                    <p>контракт и услуги</p>
                </div>
                <div class="advantages__line__left"></div>
                <div class="advantages__item">
                    <h4>Все доступные</h4>
                    <p>средства оплаты (по закону)</p>
                </div>
                <div class="advantages__line__left"></div>
                <div class="advantages__item">
                    <h4>Гарантия <span>возврата</span></h4>
                    <p>депозита</p>
                </div>
                <div class="advantages__line__left"></div>
                <div class="advantages__item">
                    <h4>Программа</h4>
                    <p>лояльности</p>
                </div>
                <div class="advantages__line__left"></div>
                <div class="advantages__item">
                    <h4>Консьерж-услуги</h4>
                    <p>для VIP клиентов</p>
                </div>
            </div>
            <div class="advantages__inner right">
                <div class="advantages__item">
                    <h4>Обслуживание</h4>
                    <p>клиентов 24/7</p>
                </div>
                <div class="advantages__line__right"></div>
                <div class="advantages__item">
                    <h4>Бесплатная встреча</h4>
                    <p>и доставка в аэропорт / отель</p>
                </div>
                <div class="advantages__line__right"></div>
                <div class="advantages__item">
                    <h4>Минимальный</h4>
                    <p>набор документов</p>
                </div>
                <div class="advantages__line__right"></div>
                <div class="advantages__item">
                    <h4>Новые модели</h4>
                    <p>люксовых автомобилей</p>
                </div>
                <div class="advantages__line__right"></div>
                <div class="advantages__item">
                    <h4>Идеально чистые машины</h4>
                    <p>с полностью заправленным баком</p>
                </div>
            </div>

            <div class="advantages__inner__mobile__scroll">
                <div class="advantages__inner__mobile">
                    <div class="advantages__item">
                        <h4>Уникальный</h4>
                        <p>контракт и услуги</p>
                        <div class="advantages__line__left"></div>
                    </div>
                    <div class="advantages__item">
                        <h4>Все доступные</h4>
                        <p>средства оплаты (по закону)</p>
                        <div class="advantages__line__left"></div>
                    </div>
                    <div class="advantages__item">
                        <h4>Гарантия</h4>
                        <p><span>возврата</span> депозита</p>
                        <div class="advantages__line__left"></div>
                    </div>
                    <div class="advantages__item">
                        <h4>Программа</h4>
                        <p>лояльности</p>
                        <div class="advantages__line__left"></div>
                    </div>
                    <div class="advantages__item">
                        <h4>Консьерж-услуги</h4>
                        <p>для VIP клиентов</p>
                    </div>
                </div>
                <div class="advantages__inner__mobile right">
                    <div class="advantages__item">
                        <h4>Обслуживание</h4>
                        <p>клиентов 24/7</p>
                    </div>
                    <div class="advantages__item">
                        <h4>Бесплатная встреча</h4>
                        <p>и доставка в аэропорт / отель</p>
                        <div class="advantages__line__right"></div>
                    </div>
                    <div class="advantages__item">
                        <h4>Минимальный</h4>
                        <p>набор документов</p>
                        <div class="advantages__line__right"></div>
                    </div>
                    <div class="advantages__item">
                        <h4>Новые модели</h4>
                        <p>люксовых автомобилей</p>
                        <div class="advantages__line__right"></div>
                    </div>
                    <div class="advantages__item">
                        <h4>Идеально чистые машины</h4>
                        <p>с полностью заправленным баком</p>
                        <div class="advantages__line__right"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq" id="faq">
        <div class="container">
            <h3 class="faq__logo">FAQ</h3>
            <h4 class="faq__answer">Ответы на самые популярные вопросы</h4>
            <div>
                <details class="faq__inner">
                    <summary>
                        <p>Права получают в 18 лет, почему тогда минимальный возраст водителя
                        для аренды автомобиля должен быть 23 года?</p>
                    </summary>
                    <div class="faq__text">
                        <p>Возраст получения водительского удостоверения в некоторых странах, 
                        в том числе в ОАЭ - 21 год, а не 18 лет.</p>
                        <p>Кроме того, мы учитываем минимально необходимый стаж вождения, который должен быть не менее 1 года.</p>
                        <p>В редких исключениях мы можем рассмотреть возможность сдачи в аренду авто лицу моложе 23 лет, но достигшего 
                        возраста 22 лет. Такое решение остается полностью на наше усмотрение.</p>
                    </div>
                </details>
                <div class="faq__line"></div>
                <details class="faq__inner">
                    <summary>
                        <p>Какие способы оплаты доступны?</p>
                    </summary>
                    <div class="faq__text">
                        <p>Вы можете оплатить наличными или картами VISA или MasterCard.</p>
                        <p>При этом если ваша карта VISA/MASTERCARD имеет расчетную валюту вашей страны, то при оплате вам будет автоматически предложено оплатить в вашей валюте или в Дирхамах ОАЭ.</p>
                        <p>Вы можете сэкономить на конвертации, выбирая свою валюту</p>
                    </div>
                </details>
                <div class="faq__line"></div>
                <details class="faq__inner">
                    <summary>
                        <p>Какие условия по внесению, использованию и возврату Депозита?</p>
                    </summary>
                    <div class="faq__text">
                        <p>Депозит составляет 5000 AED. Он вносится при оформлении контракта и возвращается вам в течение 21 дня со дня окончания аренды.</p>
                        <p>21 день - это время, необходимое для полного обновления полицейской базы данных по возможным нарушениям.</p>
                        <p>Вы можете оплачивать возможные нарушения и сборы из внесённого депозита, либо оплачивать их отдельным платежом.</p>
                        <p>Если сумма штрафов и дорожных сборов будет выше 20% Депозита, то оплатить ее нужно немедленно.</p>
                    </div>
                </details>
                <div class="faq__line"></div>
                <details class="faq__inner">
                    <summary>
                        <p>Какие документы потребуются для аренды?</p>
                    </summary>
                    <div class="faq__text">
                        <ul>
                            <li>Паспорт/идентификационный документ</li>
                            <li>Водительское удостоверение страны арендатора:</li>
                            <li>Австралия, Австрия, Бахрейн, Бельгия, Бразилия*, Великобритания, Германия, Гонконг, Греция, Дания, Ирландия, Испания, Италия, Канада (Квебек*), Кипр, Китай, Кувейт, Литва, Люксембург, Малайзия, Мальта, Нидерланды Новая Зеландия, Норвегия, Оман, Польша, Португалия, Румыния, Саудовская Аравия, Сингапур, Словакия*, Словения, США, Турция, Эстония, Финляндия, Франция, Хорватия, Швейцария, Швеция, Южная Африка, Южная Корея*, Япония*.</li>
                            <li>* Оригинал + заверенный перевод</li>
                            <li>Международное водительское удостоверение: для граждан не указанных выше стран</li>
                        </ul>
                        
                        <p>Страна выдачи водительского удостоверения должна совпадать со страной выдачи идентификационного документа.</p>
                        <p>Для резидентов ОАЭ:</p>
                        <ul>
                            <li>Emirates ID</li>
                            <li>Водительское удостоверение ОАЭ</li>
                        </ul>
                        <p></p>
                        <p></p>
                        <p></p>
                    </div>
                </details>
                <div class="faq__line"></div>
                <details class="faq__inner">
                    <summary>
                        <p>Каким может быть срок аренды?</p>
                    </summary>
                    <div class="faq__text">
                        <p>Суточный норматив аренды автомобиля - 24 часа, независимо от того в какое время вы арендовали автомобиль.</p>
                        <p>За задержку возврата автомобиля у нас предусмотрена дополнительная оплата, смотрите ее размер в разделе “Условия аренды”</p>
                    </div>
                </details>
                <div class="faq__line"></div>
                <details class="faq__inner">
                    <summary>
                        <p>Что включено в суточную аренду?</p>
                    </summary>
                    <div class="faq__text">
                        <p>Cама аренда авто с определённым пробегом (величина пробега зависит от класса авто).</p>
                        <p>Все расходы, связанные с использованием автомобиля: бензин, платные парковки, проезд по платным дорогам, штрафы, возмещение ущерба вы покрываете сами</p>
                    </div>
                </details>
                <div class="faq__line"></div>
                <details class="faq__inner">
                    <summary>
                        <p>Есть ли скидки?</p>
                    </summary>
                    <div class="faq__text">
                        <p>У нас есть система лояльности</p>
                    </div>
                </details>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <h3 class="contact__logo">Контакты</h3>
        </div>
        <div class="contact__info__mobile">
            <div>
                <h4>Адрес:</h4>
                <h5>UAE, Dubai, AI Barsha 1, Deyaar Head office building, 401</h5>
                <h5>971 4 523 5050, 971 58 5731415, 800 (AIWA) 2492</h5>
            </div>
            <div>
                <a href="#">
                    <img src="image/icon/telegram.svg" alt="">
                </a>
                <a href="#">
                    <img src="image/icon/whatsapp.svg" alt="">
                </a>
                <a href="#">
                    <img src="image/icon/instagram.svg" alt="">
                </a>
                <a href="#">
                    <img src="image/icon/facebook.svg" alt="">
                </a>
            </div>
        </div>
        <div class="contact__map">
            <iframe class="map__mobile" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7225.099024195213!2d55.1900107629645!3d25.11710640000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6bbc47b308f5%3A0x3bb9ee96f7b06ad0!2sDeyaar%20Development%20PJSC%20(Head%20office)!5e0!3m2!1sru!2sru!4v1674812214112!5m2!1sru!2sru" width="396" height="396" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- <img class="pin__mobile" src="image/pin.png" alt="">-->
            <div class="contact__info">
                <div>
                    <h4>Адрес:</h4>
                    <h5>UAE, Dubai, AI Barsha 1, Deyaar Head office building, 401</h5>
                    <h4>Контакты</h4>
                    <h5>971 4 523 5050, 971 58 5731415, 800 (AIWA) 2492</h5>
                </div>
                <div>
                    <a href="#">
                        <img src="image/icon/telegram.svg" alt="">
                    </a>
                    <a href="#">
                        <img src="image/icon/whatsapp.svg" alt="">
                    </a>
                    <a href="#">
                        <img src="image/icon/instagram.svg" alt="">
                    </a>
                    <a href="#">
                        <img src="image/icon/facebook.svg" alt="">
                    </a>
                </div>
            </div>
            <iframe class="map__pc" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7225.099024195213!2d55.1900107629645!3d25.11710640000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6bbc47b308f5%3A0x3bb9ee96f7b06ad0!2sDeyaar%20Development%20PJSC%20(Head%20office)!5e0!3m2!1sru!2sru!4v1674812214112!5m2!1sru!2sru" width="1194" height="676" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer__inner">
                <h3>Политика конфиденциальности</h3>
                <h3>© AIWA    2023</h3>
            </div>
        </div>
    </footer>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/burger.js"></script>
    <script src="js/cars.js"></script>
    <script src="js/cond.js"></script>
    <script src="js/values.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        centeredSlides: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true
        }
      });
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
    <script>
        /* Локализация datepicker */
        $.datepicker.regional['ru'] = {
            closeText: 'Закрыть',
            prevText: 'Предыдущий',
            nextText: 'Следующий',
            currentText: 'Сегодня',
            monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
            monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн','Июл','Авг','Сен','Окт','Ноя','Дек'],
            dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
            dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
            dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
            weekHeader: 'Не',
            dateFormat: 'dd.mm.yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['ru']);
    </script>
    <script src="js/date.js"></script>
    <!-- <script src="js/modernizr.custom.79639.js"></script> -->
    <script src="js/animation.js"></script>
    <script src="js/changeCar.js"></script>
    <script src="js/carusel.js"></script>
</body>
</html>