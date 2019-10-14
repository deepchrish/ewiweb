<?php
$title = "Pricing and Plan";
$pageDescription = "Pricing and Plan page description";
include('header.php');
?>
    <!--Pricing and Plans START-->
    <section class="eager-help">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12 col-12 mt-4 text-center text-md-left">
                    <div class="header-heading">
                        <h1>Pricing and Plans</h1>
                        <p>Set up your workspace, pick a plan later</p>
                        <button class="btn primary-btn-custom">Ask a question</button>
                        <span>14-Day free trial. No credit card required</span>
                    </div>
                    <div class="cus-eger-text">
                        <a href="faqs.php">Browse FAQs <span class="ti-arrow-right"></span></a>
                        <a href="#">How-to-Videos <span class="ti-arrow-right"></span></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 col-12 mt-4">
                    <div class="blog-bg">
                        <img class="img-fluid" src="img/faqs-bg.png" alt="faqs">
                    </div>
                    <div class="cus-right-img">
                        <img class="img-fluid" src="img/pricing-img.png" alt="faqs">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Pricing and Plans END-->

    <!--Pricing list START-->
    <section class="pricing-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center pricing-text">
                    <h2>Pricing</h2>
                    <h3>An Agile pricing that scales with your needs</h3>
                    <p>Sign up in less than a minute. Try out our 14 days risk free trial, upgrade at anytime, no
                        questions, no hassle. <strong><i>No credit card required on trial.</i></strong></p>
                </div>
            </div>

            <!--Pricing Table for Large SCREEN Only START-->
            <div class="row" id="only-large">
                <div class="col-md-12">
                    <!--monthly-price START-->
                    <div class="table-responsive mt-2" id="montlyprice">
                        <table class="table custom-pricing-table">
                            <thead>
                            <tr>
                                <th class="custom-theading border-right">
                                    <div class="tl-action-btn">
                                        <div class="d-flex flex-column pln-btn-area">
                                            <button class="btn price-green-btn m-1" onclick="show('montlyprice');">
                                                Monthly
                                            </button>
                                            <button class="btn price-trans-btn m-1" onclick="show('annualprice');">
                                                Annual
                                            </button>
                                        </div>
                                        <small>Save 10% on Annual plan</small>
                                    </div>
                                </th>
                                <th class="custom-theading">
                                    <div class="t-head-text">
                                        <h5>Startup</h5>
                                        <h6>$0</h6>
                                        <button class="btn secondary-btn-cut">Start free trial</button>
                                    </div>
                                </th>
                                <th class="custom-theading">
                                    <div class="t-head-text">
                                        <h5>Rookie</h5>
                                        <h6>$25</h6>
                                        <button class="btn secondary-btn-cut">Start free trial</button>
                                    </div>
                                </th>
                                <th class="custom-theading">

                                    <div class="t-head-text">
                                        <div class="subs-recommendation">Recommended</div>
                                        <h5>Veteran</h5>
                                        <h6>$75</h6>
                                        <button class="btn secondary-btn-cut">Start free trial</button>
                                    </div>
                                </th>
                                <th class="custom-theading">
                                    <div class="t-head-text">
                                        <h5>Legend</h5>
                                        <h6>$200</h6>
                                        <button class="btn secondary-btn-cut">Start free trial</button>
                                    </div>
                                </th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between">
                                        <p>Orders</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt ">
                                    <p>25/Mo</p>
                                </td>
                                <td class="plan-opt">
                                    <p>100/Mo</p>
                                </td>
                                <td class="plan-opt">
                                    <p>500/Mo</p>
                                </td>
                                <td class="plan-opt">
                                    <p>Unlimited/Mo</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between">
                                        <p>Workspaces</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>01</p>
                                </td>
                                <td class="plan-opt">
                                    <p>02</p>
                                </td>
                                <td class="plan-opt">
                                    <p>05</p>
                                </td>
                                <td class="plan-opt">
                                    <p>10</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between">
                                        <p>Basic Tee</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>$08</p>
                                </td>
                                <td class="plan-opt">
                                    <p>$06</p>
                                </td>
                                <td class="plan-opt">
                                    <p>$5.75</p>
                                </td>
                                <td class="plan-opt">
                                    <p>$5.50</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between ">
                                        <p>Catalog Price</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>No Discount</p>
                                </td>
                                <td class="plan-opt">
                                    <p>05% of EWI Catalog</p>
                                </td>
                                <td class="plan-opt">
                                    <p>10% of EWI catalog</p>
                                </td>
                                <td class="plan-opt">
                                    <p>10% of EWI catalog</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between ">
                                        <p>Order Routing</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between ">
                                        <p>Warehouse</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between ">
                                        <p>Employee Management</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between ">
                                        <p>Promotional Products</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between">
                                        <p>Bulk Pricing</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between ">
                                        <p>Phone Support</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between ">
                                        <p>Easy Ink</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between ">
                                        <p>On Boarding</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between ">
                                        <p>Rebate Volume</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between ">
                                        <p>Production Slack Channel</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between">
                                        <p>Print Location</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>Front & Back</p>
                                </td>
                                <td class="plan-opt">
                                    <p>Front & Back</p>
                                </td>
                                <td class="plan-opt">
                                    <p>Front, Back & Sleeve</p>
                                </td>
                                <td class="plan-opt">
                                    <p>Front, Back & Sleeve</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between ">
                                        <p>Exclusive Events</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between p-2">
                                        <p>Private Facebok Group</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <!--monthly-price END-->

                    <!--Annual-price START-->
                    <div class="table-responsive mt-2" id="annualprice" style="display: none;">
                        <table class="table custom-pricing-table">
                            <thead>
                            <tr>
                                <th class="custom-theading border-right">
                                    <div class="tl-action-btn">
                                        <div class="d-flex flex-column pln-btn-area">
                                            <button class="btn price-trans-btn m-1" onclick="show('montlyprice');">
                                                Monthly
                                            </button>
                                            <button class="btn price-green-btn m-1" onclick="show('annualprice');">
                                                Annual
                                            </button>
                                        </div>
                                        <small>Save 10% on Annual plan</small>
                                    </div>
                                </th>
                                <th class="custom-theading">
                                    <div class="t-head-text">
                                        <h5>Startup</h5>
                                        <h6>$0</h6>
                                        <button class="btn secondary-btn-cut">Start free trial</button>
                                    </div>
                                </th>
                                <th class="custom-theading">
                                    <div class="t-head-text">
                                        <h5>Rookie</h5>
                                        <h6>$275</h6>
                                        <button class="btn secondary-btn-cut">Start free trial</button>
                                    </div>
                                </th>
                                <th class="custom-theading">

                                    <div class="t-head-text">
                                        <div class="subs-recommendation">Recommended</div>
                                        <h5>Veteran</h5>
                                        <h6>$875</h6>
                                        <button class="btn secondary-btn-cut">Start free trial</button>
                                    </div>
                                </th>
                                <th class="custom-theading">
                                    <div class="t-head-text">
                                        <h5>Legend</h5>
                                        <h6>$2200</h6>
                                        <button class="btn secondary-btn-cut">Start free trial</button>
                                    </div>
                                </th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between">
                                        <p>Orders</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt ">
                                    <p>25/Mo</p>
                                </td>
                                <td class="plan-opt">
                                    <p>100/Mo</p>
                                </td>
                                <td class="plan-opt">
                                    <p>500/Mo</p>
                                </td>
                                <td class="plan-opt">
                                    <p>Unlimited/Mo</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between">
                                        <p>Workspaces</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>01</p>
                                </td>
                                <td class="plan-opt">
                                    <p>02</p>
                                </td>
                                <td class="plan-opt">
                                    <p>05</p>
                                </td>
                                <td class="plan-opt">
                                    <p>10</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between">
                                        <p>Basic Tee</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>$08</p>
                                </td>
                                <td class="plan-opt">
                                    <p>$06</p>
                                </td>
                                <td class="plan-opt">
                                    <p>$5.75</p>
                                </td>
                                <td class="plan-opt">
                                    <p>$5.50</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between ">
                                        <p>Catalog Price</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>No Discount</p>
                                </td>
                                <td class="plan-opt">
                                    <p>05% of EWI Catalog</p>
                                </td>
                                <td class="plan-opt">
                                    <p>10% of EWI catalog</p>
                                </td>
                                <td class="plan-opt">
                                    <p>10% of EWI catalog</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between ">
                                        <p>Order Routing</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between ">
                                        <p>Warehouse</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between ">
                                        <p>Employee Management</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between ">
                                        <p>Promotional Products</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between">
                                        <p>Bulk Pricing</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between ">
                                        <p>Phone Support</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between ">
                                        <p>Easy Ink</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between">
                                        <p>On Boarding</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between">
                                        <p>Rebate Volume</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between ">
                                        <p>Production Slack Channel</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between">
                                        <p>Print Location</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>Front & Back</p>
                                </td>
                                <td class="plan-opt">
                                    <p>Front & Back</p>
                                </td>
                                <td class="plan-opt">
                                    <p>Front, Back & Sleeve</p>
                                </td>
                                <td class="plan-opt">
                                    <p>Front, Back & Sleeve</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between">
                                        <p>Exclusive Events</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                            </tr>

                            <tr>
                                <td class="first-td-bg">
                                    <div class="plan-list d-flex justify-content-between">
                                        <p>Private Facebok Group</p>
                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                              data-placement="top" title="Tooltip on top"></span>
                                    </div>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p>No</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                                <td class="plan-opt">
                                    <p class="green-text">Yes</p>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <!--Annual-price END-->
                </div>
            </div>
            <!--Pricing Table for Large SCREEN Only END-->

            <!--Pricing Table for Medium and Small screens START-->
            <div class="row" id="small-medium">
                <div class="col-md-12">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-10 col-11 pln-btn-area">
                            <div class="btn-group d-flex justify-content-center text-center">
                                <div class="w-100">
                                    <button class="btn price-green-btn w-100" onclick="show('montlyprice1');">Monthly
                                    </button>
                                </div>
                                <div class="w-100">
                                    <button class="btn w-100" onclick="show('annualprice1');">Annual</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- monthly plans START-->
                    <div class="row mt-3" id="montlyprice1">
                        <div class="col-md-12">
                            <ul class="nav nav-pills mb-3 justify-content-between custom-price-pills" id="pills-tab"
                                role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-mntstartup-tab" data-toggle="pill"
                                       href="#mntstartup" role="tab" aria-controls="mntstartup" aria-selected="true">Startup</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-mntrookie-tab" data-toggle="pill" href="#mntrookie"
                                       role="tab" aria-controls="mntrookie" aria-selected="false">Rookie</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-mntveteran-tab" data-toggle="pill" href="#mntveteran"
                                       role="tab" aria-controls="mntveteran" aria-selected="false">Veteran</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-mntlegend-tab" data-toggle="pill" href="#mntlegend"
                                       role="tab" aria-controls="mntlegend" aria-selected="false">Legend</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">

                                <!--Monthly price - Startup price list START-->
                                <div class="tab-pane fade show active" id="mntstartup" role="tabpanel"
                                     aria-labelledby="pills-mntstartup-tab">
                                    <div class="table-responsive mt-3">
                                        <table class="table custom-pricing-table">
                                            <thead>
                                            <tr>
                                                <th class="custom-theading border-right">
                                                    <div class="t-head-text">
                                                        <h6>$0/Month</h6>
                                                    </div>
                                                </th>
                                                <th class="custom-theading">
                                                    <div class="t-head-text">
                                                        <button class="btn secondary-btn-cut">Start free trial</button>
                                                    </div>
                                                </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Orders</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt ">
                                                    <p>25/Mo</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Workspaces</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>01</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Basic Tee</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>$08</p>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Catalog Price</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No Discount</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Order Routing</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Warehouse</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Employee Management</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Promotional Products</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Bulk Pricing</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Phone Support</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Easy Ink</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>On Boarding</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Rebate Volume</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Production Slack Channel</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Print Location</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>Front & Back</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Exclusive Events</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Private Facebok Group</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--Monthly price - Startup price list END-->

                                <!--Monthly price - Rokkie price list START-->
                                <div class="tab-pane fade" id="mntrookie" role="tabpanel"
                                     aria-labelledby="pills-mntrookie-tab">
                                    <div class="table-responsive mt-3">
                                        <table class="table custom-pricing-table">
                                            <thead>
                                            <tr>
                                                <th class="custom-theading border-right">
                                                    <div class="t-head-text">
                                                        <h6>$25/Month</h6>
                                                    </div>
                                                </th>
                                                <th class="custom-theading">
                                                    <div class="t-head-text">
                                                        <button class="btn secondary-btn-cut">Start free trial</button>
                                                    </div>
                                                </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Orders</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt ">
                                                    <p>100/Mo</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Workspaces</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>02</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Basic Tee</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>$06</p>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Catalog Price</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>05% of EWI Catalog</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Order Routing</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Warehouse</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Employee Management</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Promotional Products</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Bulk Pricing</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Phone Support</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Easy Ink</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>On Boarding</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Rebate Volume</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Production Slack Channel</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Print Location</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>Front & Back</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Exclusive Events</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Private Facebok Group</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--Monthly price - Rokkie price list END-->

                                <!--Monthly price - Veteran price list START-->
                                <div class="tab-pane fade" id="mntveteran" role="tabpanel"
                                     aria-labelledby="pills-mntveteran-tab">
                                    <div class="table-responsive mt-3">
                                        <table class="table custom-pricing-table">
                                            <thead>
                                            <tr>
                                                <th class="custom-theading border-right">
                                                    <div class="t-head-text">
                                                        <h6>$75/Month</h6>
                                                    </div>
                                                </th>
                                                <th class="custom-theading">
                                                    <div class="t-head-text">
                                                        <button class="btn secondary-btn-cut">Start free trial</button>
                                                    </div>
                                                </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Orders</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt ">
                                                    <p>500/Mo</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Workspaces</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>05</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Basic Tee</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>$5.75</p>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Catalog Price</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>10% of EWI catalog</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Order Routing</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Warehouse</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Employee Management</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Promotional Products</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Bulk Pricing</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Phone Support</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Easy Ink</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>On Boarding</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Rebate Volume</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Production Slack Channel</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Print Location</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>Front, Back & Sleeve</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Exclusive Events</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Private Facebok Group</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--Monthly price - Veteran price list END-->

                                <!--Monthly price - Legend price list START-->
                                <div class="tab-pane fade" id="mntlegend" role="tabpanel"
                                     aria-labelledby="pills-mntlegend-tab">
                                    <div class="table-responsive mt-3">
                                        <table class="table custom-pricing-table">
                                            <thead>
                                            <tr>
                                                <th class="custom-theading border-right">
                                                    <div class="t-head-text">
                                                        <h6>$200/Month</h6>
                                                    </div>
                                                </th>
                                                <th class="custom-theading">
                                                    <div class="t-head-text">
                                                        <button class="btn secondary-btn-cut">Start free trial</button>
                                                    </div>
                                                </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Orders</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt ">
                                                    <p>Unlimited/Mo</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Workspaces</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>10</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Basic Tee</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>$5.50</p>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Catalog Price</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>10% of EWI catalog</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Order Routing</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Warehouse</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Employee Management</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Promotional Products</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Bulk Pricing</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Phone Support</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Easy Ink</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>On Boarding</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Rebate Volume</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Production Slack Channel</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Print Location</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>Front, Back & Sleeve</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Exclusive Events</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between p-2">
                                                        <p>Private Facebok Group</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--Monthly price - Legend price list END-->
                            </div>
                        </div>
                    </div>
                    <!-- monthly plans START-->

                    <!-- Annually plans START-->
                    <div class="row mt-3" id="annualprice1" style="display: none;">
                        <div class="col-md-12">
                            <ul class="nav nav-pills mb-3 justify-content-between custom-price-pills" id="pills-tab"
                                role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-yearstartup-tab" data-toggle="pill"
                                       href="#yearstartup" role="tab" aria-controls="yearstartup" aria-selected="true">Startup</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-yearrookie-tab" data-toggle="pill" href="#yearrookie"
                                       rol
                                       e="tab" aria-controls="yearrookie" aria-selected="false">Rookie</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-yearveteran-tab" data-toggle="pill"
                                       href="#yearveteran"
                                       role="tab" aria-controls="yearveteran" aria-selected="false">Veteran</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-yearlegend-tab" data-toggle="pill" href="#yearlegend"
                                       role="tab" aria-controls="yearlegend" aria-selected="false">Legend</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">

                                <!--Annually price - Startup price list START-->
                                <div class="tab-pane fade show active" id="yearstartup" role="tabpanel"
                                     aria-labelledby="pills-yearstartup-tab">
                                    <div class="table-responsive mt-3">
                                        <table class="table custom-pricing-table">
                                            <thead>
                                            <tr>
                                                <th class="custom-theading border-right">
                                                    <div class="t-head-text">
                                                        <h6>$0/Year</h6>
                                                    </div>
                                                </th>
                                                <th class="custom-theading">
                                                    <div class="t-head-text">
                                                        <button class="btn secondary-btn-cut">Start free trial</button>
                                                    </div>
                                                </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Orders</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt ">
                                                    <p>25/Mo</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Workspaces</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>01</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Basic Tee</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>$08</p>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Catalog Price</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No Discount</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Order Routing</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Warehouse</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Employee Management</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Promotional Products</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Bulk Pricing</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Phone Support</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Easy Ink</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>On Boarding</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Rebate Volume</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Production Slack Channel</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Print Location</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>Front & Back</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Exclusive Events</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Private Facebok Group</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--Annually price - Startup price list END-->

                                <!--Annually price - Rokkie price list START-->
                                <div class="tab-pane fade" id="yearrookie" role="tabpanel"
                                     aria-labelledby="pills-yearrookie-tab">
                                    <div class="table-responsive mt-3">
                                        <table class="table custom-pricing-table">
                                            <thead>
                                            <tr>
                                                <th class="custom-theading border-right">
                                                    <div class="t-head-text">
                                                        <h6>$275/Year</h6>
                                                    </div>
                                                </th>
                                                <th class="custom-theading">
                                                    <div class="t-head-text">
                                                        <button class="btn secondary-btn-cut">Start free trial</button>
                                                    </div>
                                                </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Orders</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt ">
                                                    <p>100/Mo</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Workspaces</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>02</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Basic Tee</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>$06</p>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Catalog Price</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>05% of EWI Catalog</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Order Routing</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Warehouse</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Employee Management</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Promotional Products</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Bulk Pricing</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Phone Support</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Easy Ink</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>On Boarding</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Rebate Volume</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Production Slack Channel</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Print Location</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>Front & Back</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Exclusive Events</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Private Facebok Group</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--Annually price - Rokkie price list END-->

                                <!--Annually price - Veteran price list START-->
                                <div class="tab-pane fade" id="yearveteran" role="tabpanel"
                                     aria-labelledby="pills-yearveteran-tab">
                                    <div class="table-responsive mt-3">
                                        <table class="table custom-pricing-table">
                                            <thead>
                                            <tr>
                                                <th class="custom-theading border-right">
                                                    <div class="t-head-text">
                                                        <h6>$875/Year</h6>
                                                    </div>
                                                </th>
                                                <th class="custom-theading">
                                                    <div class="t-head-text">
                                                        <button class="btn secondary-btn-cut">Start free trail</button>
                                                    </div>
                                                </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Orders</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt ">
                                                    <p>500/Mo</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Workspaces</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>05</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Basic Tee</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>$5.75</p>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Catalog Price</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>10% of EWI catalog</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Order Routing</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Warehouse</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Employee Management</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Promotional Products</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Bulk Pricing</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Phone Support</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Easy Ink</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>On Boarding</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Rebate Volume</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Production Slack Channel</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>No</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Print Location</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>Front, Back & Sleeve</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Exclusive Events</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Private Facebok Group</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--Annually price - Veteran price list END-->

                                <!--Annually price - Legend price list START-->
                                <div class="tab-pane fade" id="yearlegend" role="tabpanel"
                                     aria-labelledby="pills-yearlegend-tab">
                                    <div class="table-responsive mt-3">
                                        <table class="table custom-pricing-table">
                                            <thead>
                                            <tr>
                                                <th class="custom-theading border-right">
                                                    <div class="t-head-text">
                                                        <h6>$2200/Year</h6>
                                                    </div>
                                                </th>
                                                <th class="custom-theading">
                                                    <div class="t-head-text">
                                                        <button class="btn secondary-btn-cut">Start free trail</button>
                                                    </div>
                                                </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Orders</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt ">
                                                    <p>Unlimited/Mo</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Workspaces</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>10</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Basic Tee</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>$5.50</p>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Catalog Price</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>10% of EWI catalog</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Order Routing</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Warehouse</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Employee Management</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Promotional Products</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Bulk Pricing</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Phone Support</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Easy Ink</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>On Boarding</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Rebate Volume</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Production Slack Channel</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between">
                                                        <p>Print Location</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p>Front, Back & Sleeve</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between ">
                                                        <p>Exclusive Events</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="first-td-bg">
                                                    <div class="plan-list d-flex justify-content-between p-2">
                                                        <p>Private Facebok Group</p>
                                                        <span class="mdi mdi-information-outline" data-toggle="tooltip"
                                                              data-placement="top" title="Tooltip on top"></span>
                                                    </div>
                                                </td>
                                                <td class="plan-opt">
                                                    <p class="green-text">Yes</p>
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--Annually price - Legend price list END-->
                            </div>
                        </div>
                    </div>
                    <!-- Annually plans START-->

                </div>
            </div>
            <!--Pricing Table for Medium and Small screens END-->
        </div>
    </section>
    <!--Pricing list END-->

    <!-- Don’t know what’s best for you? START-->
    <section class="amour-bg mt-4 pt-1">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="py-5 my-5">
                        <h2>Don’t know what’s best for you?</h2>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        <button class="btn primary-btn-custom">Get help from us</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Don’t know what’s best for you? END-->
<?php
include('footer.php');
?>