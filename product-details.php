<?php
$title = "Product Description";
$pageDescription = "Home page description";
include('header.php');
?>
    <!--Product catalogue START-->
    <section class="pro-cat-data">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-4">
                    <!--<div>-->
                    <!--<img class="img-fluid result resultimg" src="./images/header-baseimg.png">-->
                    <!--</div>-->
                    <!--Carousel Wrapper-->
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
                        <ol class="carousel-indicators thumb-img pro-info-slider">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                <img src="img/img-front.png">
                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1">
                                <img src="img/img-back.png">
                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2">
                                <img src="img/img-right.png">
                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3">
                                <img src="img/img-left.png">
                            </li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid d-block w-100" src="img/img-front.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid d-block w-100" src="img/img-back.png" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid d-block w-100" src="img/img-right.png" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid d-block w-100" src="img/img-left.png" alt="fourth slide">
                            </div>
                        </div>
                    </div>
                    <!--/.Carousel Wrapper-->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb custom-breadcrumbs">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Men’s Clothing</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Unisex Raglan T-Shirt</li>
                        </ol>
                    </nav>
                    <div class="flex-column pro-details-info">
                        <h1 class="p-1">Unisex Raglan T-Shirt</h1>
                        <p class="mb-0 p-1"><strong>SKU:</strong> Unisex-raglan-t-shit-white/-forest</p>
                        <p class="mb-0 p-1"><strong>Category:</strong> T-Shirts</p>
                        <div class="pt-2 pb-2 pl-1 pr-1 pro-info-star-rating">
                            <fieldset class="rating">
                                <input type="radio" id="star5" name="rating" value="5"><label class="full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half"><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4"><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half"><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3"><label class="full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half"><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2"><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half"><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1"><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half"><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                            </fieldset>
                            <a href="#">38 Review</a>
                        </div>

                        <div class="pt-2 pb-2 pl-1 pr-1">
                            <p class="mb-0 p-1 text-uppercase"><strong>Colors:</strong></p>
                            <div class="component-colors-preview pro-cat-color p-1">
                                <div class="pro-cat-twins">
                                    <div class="color-item flex-inline-container" style="background-color: rgb(34, 34, 34);"></div>
                                    <div class="color-item flex-inline-container" style="background-color: rgb(255, 255, 255);"></div>
                                </div>
                                <div class="pro-cat-twins">
                                    <div class="color-item flex-inline-container" style="background-color: rgb(39, 151, 250);"></div>
                                    <div class="color-item flex-inline-container" style="background-color: rgb(255, 255, 255);"></div>
                                </div>
                                <div class="pro-cat-twins">
                                    <div class="color-item flex-inline-container" style="background-color: rgb(255, 128, 54);"></div>
                                    <div class="color-item flex-inline-container" style="background-color: rgb(255, 255, 255);"></div>
                                </div>
                                <div class="pro-cat-twins">
                                    <div class="color-item flex-inline-container" style="background-color: rgb(146, 146, 146);"></div>
                                    <div class="color-item flex-inline-container" style="background-color: rgb(255, 255, 255);"></div>
                                </div>
                            </div>
                        </div>

                        <div class="pt-2 pb-2 pl-1 pr-1">
                            <p class="mb-0 p-1 text-uppercase"><strong>Sizes:</strong></p>
                            <div class="btn-group-toggle mt-1" data-toggle="buttons">
                                <label class="btn checkbox-btn m-1">
                                    <input type="checkbox" name="options" id="option1" autocomplete="off" disabled> S
                                </label>
                                <label class="btn checkbox-btn m-1">
                                    <input type="checkbox" name="options" id="option2" autocomplete="off" disabled> M
                                </label>
                                <label class="btn checkbox-btn m-1">
                                    <input type="checkbox" name="options" id="option2" autocomplete="off" disabled> L
                                </label>
                                <label class="btn checkbox-btn m-1">
                                    <input type="checkbox" name="options" id="option2" autocomplete="off" disabled> XL
                                </label>
                                <label class="btn checkbox-btn m-1">
                                    <input type="checkbox" name="options" id="option2" autocomplete="off" disabled> 2XL
                                </label>
                                <em><a href="#" class="un">Size Guide</a></em>
                            </div>
                        </div>
                        <div class="pt-2 pb-2 pl-1 pr-1 pro-info-pricing">
                            <h3 class="p-1">$12.00-$24.00</h3>
                            <button class="btn primary-btn-custom mt-1">Start Designing</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 justify-content-center">
                <div class="col-md-11 col-sm-12 col-12 border-bottom pro-dets-des">
                    <h3>Description</h3>
                </div>
                <div class="col-md-11 pt-2 justify-content-center">
                    <p>Comfortable and light, this premium fitted short sleeve is a classic choice. High quality print adds a statement to one's workout or everyday routine. Lorem lpsum is simply dummy text of the printing and typesettings industry. Lorem lpsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
            </div>
        </div>
    </section>
    <!--Product Catalogue END-->

<?php
include('footer.php');
?>