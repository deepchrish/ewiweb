<?php
$title = "Product Catalogue";
$pageDescription = "Product Catalogue Page description";
include('header.php');
?>
    <!--Product catalogue START-->
    <section class="pro-cat-data">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-12 mt-3">
                    <div class="nav flex-column nav-pills pro-custom-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#allproducts"
                           role="tab" aria-controls="v-pills-home" aria-selected="true">All Products</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#mensclothing" role="tab"
                           aria-controls="v-pills-profile" aria-selected="false">Men's Clothing</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#womensclothing"
                           role="tab" aria-controls="v-pills-messages" aria-selected="false">Women's Clothing</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#kidsclothing" role="tab"
                           aria-controls="v-pills-settings" aria-selected="false">Kid's Clothing</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#accessories" role="tab"
                           aria-controls="v-pills-settings" aria-selected="false">Accessories</a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-12 mt-3">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="allproducts" role="tabpanel"
                             aria-labelledby="v-pills-home-tab">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <form>
                                        <div class="pro-search">
                                            <label class="sr-only" for="searchall">Search</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><span class="ti-search"></span></div>
                                                </div>
                                                <input type="search" class="form-control" id="searchall"
                                                       placeholder="Search for a product or a category…">
                                            </div>
                                        </div>
                                    </form>
                                    <h2 class="pt-3">All Products</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="product-details.php"> <img class="img-fluid" src="img/pro-11.png"
                                                                  alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star5" name="rating" value="5"/><label
                                                                class="full" for="star5"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star4half" name="rating"
                                                               value="4 and a half"/><label class="half" for="star4half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star4" name="rating" value="4"/><label
                                                                class="full" for="star4"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star3half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star3half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star3" name="rating" value="3"/><label
                                                                class="full" for="star3" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star2half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star2half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star2" name="rating" value="2"/><label
                                                                class="full" for="star2"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star1half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star1half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star1" name="rating" value="1"/><label
                                                                class="full" for="star1"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="starhalf" name="rating"
                                                               value="half"/><label
                                                                class="half" for="starhalf"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(34, 34, 34);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(39, 151, 250);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 128, 54);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(146, 146, 146);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="#"><img class="img-fluid" src="img/pro-5.png"
                                                                 alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center ">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star10" name="rating" value="5"/><label
                                                                class="full" for="star10"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star10half" name="rating"
                                                               value="4 and a half"/><label class="half"
                                                                                            for="star10half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star9" name="rating" value="4"/><label
                                                                class="full" for="star9"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star9half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star9half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star8" name="rating" value="3"/><label
                                                                class="full" for="star8" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star8half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star8half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star7" name="rating" value="2"/><label
                                                                class="full" for="star7"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star7half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star7half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star6" name="rating" value="1"/><label
                                                                class="full" for="star6"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="star6half" name="rating"
                                                               value="half"/><label
                                                                class="half" for="star6half"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(0, 146, 123);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(39, 151, 250);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(255, 128, 54);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(52, 52, 52);"></div>
                                                    <span class="pro-cat-more-color"><a href="#">+ 10 more</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="#"> <img class="img-fluid" src="img/pro-5.png"
                                                                  alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center ">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star10" name="rating" value="5"/><label
                                                                class="full" for="star10"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star10half" name="rating"
                                                               value="4 and a half"/><label class="half"
                                                                                            for="star10half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star9" name="rating" value="4"/><label
                                                                class="full" for="star9"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star9half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star9half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star8" name="rating" value="3"/><label
                                                                class="full" for="star8" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star8half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star8half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star7" name="rating" value="2"/><label
                                                                class="full" for="star7"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star7half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star7half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star6" name="rating" value="1"/><label
                                                                class="full" for="star6"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="star6half" name="rating"
                                                               value="half"/><label
                                                                class="half" for="star6half"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(0, 146, 123);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(39, 151, 250);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(255, 128, 54);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(52, 52, 52);"></div>
                                                    <span class="pro-cat-more-color"><a href="#">+ 10 more</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="#"> <img class="img-fluid" src="img/pro-11.png"
                                                                  alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star5" name="rating" value="5"/><label
                                                                class="full" for="star5"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star4half" name="rating"
                                                               value="4 and a half"/><label class="half" for="star4half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star4" name="rating" value="4"/><label
                                                                class="full" for="star4"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star3half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star3half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star3" name="rating" value="3"/><label
                                                                class="full" for="star3" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star2half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star2half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star2" name="rating" value="2"/><label
                                                                class="full" for="star2"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star1half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star1half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star1" name="rating" value="1"/><label
                                                                class="full" for="star1"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="starhalf" name="rating"
                                                               value="half"/><label
                                                                class="half" for="starhalf"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(34, 34, 34);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(39, 151, 250);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 128, 54);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(146, 146, 146);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="#"><img class="img-fluid" src="img/pro-5.png"
                                                                 alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center ">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star10" name="rating" value="5"/><label
                                                                class="full" for="star10"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star10half" name="rating"
                                                               value="4 and a half"/><label class="half"
                                                                                            for="star10half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star9" name="rating" value="4"/><label
                                                                class="full" for="star9"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star9half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star9half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star8" name="rating" value="3"/><label
                                                                class="full" for="star8" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star8half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star8half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star7" name="rating" value="2"/><label
                                                                class="full" for="star7"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star7half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star7half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star6" name="rating" value="1"/><label
                                                                class="full" for="star6"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="star6half" name="rating"
                                                               value="half"/><label
                                                                class="half" for="star6half"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(0, 146, 123);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(39, 151, 250);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(255, 128, 54);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(52, 52, 52);"></div>
                                                    <span class="pro-cat-more-color"><a href="#">+ 10 more</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="#"> <img class="img-fluid" src="img/pro-5.png"
                                                                  alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center ">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star10" name="rating" value="5"/><label
                                                                class="full" for="star10"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star10half" name="rating"
                                                               value="4 and a half"/><label class="half"
                                                                                            for="star10half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star9" name="rating" value="4"/><label
                                                                class="full" for="star9"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star9half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star9half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star8" name="rating" value="3"/><label
                                                                class="full" for="star8" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star8half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star8half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star7" name="rating" value="2"/><label
                                                                class="full" for="star7"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star7half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star7half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star6" name="rating" value="1"/><label
                                                                class="full" for="star6"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="star6half" name="rating"
                                                               value="half"/><label
                                                                class="half" for="star6half"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(0, 146, 123);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(39, 151, 250);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(255, 128, 54);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(52, 52, 52);"></div>
                                                    <span class="pro-cat-more-color"><a href="#">+ 10 more</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="#"> <img class="img-fluid" src="img/pro-11.png"
                                                                  alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star5" name="rating" value="5"/><label
                                                                class="full" for="star5"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star4half" name="rating"
                                                               value="4 and a half"/><label class="half" for="star4half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star4" name="rating" value="4"/><label
                                                                class="full" for="star4"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star3half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star3half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star3" name="rating" value="3"/><label
                                                                class="full" for="star3" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star2half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star2half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star2" name="rating" value="2"/><label
                                                                class="full" for="star2"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star1half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star1half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star1" name="rating" value="1"/><label
                                                                class="full" for="star1"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="starhalf" name="rating"
                                                               value="half"/><label
                                                                class="half" for="starhalf"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(34, 34, 34);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(39, 151, 250);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 128, 54);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(146, 146, 146);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="#"><img class="img-fluid" src="img/pro-5.png"
                                                                 alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center ">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star10" name="rating" value="5"/><label
                                                                class="full" for="star10"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star10half" name="rating"
                                                               value="4 and a half"/><label class="half"
                                                                                            for="star10half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star9" name="rating" value="4"/><label
                                                                class="full" for="star9"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star9half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star9half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star8" name="rating" value="3"/><label
                                                                class="full" for="star8" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star8half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star8half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star7" name="rating" value="2"/><label
                                                                class="full" for="star7"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star7half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star7half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star6" name="rating" value="1"/><label
                                                                class="full" for="star6"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="star6half" name="rating"
                                                               value="half"/><label
                                                                class="half" for="star6half"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(0, 146, 123);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(39, 151, 250);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(255, 128, 54);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(52, 52, 52);"></div>
                                                    <span class="pro-cat-more-color"><a href="#">+ 10 more</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="#"> <img class="img-fluid" src="img/pro-5.png"
                                                                  alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center ">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star10" name="rating" value="5"/><label
                                                                class="full" for="star10"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star10half" name="rating"
                                                               value="4 and a half"/><label class="half"
                                                                                            for="star10half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star9" name="rating" value="4"/><label
                                                                class="full" for="star9"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star9half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star9half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star8" name="rating" value="3"/><label
                                                                class="full" for="star8" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star8half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star8half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star7" name="rating" value="2"/><label
                                                                class="full" for="star7"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star7half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star7half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star6" name="rating" value="1"/><label
                                                                class="full" for="star6"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="star6half" name="rating"
                                                               value="half"/><label
                                                                class="half" for="star6half"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(0, 146, 123);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(39, 151, 250);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(255, 128, 54);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(52, 52, 52);"></div>
                                                    <span class="pro-cat-more-color"><a href="#">+ 10 more</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5 text-center">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 m-auto text-center">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="mensclothing" role="tabpanel"
                             aria-labelledby="v-pills-profile-tab">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <form>
                                        <div class="pro-search">
                                            <label class="sr-only" for="searchall">Search</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><span class="ti-search"></span></div>
                                                </div>
                                                <input type="search" class="form-control" id="searchall"
                                                       placeholder="Search for a product or a category…">
                                            </div>
                                        </div>
                                    </form>
                                    <h2 class="pt-3">Men's Clothing</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="product-details.php"> <img class="img-fluid" src="img/pro-1.png"
                                                                                    alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star5" name="rating" value="5"/><label
                                                                class="full" for="star5"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star4half" name="rating"
                                                               value="4 and a half"/><label class="half" for="star4half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star4" name="rating" value="4"/><label
                                                                class="full" for="star4"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star3half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star3half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star3" name="rating" value="3"/><label
                                                                class="full" for="star3" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star2half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star2half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star2" name="rating" value="2"/><label
                                                                class="full" for="star2"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star1half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star1half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star1" name="rating" value="1"/><label
                                                                class="full" for="star1"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="starhalf" name="rating"
                                                               value="half"/><label
                                                                class="half" for="starhalf"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(34, 34, 34);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(39, 151, 250);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 128, 54);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(146, 146, 146);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="#"><img class="img-fluid" src="img/pro-2.png"
                                                                 alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center ">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star10" name="rating" value="5"/><label
                                                                class="full" for="star10"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star10half" name="rating"
                                                               value="4 and a half"/><label class="half"
                                                                                            for="star10half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star9" name="rating" value="4"/><label
                                                                class="full" for="star9"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star9half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star9half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star8" name="rating" value="3"/><label
                                                                class="full" for="star8" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star8half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star8half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star7" name="rating" value="2"/><label
                                                                class="full" for="star7"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star7half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star7half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star6" name="rating" value="1"/><label
                                                                class="full" for="star6"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="star6half" name="rating"
                                                               value="half"/><label
                                                                class="half" for="star6half"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(0, 146, 123);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(39, 151, 250);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(255, 128, 54);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(52, 52, 52);"></div>
                                                    <span class="pro-cat-more-color"><a href="#">+ 10 more</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="#"> <img class="img-fluid" src="img/pro-3.png"
                                                                  alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center ">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star10" name="rating" value="5"/><label
                                                                class="full" for="star10"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star10half" name="rating"
                                                               value="4 and a half"/><label class="half"
                                                                                            for="star10half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star9" name="rating" value="4"/><label
                                                                class="full" for="star9"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star9half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star9half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star8" name="rating" value="3"/><label
                                                                class="full" for="star8" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star8half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star8half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star7" name="rating" value="2"/><label
                                                                class="full" for="star7"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star7half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star7half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star6" name="rating" value="1"/><label
                                                                class="full" for="star6"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="star6half" name="rating"
                                                               value="half"/><label
                                                                class="half" for="star6half"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(0, 146, 123);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(39, 151, 250);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(255, 128, 54);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(52, 52, 52);"></div>
                                                    <span class="pro-cat-more-color"><a href="#">+ 10 more</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="#"> <img class="img-fluid" src="img/pro-4.png"
                                                                  alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star5" name="rating" value="5"/><label
                                                                class="full" for="star5"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star4half" name="rating"
                                                               value="4 and a half"/><label class="half" for="star4half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star4" name="rating" value="4"/><label
                                                                class="full" for="star4"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star3half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star3half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star3" name="rating" value="3"/><label
                                                                class="full" for="star3" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star2half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star2half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star2" name="rating" value="2"/><label
                                                                class="full" for="star2"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star1half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star1half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star1" name="rating" value="1"/><label
                                                                class="full" for="star1"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="starhalf" name="rating"
                                                               value="half"/><label
                                                                class="half" for="starhalf"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(34, 34, 34);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(39, 151, 250);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 128, 54);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(146, 146, 146);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="#"><img class="img-fluid" src="img/pro-6.png"
                                                                 alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center ">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star10" name="rating" value="5"/><label
                                                                class="full" for="star10"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star10half" name="rating"
                                                               value="4 and a half"/><label class="half"
                                                                                            for="star10half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star9" name="rating" value="4"/><label
                                                                class="full" for="star9"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star9half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star9half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star8" name="rating" value="3"/><label
                                                                class="full" for="star8" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star8half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star8half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star7" name="rating" value="2"/><label
                                                                class="full" for="star7"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star7half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star7half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star6" name="rating" value="1"/><label
                                                                class="full" for="star6"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="star6half" name="rating"
                                                               value="half"/><label
                                                                class="half" for="star6half"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(0, 146, 123);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(39, 151, 250);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(255, 128, 54);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(52, 52, 52);"></div>
                                                    <span class="pro-cat-more-color"><a href="#">+ 10 more</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="#"> <img class="img-fluid" src="img/pro-7.png"
                                                                  alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center ">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star10" name="rating" value="5"/><label
                                                                class="full" for="star10"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star10half" name="rating"
                                                               value="4 and a half"/><label class="half"
                                                                                            for="star10half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star9" name="rating" value="4"/><label
                                                                class="full" for="star9"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star9half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star9half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star8" name="rating" value="3"/><label
                                                                class="full" for="star8" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star8half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star8half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star7" name="rating" value="2"/><label
                                                                class="full" for="star7"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star7half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star7half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star6" name="rating" value="1"/><label
                                                                class="full" for="star6"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="star6half" name="rating"
                                                               value="half"/><label
                                                                class="half" for="star6half"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(0, 146, 123);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(39, 151, 250);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(255, 128, 54);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(52, 52, 52);"></div>
                                                    <span class="pro-cat-more-color"><a href="#">+ 10 more</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="#"> <img class="img-fluid" src="img/pro-8.png"
                                                                  alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star5" name="rating" value="5"/><label
                                                                class="full" for="star5"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star4half" name="rating"
                                                               value="4 and a half"/><label class="half" for="star4half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star4" name="rating" value="4"/><label
                                                                class="full" for="star4"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star3half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star3half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star3" name="rating" value="3"/><label
                                                                class="full" for="star3" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star2half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star2half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star2" name="rating" value="2"/><label
                                                                class="full" for="star2"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star1half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star1half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star1" name="rating" value="1"/><label
                                                                class="full" for="star1"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="starhalf" name="rating"
                                                               value="half"/><label
                                                                class="half" for="starhalf"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(34, 34, 34);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(39, 151, 250);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 128, 54);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(146, 146, 146);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="womensclothing" role="tabpanel"
                             aria-labelledby="v-pills-messages-tab">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <form>
                                        <div class="pro-search">
                                            <label class="sr-only" for="searchall">Search</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><span class="ti-search"></span></div>
                                                </div>
                                                <input type="search" class="form-control" id="searchall"
                                                       placeholder="Search for a product or a category…">
                                            </div>
                                        </div>
                                    </form>
                                    <h2 class="pt-3">Women's Clothing</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="product-details.php"> <img class="img-fluid" src="img/pro-5.png"
                                                                                    alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star5" name="rating" value="5"/><label
                                                                class="full" for="star5"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star4half" name="rating"
                                                               value="4 and a half"/><label class="half" for="star4half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star4" name="rating" value="4"/><label
                                                                class="full" for="star4"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star3half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star3half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star3" name="rating" value="3"/><label
                                                                class="full" for="star3" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star2half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star2half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star2" name="rating" value="2"/><label
                                                                class="full" for="star2"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star1half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star1half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star1" name="rating" value="1"/><label
                                                                class="full" for="star1"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="starhalf" name="rating"
                                                               value="half"/><label
                                                                class="half" for="starhalf"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(34, 34, 34);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(39, 151, 250);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 128, 54);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(146, 146, 146);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="#"><img class="img-fluid" src="img/pro-12.png"
                                                                 alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center ">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star10" name="rating" value="5"/><label
                                                                class="full" for="star10"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star10half" name="rating"
                                                               value="4 and a half"/><label class="half"
                                                                                            for="star10half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star9" name="rating" value="4"/><label
                                                                class="full" for="star9"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star9half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star9half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star8" name="rating" value="3"/><label
                                                                class="full" for="star8" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star8half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star8half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star7" name="rating" value="2"/><label
                                                                class="full" for="star7"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star7half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star7half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star6" name="rating" value="1"/><label
                                                                class="full" for="star6"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="star6half" name="rating"
                                                               value="half"/><label
                                                                class="half" for="star6half"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(0, 146, 123);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(39, 151, 250);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(255, 128, 54);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(52, 52, 52);"></div>
                                                    <span class="pro-cat-more-color"><a href="#">+ 10 more</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="#"> <img class="img-fluid" src="img/pro-13.png"
                                                                  alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center ">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star10" name="rating" value="5"/><label
                                                                class="full" for="star10"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star10half" name="rating"
                                                               value="4 and a half"/><label class="half"
                                                                                            for="star10half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star9" name="rating" value="4"/><label
                                                                class="full" for="star9"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star9half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star9half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star8" name="rating" value="3"/><label
                                                                class="full" for="star8" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star8half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star8half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star7" name="rating" value="2"/><label
                                                                class="full" for="star7"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star7half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star7half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star6" name="rating" value="1"/><label
                                                                class="full" for="star6"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="star6half" name="rating"
                                                               value="half"/><label
                                                                class="half" for="star6half"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(0, 146, 123);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(39, 151, 250);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(255, 128, 54);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(52, 52, 52);"></div>
                                                    <span class="pro-cat-more-color"><a href="#">+ 10 more</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="#"> <img class="img-fluid" src="img/pro-14.png"
                                                                  alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star5" name="rating" value="5"/><label
                                                                class="full" for="star5"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star4half" name="rating"
                                                               value="4 and a half"/><label class="half" for="star4half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star4" name="rating" value="4"/><label
                                                                class="full" for="star4"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star3half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star3half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star3" name="rating" value="3"/><label
                                                                class="full" for="star3" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star2half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star2half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star2" name="rating" value="2"/><label
                                                                class="full" for="star2"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star1half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star1half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star1" name="rating" value="1"/><label
                                                                class="full" for="star1"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="starhalf" name="rating"
                                                               value="half"/><label
                                                                class="half" for="starhalf"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(34, 34, 34);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(39, 151, 250);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 128, 54);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(146, 146, 146);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="#"><img class="img-fluid" src="img/pro-15.png"
                                                                 alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star10" name="rating" value="5"/><label
                                                                class="full" for="star10"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star10half" name="rating"
                                                               value="4 and a half"/><label class="half"
                                                                                            for="star10half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star9" name="rating" value="4"/><label
                                                                class="full" for="star9"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star9half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star9half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star8" name="rating" value="3"/><label
                                                                class="full" for="star8" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star8half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star8half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star7" name="rating" value="2"/><label
                                                                class="full" for="star7"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star7half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star7half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star6" name="rating" value="1"/><label
                                                                class="full" for="star6"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="star6half" name="rating"
                                                               value="half"/><label
                                                                class="half" for="star6half"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(0, 146, 123);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(39, 151, 250);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(255, 128, 54);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(52, 52, 52);"></div>
                                                    <span class="pro-cat-more-color"><a href="#">+ 10 more</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="kidsclothing" role="tabpanel"
                             aria-labelledby="v-pills-settings-tab">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <form>
                                        <div class="pro-search">
                                            <label class="sr-only" for="searchall">Search</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><span class="ti-search"></span></div>
                                                </div>
                                                <input type="search" class="form-control" id="searchall"
                                                       placeholder="Search for a product or a category…">
                                            </div>
                                        </div>
                                    </form>
                                    <h2 class="pt-3">Kid's Clothing</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="product-details.php"> <img class="img-fluid" src="img/pro-10.png"
                                                                                    alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star5" name="rating" value="5"/><label
                                                                class="full" for="star5"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star4half" name="rating"
                                                               value="4 and a half"/><label class="half" for="star4half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star4" name="rating" value="4"/><label
                                                                class="full" for="star4"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star3half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star3half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star3" name="rating" value="3"/><label
                                                                class="full" for="star3" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star2half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star2half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star2" name="rating" value="2"/><label
                                                                class="full" for="star2"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star1half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star1half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star1" name="rating" value="1"/><label
                                                                class="full" for="star1"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="starhalf" name="rating"
                                                               value="half"/><label
                                                                class="half" for="starhalf"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(34, 34, 34);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(39, 151, 250);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 128, 54);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(146, 146, 146);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="#"><img class="img-fluid" src="img/pro-11.png"
                                                                 alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center ">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star10" name="rating" value="5"/><label
                                                                class="full" for="star10"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star10half" name="rating"
                                                               value="4 and a half"/><label class="half"
                                                                                            for="star10half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star9" name="rating" value="4"/><label
                                                                class="full" for="star9"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star9half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star9half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star8" name="rating" value="3"/><label
                                                                class="full" for="star8" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star8half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star8half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star7" name="rating" value="2"/><label
                                                                class="full" for="star7"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star7half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star7half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star6" name="rating" value="1"/><label
                                                                class="full" for="star6"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="star6half" name="rating"
                                                               value="half"/><label
                                                                class="half" for="star6half"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(0, 146, 123);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(39, 151, 250);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(255, 128, 54);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(52, 52, 52);"></div>
                                                    <span class="pro-cat-more-color"><a href="#">+ 10 more</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="#"> <img class="img-fluid" src="img/pro-7.png"
                                                                  alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center ">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star10" name="rating" value="5"/><label
                                                                class="full" for="star10"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star10half" name="rating"
                                                               value="4 and a half"/><label class="half"
                                                                                            for="star10half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star9" name="rating" value="4"/><label
                                                                class="full" for="star9"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star9half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star9half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star8" name="rating" value="3"/><label
                                                                class="full" for="star8" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star8half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star8half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star7" name="rating" value="2"/><label
                                                                class="full" for="star7"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star7half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star7half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star6" name="rating" value="1"/><label
                                                                class="full" for="star6"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="star6half" name="rating"
                                                               value="half"/><label
                                                                class="half" for="star6half"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(0, 146, 123);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(39, 151, 250);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(255, 128, 54);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(52, 52, 52);"></div>
                                                    <span class="pro-cat-more-color"><a href="#">+ 10 more</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="#"> <img class="img-fluid" src="img/pro-6.png"
                                                                  alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star5" name="rating" value="5"/><label
                                                                class="full" for="star5"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star4half" name="rating"
                                                               value="4 and a half"/><label class="half" for="star4half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star4" name="rating" value="4"/><label
                                                                class="full" for="star4"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star3half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star3half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star3" name="rating" value="3"/><label
                                                                class="full" for="star3" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star2half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star2half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star2" name="rating" value="2"/><label
                                                                class="full" for="star2"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star1half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star1half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star1" name="rating" value="1"/><label
                                                                class="full" for="star1"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="starhalf" name="rating"
                                                               value="half"/><label
                                                                class="half" for="starhalf"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(34, 34, 34);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(39, 151, 250);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 128, 54);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(146, 146, 146);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="accessories" role="tabpanel"
                             aria-labelledby="v-pills-settings-tab">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <form>
                                        <div class="pro-search">
                                            <label class="sr-only" for="searchall">Search</label>
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><span class="ti-search"></span></div>
                                                </div>
                                                <input type="search" class="form-control" id="searchall"
                                                       placeholder="Search for a product or a category…">
                                            </div>
                                        </div>
                                    </form>
                                    <h2 class="pt-3">Accessories</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="product-details.php"> <img class="img-fluid" src="img/pro-10.png"
                                                                                    alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star5" name="rating" value="5"/><label
                                                                class="full" for="star5"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star4half" name="rating"
                                                               value="4 and a half"/><label class="half" for="star4half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star4" name="rating" value="4"/><label
                                                                class="full" for="star4"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star3half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star3half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star3" name="rating" value="3"/><label
                                                                class="full" for="star3" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star2half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star2half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star2" name="rating" value="2"/><label
                                                                class="full" for="star2"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star1half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star1half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star1" name="rating" value="1"/><label
                                                                class="full" for="star1"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="starhalf" name="rating"
                                                               value="half"/><label
                                                                class="half" for="starhalf"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(34, 34, 34);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(39, 151, 250);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 128, 54);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(146, 146, 146);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="#"><img class="img-fluid" src="img/pro-11.png"
                                                                 alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center ">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star10" name="rating" value="5"/><label
                                                                class="full" for="star10"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star10half" name="rating"
                                                               value="4 and a half"/><label class="half"
                                                                                            for="star10half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star9" name="rating" value="4"/><label
                                                                class="full" for="star9"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star9half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star9half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star8" name="rating" value="3"/><label
                                                                class="full" for="star8" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star8half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star8half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star7" name="rating" value="2"/><label
                                                                class="full" for="star7"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star7half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star7half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star6" name="rating" value="1"/><label
                                                                class="full" for="star6"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="star6half" name="rating"
                                                               value="half"/><label
                                                                class="half" for="star6half"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(0, 146, 123);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(39, 151, 250);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(255, 128, 54);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(52, 52, 52);"></div>
                                                    <span class="pro-cat-more-color"><a href="#">+ 10 more</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="#"> <img class="img-fluid" src="img/pro-7.png"
                                                                  alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center ">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star10" name="rating" value="5"/><label
                                                                class="full" for="star10"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star10half" name="rating"
                                                               value="4 and a half"/><label class="half"
                                                                                            for="star10half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star9" name="rating" value="4"/><label
                                                                class="full" for="star9"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star9half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star9half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star8" name="rating" value="3"/><label
                                                                class="full" for="star8" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star8half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star8half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star7" name="rating" value="2"/><label
                                                                class="full" for="star7"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star7half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star7half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star6" name="rating" value="1"/><label
                                                                class="full" for="star6"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="star6half" name="rating"
                                                               value="half"/><label
                                                                class="half" for="star6half"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(0, 146, 123);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(39, 151, 250);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(255, 128, 54);"></div>
                                                    <div class="color-item flex-inline-container"
                                                         style="background-color: rgb(52, 52, 52);"></div>
                                                    <span class="pro-cat-more-color"><a href="#">+ 10 more</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-4">
                                    <div class="pro-catalogue">
                                        <div class="pro-imgarea">
                                            <div class="pro-foto">
                                                <a href="#"> <img class="img-fluid" src="img/pro-6.png"
                                                                  alt="product image"></a>
                                            </div>
                                            <div class="pro-multi-option">
                                                <div class="d-flex justify-content-center">
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#" data-toggle="modal" data-target="#howitworks">Quick
                                                            View</a></div>
                                                    <div class="p-2 w-100 text-center pro-cat-action text-uppercase"><a
                                                                href="#">Pick This</a></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-main-info">
                                            <div class="d-flex flex-column bd-highlight">
                                                <div class="pro-cat-rating">
                                                    <fieldset class="rating">
                                                        <input type="radio" id="star5" name="rating" value="5"/><label
                                                                class="full" for="star5"
                                                                title="Awesome - 5 stars"></label>
                                                        <input type="radio" id="star4half" name="rating"
                                                               value="4 and a half"/><label class="half" for="star4half"
                                                                                            title="Pretty good - 4.5 stars"></label>
                                                        <input type="radio" id="star4" name="rating" value="4"/><label
                                                                class="full" for="star4"
                                                                title="Pretty good - 4 stars"></label>
                                                        <input type="radio" id="star3half" name="rating"
                                                               value="3 and a half"/><label class="half" for="star3half"
                                                                                            title="Meh - 3.5 stars"></label>
                                                        <input type="radio" id="star3" name="rating" value="3"/><label
                                                                class="full" for="star3" title="Meh - 3 stars"></label>
                                                        <input type="radio" id="star2half" name="rating"
                                                               value="2 and a half"/><label class="half" for="star2half"
                                                                                            title="Kinda bad - 2.5 stars"></label>
                                                        <input type="radio" id="star2" name="rating" value="2"/><label
                                                                class="full" for="star2"
                                                                title="Kinda bad - 2 stars"></label>
                                                        <input type="radio" id="star1half" name="rating"
                                                               value="1 and a half"/><label class="half" for="star1half"
                                                                                            title="Meh - 1.5 stars"></label>
                                                        <input type="radio" id="star1" name="rating" value="1"/><label
                                                                class="full" for="star1"
                                                                title="Sucks big time - 1 star"></label>
                                                        <input type="radio" id="starhalf" name="rating"
                                                               value="half"/><label
                                                                class="half" for="starhalf"
                                                                title="Sucks big time - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                                <div class="pro-cat-heading"><h3 title="Unisex Raglan T-Shirt">Unisex
                                                        Raglan T-Shirt</h3></div>
                                                <div class="pt-1 pb-1 pro-cat-text">Average Price - $12.00 - $24.00
                                                </div>
                                                <div class="pb-1 text-uppercase pro-cat-text">s - 3xl</div>
                                                <div class="component-colors-preview pro-cat-color">
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(34, 34, 34);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(39, 151, 250);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 128, 54);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="pro-cat-twins">
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(146, 146, 146);"></div>
                                                        <div class="color-item flex-inline-container"
                                                             style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Product Catalogue END-->
gh
<?php
include('footer.php');
?>