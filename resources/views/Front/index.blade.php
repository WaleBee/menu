<!DOCTYPE html>
<html lang="en-US">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="google" content="notranslate" />
    <title> RESTAURANT </title>
    <meta name="description" content="Smart Menu Powered by Argentavis Technologies">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/png" href="{{url('/')}}/front/images/favicon.png" sizes="32x32">

    <!-- STYLESHEETS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;500;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('/')}}/front/css/owl.carousel.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{url('/')}}/front/css/owl.theme.default.min.css" type="text/css" media="all">



    <link rel="stylesheet" href="{{url('/')}}/front/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('/')}}/front/css/themify-icons.css">

    <link rel="stylesheet" href="{{url('/')}}/front/main.css" type="text/css" media="all">
    <link rel="stylesheet" href="{{url('/')}}/front/css/stepper.css" type="text/css" media="all">

    <script src="{{url('/')}}/front/js/plugin.js"></script>
    <script src="{{url('/')}}/front/js/main.js"></script>
    <script>
        var taxValue = 0;
        var deliveryFee = 0;
        var minOrder = 0;

    </script>


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="loader" id="topID">

    <!-- main wrapper container-maxwidth -->
    <div id="perspective" class="perspective effect-airbnb modalview mob-container">

        <div class="main-wrapper ">
            <div class="main-content ">


                <!-- header wrapper -->
                <header class="bg-white style2 pt-2  bg-home">
                    <div class="row">
                        <div class="col-sm-4 text-left pos-top">
                            {{--  <a href="#" class="menu-btn mt-0" id="sidebar-right"><span></span></a>  --}}
                        </div>
                        <div class="col-sm-4 text-center  pos-top">
                            <a href="#" class="logo d-block mt-0 cat_link_menu"><img
                                    src="{{url('/')}}/{{$footer->logo}}" alt=""></a>
                        </div>
                        <div class="col-sm-4 text-right pos-top">


                            {{--  <a href="#" data-toggle="modal" data-target="#actionSheetIconed" class="cart-btn mt-1">
                                <!-- <img src="{{url('/')}}/front/images/lang_icon.png" > -->
                                <i class="ti ti-more-alt"></i>
                            </a>  --}}



                        </div>
                        <div class="col-sm-12 text-left pos-top">
                            <h2 class="titleText  mt-3 mb-0 ">
                                Discover Your Taste </h2>
                        </div>
                        <div class="col-sm-12 text-left mt-1 mb-0 pos-top">
                            <div class="form-content style1">
                                <form>
                                    <input type="text" id="menu_search" class="form-control bg-white "
                                        placeholder=" Seacrh...">
                                </form>
                            </div>
                            <div id="search-title" class="item-header fw-600 text-black mt-2 mb-0"><a href="#"
                                    class="more-btn cat_link_menu "><i class="ti-arrow-left "></i>
                                    back to home </a>
                                <h5 class="">

                                    Search Result </h5>
                            </div>

                        </div>

                    </div>
                </header>
                <!-- header wrapper -->

                <!-- loader wrapper -->
                <div class="preloader-wrap p-3">
                    <div class="box shimmer">
                        <div class="lines">
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                        </div>
                    </div>
                    <div class="box shimmer mb-3">
                        <div class="lines">
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                            <div class="line s_shimmer"></div>
                        </div>
                    </div>
                </div>
                <!-- loader wrapper -->

                <div class="app-body p-4 bg-danish">
                    <div class="row" id="ajaxMain">
                        <div class="col-sm-12 mb-2">
                            <div id="all_cat_title" class="item-header fw-600 text-black mt-0 mb-0">
                                <h4 class=" ">
                                    Categories </h4><a href="#" class="more-btn cat_link_menu "><i
                                        class="ti-arrow-left"></i>
                                    back to home </a>
                            </div>
                            <div id="parent_cat" class="owl-carousel owl-theme shop-categoris vis-slider"
                                style="width:120%;">
                                <div class="item"><a href="javascript:;" data-id="all" class="cat_link menu-spl-cat"> <img
                                            src="{{url('/')}}/front/uploads/cat_img/all_items.jpg" class="cat_img">
                                        <h4 class=" ">All Items</h4>
                                    </a></div>
                                    @foreach ($category as $item)
                                    <div class="item"><a href="javascript:;" data-id="{{$item->name}}" class="cat_link"> <img
                                        src="{{url('/')}}/{{$item->image}}"
                                        class="cat_img">
                                        <h4 class=" ">{{$item->name}}</h4>
                                        </a>
                                    </div>
                                    @endforeach
                                


                            </div>
                            
                            <div class="sub">
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-sm-12 mb-2">
                            <div id="ajax_sub_cat">

                                <div id="sub_cat" class="owl-carousel food-cat ">

                                    <div class="item"> <a href="javascript:;" data-id="all" class="spl_link cur_sub">
                                            <h4>All Items</h4>
                                        </a></div>

                                    <div class="item"> <a href="javascript:;" data-id="popular" class="spl_link menu-spl-best">
                                            <h4>Popular </h4>
                                        </a></div>

                                    <div class="item"> <a href="javascript:;" data-id="special" class="spl_link menu-spl-special">
                                            <h4>Special Items </h4>
                                        </a></div>
                                </div>


                            </div>
                        </div>



                        <div class="col-sm-12">


                            <ul class="shop-item pl-0">

                                <div id="ajax">


                                    <div id="response">

                                        <!-- response(next pages data) will get appended here -->

                                        <!--we need to populate some initial data-->
                                        @foreach ($product as $item)
                                            <li class="product text-center"
                                                data-image="{{url('/')}}/{{$item->image}}"
                                                data-name="{{$item->name}}" data-price="{{$item->price}}" data-id="{{$item->id}}">
                                                <a data-id="{{$item->id}}" class="showProductInfo">
                                                    <div class="item list-item-full  pl-0 pr-0">
                                                        <figure class="mb-0"><img
                                                                src="{{url('/')}}/{{$item->image}}">
                                                        </figure>
                                                        <div class="content-div"></div>
                                                        <i class="ti-heart mt-3  bg-price price">QAR <span>{{$item->price}}</span></i>
                                                    </div>
                                                </a>
                                                <h4 class="">Chicken biryani</h4>
                                                <div class="hCid hcId{{$item->id}}">
                                                    <input type="hidden" class="count cId{{$item->id}}" value="1"
                                                        onchange="cart.updateCartItem({{$item->id}}, this.value);" /> </div><button
                                                    class="add-to-cart tiny bId{{$item->id}} btn btn-round btn-outline-success mr-1 mt-2"><i
                                                        class="ti-shopping-cart"></i> add to cart</button>

                                            </li>
                                        @endforeach
                                        
                                    </div>


                                    <input type="hidden" id="pageno" value="1">
                                    <input type="hidden" id="cat" value="0">
                                    <input type="hidden" id="spl_filter" value="">
                                    <div class="clearfix"></div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>




            </div>

            <!-- <nav class="navigation style7 style1">
				<div class="container pl-0 pr-0">
					<div class="nav-content text-center">
						<h6 style="padding:5px 0 0 0;">TIJARA SMART MENU  BY <a href="">ARGENTAVIS </a></h6>
					</div>
				</div>
			</nav> -->


            <!-- <nav class="navigation style6 style1">
				<div class="container pl-0 pr-0">
					<div class="nav-content" style="background-color: #fff;">
						<ul>
							<li><a href="tel:067445449" class="nav-content-bttn" ><i class="fa fa-phone"></i>Helpline</a></li>

							<li><a href="tel:0551185911" class="nav-content-bttn"><i class="ti-mobile"></i>Call</a></li>

							<li><a  href="javascript:;" class="nav-content-bttn  allCat"><i class="ti-view-grid"></i>Menu</a></li>

							<li><a href="https://api.whatsapp.com/send?phone=97167445449" class="nav-content-bttn" data-tab="favorites"><i class="fa fa-whatsapp "></i>Whatsapp</a></li>

							<li><a href="https://www.google.com/maps/place/AL+AROOS+RESTAURANT+Jurf+Branch+2/@25.4319906,55.5298238,17z/data=!3m1!4b1!4m5!3m4!1s0x3ef5f9518423e8fd:0x142b07354613cdc6!8m2!3d25.4319906!4d55.5320125?hl=en-AE" class=" nav-content-bttn" ><i class="ti-location-pin"></i>Location</a></li>



						</ul>
					</div>
				</div>
			</nav> -->

            <nav class="navigation style7 style1">
                <div class="container pl-0 pr-0">
                    <div class="nav-content">
                        <ul>
                            <li><a href="javascript:;" class="nav-content-bttn  allCat"><i class="ti-view-grid"></i>Menu</a>
                            </li>

                            <li><a href="tel:{{$footer->number}}" class="nav-content-bttn"><i class="ti-mobile"></i>Call</a></li>

                            <li class="shopping-cart"><a href="#"
                                    class=" cart-count mt-1 nav-content-bttn nav-center showCartInfo"><i
                                        class="ti-shopping-cart-full"></i><span id="cartStat">0</span></a></li>

                            <li><a href="https://api.whatsapp.com/send?phone={{$footer->whatsapp}}" class="nav-content-bttn"
                                    data-tab="favorites"><i class="fa fa-whatsapp "></i>Whatsapp</a></li>

                            <li><a href="{{$footer->location}}"
                                    class=" nav-content-bttn"><i class="ti-location-pin"></i>Location</a></li>
                        </ul>
                    </div>
                </div>
            </nav>


        </div>



        <nav class="outer-nav left vertical ">
            <header class="bg-tranparent style2 mt-3 pb-0 bg-home">
                <div class="row">
                    <div class="col-sm-4 text-left pos-top">
                        <a href="#" class="menu-btn mt-0" id="close-sidebar"></a>
                    </div>
                    <div class="col-sm-4 text-center pos-top">
                        <a href="#" class="logo d-block mt-1"><img src="{{url('/')}}/front/images/logo-white.png"
                                class="img-fluid"></a>
                    </div>
                    <!-- <div class="col-sm-4 text-right pos-top">
						<a href="#" class="cart-btn mt-1"><i class="ti-pen"></i><span>1</span></a>
	                </div> -->
                </div>
            </header>
            <ul class="nav-item ">
                <!-- <li class="menu-text text-left">
	        		<img src="{{url('/')}}/front/images/client_logo.png" alt="user">

	        	</li> -->

                <li><a href="0.html" class=" cat_link_menu"><i class="ti-home"></i>
                        Home </a></li>

                <li><a href="best.html" data-id="popular" class=" spl_link_menu"><i class="ti-face-smile"></i>
                        Popular Menu </a></li>

                <li><a href="special.html" data-id="special" class=" spl_link_menu"><i class="ti-star"></i>
                        Special Menu </a></li>

                <li><a href="javascript:;" class="allCat"><i class="ti-layout-grid2 "></i>
                        Categories </a></li>

                <li><a href="#" class="feedbackNav"><i class="ti-comment-alt"></i>
                        Feedback </a></li>

                <li><a href="#" class="showstoreInfo"><i class="ti-layout-media-center-alt "></i>
                        About Us </a></li>

                <li><a href="#"><i class="ti-info-alt"></i>
                        Tijara SmartMenu
                    </a></li>

            </ul>
        </nav>



    </div>
    <!-- main wrapper -->

    <div id="desktop-view">
        <div class="container" style="flex-direction: column;">

            <div class="divider" style="border-color: rgb(74, 65, 42);"></div>
            <div style="text-align: right; margin-right :30px">
                <img src="{{url('/')}}/front/images/1.png">
            </div>
        </div>
    </div>


    <div class="modal fade action-sheet" id="actionSheetIconed" tabindex="-1" role="dialog">
        <div class="modal-dialog full-sheet" role="document">
            <div class="modal-content">
                <div class="modal-header text-center d-block">
                    <h5 class="modal-title text-center ">

                        Choose Language </h5>
                </div>
                <div class="modal-body">
                    <ul class="action-button-list  text-center">
                        <li>
                            <a href="index.html?lang=en" class="btn btn-list text-primary">
                                <span><i class="ti-align-right"></i>English</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html?lang=ar" class="btn btn-list ar">
                                <span><i class="ti-align-right"></i>?????????? ??????????????</span>
                            </a>
                        </li>

                        <li class="action-divider"></li>
                        <li class="pb-1">
                            <a href="#" class="btn btn-list text-danger " data-dismiss="modal">
                                <span>
                                    <i class="ti-info-alt"></i> Close
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Store Info / About Us -->
    <div class="modal fade right modal-fluid fullpage " id="storeInfo" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel" aria-hidden="true">

        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog  modal-fluid " role="document">
            <div class="modal-content">
                <div class="modal-header fixed-top">
                    <h5 class="modal-title" id="exampleModalLongTitle"><b>About Us</b></h5>
                    <a href="#" class="more-btn blackbtn" data-dismiss="modal"><i class="ti-arrow-left"></i> back to
                        home </a>
                </div>
                <div class="modal-body">
                    <div class="app-body single-item p-0 mt-50 text-center">
                        <div class="col-sm-12">
                            <br>

                            <img src="{{url('/')}}/{{$footer->logo}}" class=" ">
                            <br>
                            <br>

                            <p><strong></strong></p>

                            <p></p>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart Details-->
    <div class="modal fade right modal-fluid fullpage " id="cartInfo" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel" aria-hidden="true">


        <div class="modal-dialog  modal-fluid " role="document">
            <div class="modal-content">
                <div class="modal-header fixed-top">
                    <h5 class="modal-title" id="exampleModalLongTitle"><b>Checkout</b></h5>
                    <a href="#" class="more-btn blackbtn" data-dismiss="modal"><i class="ti-arrow-left"></i> back to
                        home </a>
                </div>
                <div class="modal-body">
                    <div class="app-body single-item p-0 mt-50 form-wrap ">
                        <div class="col-sm-12">
                            <div class="text-left pos-top">
                                <!-- <h4 class="titleText text-left mt-4 mb-2 text-center"><strong>My Cart</strong></h4> -->
                            </div>
                            <div class="">
                                <div class="pt-4">
                                    <form id="submitCart" method="post" action="#">
                                        @csrf
                                        <div class="bs-stepper modal-safety-padding">
                                            <div class="bs-stepper-header" role="tablist">
                                                <!-- your steps here -->
                                                <div class="step" data-target="#logins-part">
                                                    <button type="button" class="step-trigger" role="tab"
                                                        aria-controls="logins-part" id="logins-part-trigger">
                                                        <span class="bs-stepper-circle">1</span>
                                                        <span class="bs-stepper-label">Cart</span>
                                                    </button>
                                                </div>
                                                <div class="line"></div>
                                                <div class="step" data-target="#information-part">
                                                    <button type="button" class="step-trigger" role="tab"
                                                        aria-controls="information-part" id="information-part-trigger">
                                                        <span class="bs-stepper-circle">2</span>
                                                        <span class="bs-stepper-label">Checkout </span>
                                                    </button>
                                                </div>
                                                <div class="line"></div>
                                                <div class="step" data-target="#final">
                                                    <button type="button" class="step-trigger" role="tab"
                                                        aria-controls="final" id="final-trigger">
                                                        <span class="bs-stepper-circle">3</span>
                                                        <span class="bs-stepper-label">Enjoy </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="bs-stepper-content">
                                                <!-- your steps content here -->
                                                <div id="logins-part" class="content" role="tabpanel"
                                                    aria-labelledby="logins-part-trigger">
                                                    <div class="cart">

                                                        <div class="app-body pl-4 pr-4 pt-3 pos-top" id="modeBlock">
                                                            <h3 id="validmode" class="text-left">Service Mode</h3>
                                                            <ul class="menu-item list-inline tooltrip-div text-center">
                                                                <li class="list-inline-item p-3 ">
                                                                    <div class="md-radio">
                                                                        <input id="1" type="radio" name="mode"
                                                                            value="Delivery">
                                                                        <label for="1">Delivery</label>
                                                                    </div>
                                                                    &nbsp;

                                                                    <div class="md-radio">
                                                                        <input id="2" type="radio" name="mode"
                                                                            value="Takeaway">
                                                                        <label for="2">Takeaway</label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div id="minReminder">
                                                                <h6 class="text-center"><i>Minimum Order For A Free
                                                                        Delivery is QAR <strong>0</strong></i></h6>
                                                                <h5 id="freeDeliveryQualified" class="text-center">
                                                                    &nbsp;</h5>
                                                            </div>
                                                            <hr>
                                                        </div>

                                                        <div id="cartItems">Loading cart...</div>

                                                        <div id="cartCalc">
                                                            <div class="table-content table-responsive mb--30">
                                                                <table class="table order-table order-table-1">


                                                                    <tfoot>
                                                                        <tr class="cart-subtotal total-calc">
                                                                            <th>Subtotal</th>
                                                                            <td class="text-right">QAR <strong
                                                                                    id="totalPrice">0.00</strong></td>
                                                                        </tr>
                                                                        <tr class="shipping total-calc">

                                                                            <th>Tax ( <strong id="taxValue">0</strong>%
                                                                                )</th>
                                                                            <td class="text-right">
                                                                                QAR <strong id="taxAmount">0.00</strong>
                                                                            </td>

                                                                        </tr>

                                                                        <tr class="shipping total-calc"
                                                                            id="deliveryBlock">

                                                                            <th>Delivery Fee</th>
                                                                            <td class="text-right">
                                                                                QAR <strong
                                                                                    id="deliveryFee">0.00</strong>
                                                                            </td>

                                                                        </tr>

                                                                        <tr class="order-total grand-total">
                                                                            <th>Order Total</th>
                                                                            <td class="text-right"><span
                                                                                    class="order-total-ammount">QAR
                                                                                    <strong
                                                                                        id="orderTotal">0.00</strong></span>
                                                                            </td>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                            <div class="text-right ">
                                                                <!-- <button type="button" class="btn  btn-dark" id="clear"><i class="text-white ti-arrow-left mr-2 "></i></button> -->
                                                                <a href="#" class="btn  btn-outline-success "><i
                                                                        class="ti-arrow-left mr-2 "
                                                                        data-dismiss="modal"></i>back to menu</a>

                                                                <button type="button" class="btn  btn-outline-danger"
                                                                    id="clear"><i class=" ti-brush-alt mr-2 "></i>Clear
                                                                    Cart</button>
                                                            </div>
                                                            <button type="button"
                                                                class="btn-success toCheckout fw-600 mt-4 next-tour btn btn-lg pl-0 text-center w-100 text-white"
                                                                id="checkOut">Proceed To Checkout<i
                                                                    class="ti-arrow-right ml-2"></i></button>
                                                        </div>

                                                        <p class="note mt-4"><strong>Note :</strong> <i>If you are
                                                                looking for <strong>DineIn </strong>option please </i>
                                                            <a href="scan.html" class=""><i class="ti-hand-point-right">
                                                                </i>Scan the QR code</a> on your table </p>

                                                    </div>


                                                </div>

                                                <div id="information-part" class="content" role="tabpanel"
                                                    aria-labelledby="information-part-trigger">
                                                    <div class="card-body pt-3">
                                                        <div class="input-group mb-3 mt-3 bg-white d-block">
                                                            <label for="txt" class="label-for"
                                                                id="validCustomerName">Enter Your Name</label>
                                                            <input class="form-control style2  form-control-lg"
                                                                name="name" id="customerName" type="text"
                                                                placeholder="Name">
                                                        </div>

                                                        <div class="input-group mb-3 mt-3 bg-white d-block">
                                                            <label for="txt" class="label-for"
                                                                id="validCustomerPhone">Enter Your Phone</label>
                                                            <input
                                                                class="form-control style2  form-control-lg numericValue"
                                                                id="customerPhone" type="number" placeholder="Phone"
                                                                name="phone">
                                                        </div>
                                                        <div class="input-group mb-3 mt-3 bg-white d-block">
                                                            <label for="txt" class="label-for"
                                                                id="validCustomerWhatsapp">Enter Your Whatsapp</label>
                                                            <input class="form-control style2  form-control-lg"
                                                                id="customerWhatsapp" type="number"
                                                                placeholder="Whatsapp" name="whatsapp">
                                                        </div>
                                                        <div class="input-group mb-3 mt-3 bg-white d-block">
                                                            <label for="txt" class="label-for"
                                                                id="validCustomerEmail">Enter Your Email</label>
                                                            <input class="form-control style2  form-control-lg"
                                                                id="customerEmail" type="email" placeholder="Email"
                                                                name="email">
                                                        </div>
                                                        <div class="input-group mb-3 mt-3 bg-white d-block"
                                                            id="addressBlock">
                                                            <label for="txt" class="label-for"
                                                                id="validCustomerAddress">Enter Your Address</label>
                                                            <textarea name="address" class="form-control style2-text"
                                                                rows="3" placeholder="Address"
                                                                id="customerAddress"></textarea>
                                                        </div>

                                                        <div class="input-group mb-3 mt-3 bg-white d-block">
                                                            <label for="txt" class="label-for">Order Note</label>
                                                            <textarea name="order_note" class="form-control style2-text"
                                                                rows="3" placeholder="Order Note"></textarea>
                                                        </div>

                                                        <div id="reviewOrder">&nbsp; </div>
                                                        <div class="text-right">
                                                            <button type="button" class="btn  btn-outline-dark toCart"
                                                                id="clear"><i class="ti-shopping-cart-full mr-2 "></i>
                                                                Edit Cart</button>
                                                        </div>
                                                        <button type="button"
                                                            class="btn-success toFinal fw-600 mt-4 next-tour btn btn-lg pl-0 text-center w-100 text-white"><i
                                                                class='ti ti-check mr-1'></i>Place Your Order On
                                                            WhatsApp</button>
                                                    </div>
                                                </div>

                                                <div id="final" class="content" role="tabpanel"
                                                    aria-labelledby="final-trigger">
                                                    <div id="orderCompletionStatus"> &nbsp;</div>
                                                    <div id="orderCompleted"> &nbsp;</div>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Details -->
    <div class="modal fade right modal-fluid fullpage " id="productInfo" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel" aria-hidden="true">

        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog  modal-fluid " role="document">


            <div id="ajax_product_info">&nbsp;</div>



        </div>
    </div>

    <!-- Feedback -->
    <div class="modal fade right modal-fluid fullpage " id="feedbackPage" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel" aria-hidden="true">

        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog  modal-fluid " role="document">
            <div class="modal-content">
                <div class="modal-header fixed-top">
                    <h5 class="modal-title" id="exampleModalLongTitle"><b>Feedback</b></h5>
                    <a href="#" class="more-btn blackbtn" data-dismiss="modal"><i class="ti-arrow-left"></i> back to
                        home </a>
                </div>
                <div class="modal-body">
                    <div class="app-body single-item p-0 mt-50">


                        <form action="#" method="post" id="addFeedback">
                            <input name="feedback_type" type="hidden" class="" value="">

                            <div class="col-md-12 qblock">
                                <label><span class="questions">1. Is This Your First Visit ? </span>
                                    <small id="validVisitStat" class="form-control-feedback">
                                    </small>
                                </label>

                                <div class="clearfix"></div>
                                <label class="custom-control custom-radio wimg cst-ctrl">
                                    <input id="vsrad1" name="visit_stat" type="radio" class="" value="0">
                                    <img src="{{url('/')}}/front/assets/images/yes.png" class="long-btn"> </label>
                                <label class="custom-control custom-radio wimg cst-ctrl">
                                    <input id="vsrad2" name="visit_stat" type="radio" class="" value="1">
                                    <img src="{{url('/')}}/front/assets/images/no.png" class="long-btn"> </label>
                            </div>
                            <div class="col-md-12 qblock">
                                <label><span class="questions ">2. How Would You Rate <strong>Quality Of Our
                                            Food</strong>?</span>
                                    <small id="validq1" class="form-control-feedback">
                                    </small>
                                </label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="custom-control custom-radio wimg cst-ctrl">
                                            <input id="q1-1" name="q1" type="radio" class="" value="1">
                                            <img src='{{url('/')}}/front/assets/images/angry.png' class='smiley'>
                                        </label>
                                        <label class="custom-control custom-radio wimg cst-ctrl">
                                            <input id="q1-2" name="q1" type="radio" class="" value="2">
                                            <img src='{{url('/')}}/front/assets/images/confused.png' class='smiley'>
                                        </label>
                                        <label class="custom-control custom-radio wimg cst-ctrl">
                                            <input id="q1-3" name="q1" type="radio" class="" value="3">
                                            <img src='{{url('/')}}/front/assets/images/happy.png' class='smiley'>
                                        </label>
                                        <label class="custom-control custom-radio wimg cst-ctrl">
                                            <input id="q1-4" name="q1" type="radio" class="" value="4">
                                            <img src='{{url('/')}}/front/assets/veryhappy.png' class='smiley'> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 qblock">
                                <label><span class="questions ">3. How Would You Rate <strong>Speed of
                                            Service</strong>?</span>
                                    <small id="validq2" class="form-control-feedback">
                                    </small>
                                </label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="custom-control custom-radio wimg cst-ctrl">
                                            <input id="q2-1" name="q2" type="radio" class="" value="1">
                                            <img src='{{url('/')}}/front/assets/images/angry.png' class='smiley'>
                                        </label>
                                        <label class="custom-control custom-radio wimg cst-ctrl">
                                            <input id="q2-2" name="q2" type="radio" class="" value="2">
                                            <img src='{{url('/')}}/front/assets/images/confused.png' class='smiley'>
                                        </label>
                                        <label class="custom-control custom-radio wimg cst-ctrl">
                                            <input id="q2-3" name="q2" type="radio" class="" value="3">
                                            <img src='{{url('/')}}/front/assets/images/happy.png' class='smiley'>
                                        </label>
                                        <label class="custom-control custom-radio wimg cst-ctrl">
                                            <input id="q2-4" name="q2" type="radio" class="" value="4">
                                            <img src='{{url('/')}}/front/assets/images/veryhappy.png' class='smiley'>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 qblock">
                                <label><span class="questions ">4. How Would You Rate <strong>Our
                                            Hospitality</strong>?</span>
                                    <small id="validq3" class="form-control-feedback">
                                    </small>
                                </label>


                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="custom-control custom-radio wimg cst-ctrl">
                                            <input id="q3-1" name="q3" type="radio" class="" value="1">
                                            <img src='{{url('/')}}/front/assets/images/angry.png' class='smiley'>
                                        </label>
                                        <label class="custom-control custom-radio wimg cst-ctrl">
                                            <input id="q3-2" name="q3" type="radio" class="" value="2">
                                            <img src='{{url('/')}}/front/assets/images/confused.png' class='smiley'>
                                        </label>
                                        <label class="custom-control custom-radio wimg cst-ctrl">
                                            <input id="q3-3" name="q3" type="radio" class="" value="3">
                                            <img src='{{url('/')}}/front/assets/images/happy.png' class='smiley'>
                                        </label>
                                        <label class="custom-control custom-radio wimg cst-ctrl">
                                            <input id="q3-4" name="q3" type="radio" class="" value="4">
                                            <img src='{{url('/')}}/front/assets/images/veryhappy.png' class='smiley'>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 qblock">
                                <label><span class="questions ">5. How Would You Rate <strong> The Hygiene </strong>
                                        ?</span>
                                    <small id="validq4" class="form-control-feedback">
                                    </small>
                                </label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="custom-control custom-radio wimg cst-ctrl">
                                            <input id="q4-1" name="q4" type="radio" class="" value="1">
                                            <img src='{{url('/')}}/front/assets/images/angry.png' class='smiley'>
                                        </label>
                                        <label class="custom-control custom-radio wimg cst-ctrl">
                                            <input id="q4-2" name="q4" type="radio" class="" value="2">
                                            <img src='{{url('/')}}/front/assets/images/confused.png' class='smiley'>
                                        </label>
                                        <label class="custom-control custom-radio wimg cst-ctrl">
                                            <input id="q4-3" name="q4" type="radio" class="" value="3">
                                            <img src='{{url('/')}}/front/assets/images/happy.png' class='smiley'>
                                        </label>
                                        <label class="custom-control custom-radio wimg cst-ctrl">
                                            <input id="q4-4" name="q4" type="radio" class="" value="4">
                                            <img src='{{url('/')}}/front/assets/images/veryhappy.png' class='smiley'>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 qblock">
                                <label><span class="questions">6. Overall, are you satisfied with Our Restaurant
                                        ?</span>
                                    <small id="validChoiceStat" class="form-control-feedback">
                                    </small>
                                </label>

                                <div class="clearfix"></div>


                                <label class="custom-control custom-radio wimg cst-ctrl">
                                    <input id="rad1" name="choice_stat" type="radio" class="" value="1">
                                    <img src="{{url('/')}}/front/assets/images/like.png" class="smiley"> </label>

                                <label class="custom-control custom-radio wimg cst-ctrl">
                                    <input id="rad2" name="choice_stat" type="radio" class="" value="0">
                                    <img src="{{url('/')}}/front/assets/images/dislike.png" class="smiley"> </label>


                            </div>

                            <div id="dvChoice">
                                <div class="col-lg-10 col-md-12 qblock">
                                    <div class="form-group">
                                        <label> <span class="questions"> If not can you share the reason, so that we can
                                                improve to serve you better ? </span>
                                            <small id="validChoice" class="form-control-feedback">

                                            </small>
                                        </label>

                                        <textarea class="form-control" id="productChoice" name="choice" rows="3"
                                            placeholder=""></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 qblock">
                                <label><span class="questions ">7. Share your suggestions/ Recommendations / complaints
                                        / Concerns, if any, for improving your dining experience ?</span>

                                </label>

                                <div class="demo-radio-button">

                                    <input name="comment_group" type="radio" class="with-gap radio-col-red"
                                        id="Complaint" value="Complaint">
                                    <label for="Complaint">Complaint
                                        <!-- <span class="malayalam">(??????????????????????????????)</span> --></label> &nbsp;&nbsp;

                                    <input name="comment_group" type="radio" id="Concern"
                                        class="with-gap radio-col-orange" value="Concern">
                                    <label for="Concern">Concern
                                        <!-- <span class="malayalam">(??????????????????????????????????????????????)</span> --></label> <br>

                                    <input name="comment_group" type="radio" id="Suggestion"
                                        class="with-gap radio-col-green" value="Suggestion">
                                    <label for="Suggestion">Suggestion
                                        <!-- <span class="malayalam">(???????????????????????????????????????????????????????????????????????????)</span> --></label>
                                    &nbsp;&nbsp;

                                    <input name="comment_group" type="radio" id="Compliment"
                                        class="with-gap radio-col-light-green" value="Compliment">
                                    <label for="Compliment">Compliment
                                        <!-- <span class="malayalam">(???????????????????????????????????????????????????)</span> --></label>

                                    <small id="validCommentGroup" class="form-control-feedback"></small>

                                </div>

                                <div class="clearfix"></div>
                                <textarea class="form-control" id="clientComment" name="comment" rows="5"
                                    placeholder="comments / questions /  concerns"></textarea>


                            </div>

                            <div class="clearfix"></div>
                            <div class="col-sm-12 ">
                                <div class="form-group">
                                    <label class="control-label">Name *
                                        <small id="validName" class="form-control-feedback">
                                        </small>
                                    </label>
                                    <input type="text" name="name" id="clientName" class="form-control form-control-lg"
                                        placeholder="Name" value="">
                                </div>
                            </div>
                            <div class="col-sm-12 ">
                                <div class="form-group">
                                    <label class="control-label">Contact Number *
                                        <small id="validContact" class="form-control-feedback">
                                        </small>
                                    </label>
                                    <input type="text" name="contact" id="clientContact"
                                        class="form-control  numericValue form-control-lg"" placeholder=" Phone"
                                        value="">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label">Email
                                        <small id="validEmail" class="form-control-feedback">
                                        </small>
                                    </label>
                                    <input type="email" name="email" id="clientEmail"
                                        class="form-control form-control-lg" placeholder="Email" value="">
                                </div>

                            </div>
                            <div class="col-md-12 ">
                                <div class="text-center">

                                    <button type="submit" name="save" class="btn w100 btn-round btn-warning mr-1 mb-2"
                                        id="saveBtn"><strong>SUBMIT</strong></button>
                                </div>
                            </div>
                        </form>
                        <div id="feedMsg" class="text-center">&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="modal fade iconDialog show" id="errorModal" data-backdrop="static" tabindex="-1" role="dialog"
        aria-modal="true">
        <div class="modal-dialog modal-lg modal-md modal-dialog-centered modal-dialog-zoom" role="document">
            <div class="modal-content b-no errorbg">
                <div class="modal-header d-block b-no pb-2 text-center">
                    <i class="ti-info-alt bg-danger"></i>
                    <h5 class="modal-title text-center fw-600">Error</h5>
                </div>
                <div class="modal-body d-block text-center b-no pb-4">
                    <p> Highlighted Fields Are Required </p>
                    <p id="errorFields"></p>
                </div>
                <div class="modal-footer b-no text-center d-block mt-2">
                    <a href="#" class="btn btn-outline-primary  btn-text-primary ml-2 erclose"
                        data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade iconDialog show" id="errorFeedback" data-backdrop="static" tabindex="-1" role="dialog"
        aria-modal="true">
        <div class="modal-dialog modal-lg modal-md modal-dialog-centered modal-dialog-zoom" role="document">
            <div class="modal-content b-no errorbg">
                <div class="modal-header d-block b-no pb-2 text-center">
                    <i class="ti-info-alt bg-danger"></i>
                    <h5 class="modal-title text-center fw-600">Error</h5>
                </div>
                <div class="modal-body d-block text-center b-no pb-4">
                    Highlighted Fields Are Required
                </div>
                <div class="modal-footer b-no text-center d-block mt-2">
                    <a href="#" class="btn btn-outline-primary  btn-text-primary ml-2 erclose"
                        data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade iconDialog show" id="successFeedback" data-backdrop="static" tabindex="-1" role="dialog"
        aria-modal="true">
        <div class="modal-dialog modal-lg modal-md modal-dialog-centered modal-dialog-zoom" role="document">
            <div class="modal-content b-no">
                <div class="modal-header d-block b-no pb-0 text-center">
                    <i class="ti-check bg-success"></i>
                    <h5 class="modal-title text-center fw-600">Success</h5>
                </div>
                <div class="modal-body d-block text-center b-no pb-4">
                    Feedback Submitted Successfully !
                </div>
                <div class="modal-footer b-no text-center d-block mt-2">
                    <a href="#" class="btn btn-outline-primary  btn-text-primary ml-2 erclose feedbackSuccessNav"
                        data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>



    <!-- SCRIPTS -->
    <script>
        $('body').on('click', '.add-to-cart', function () {
                var cart = $('.shopping-cart');
                var imgtodrag = $(this).closest('.product').find("img").eq(0);
                if (imgtodrag) {
                    var imgclone = imgtodrag.clone()
                        .offset({
                            top: imgtodrag.offset().top,
                            left: imgtodrag.offset().left
                        })

                        .css({
                            'opacity': '0.5',
                            'position': 'absolute',
                            'height': '120px',
                            'width': '120px',
                            'border-radius': '15px',
                            'z-index': '100'
                        })
                        .appendTo($('body'))
                        .animate({
                            'top': cart.offset().top + 5,
                            'left': cart.offset().left + 20,
                            'width': 60,
                            'height': 60
                        }, 1000, 'easeInOutExpo');


                    setTimeout(function () {
                        cart.effect("bounce", {
                            times: 2
                        }, 200);
                    }, 1500);



                    imgclone.animate({
                        'width': 0,
                        'height': 0
                    }, function () {
                        $(this).detach()
                    });
                }
        });
        var page = 1;
        $('#loader').on('inview', function (event, isInView) {
                if (isInView) {
                    page++;
                    $.ajax({
                        type: 'POST',
                        url: '?page=' + page,
                        data: {
                            pageno: nextPage,
                            cat: catNow
                        },
                        success: function (data) {

                            if (data != '') {
                                $('.add-to-cart').on(
                                    'click',
                                    function () {
                                        var cart = $(
                                            '.shopping-cart'
                                            );
                                        var imgtodrag =
                                            $(this)
                                            .parent(
                                                '.product'
                                                ).find(
                                                "img")
                                            .eq(0);
                                        if (imgtodrag) {
                                            var imgclone =
                                                imgtodrag
                                                .clone()
                                                .offset({
                                                    top: imgtodrag
                                                        .offset()
                                                        .top,
                                                    left: imgtodrag
                                                        .offset()
                                                        .left
                                                })

                                                .css({
                                                    'opacity': '0.5',
                                                    'position': 'absolute',
                                                    'height': '120px',
                                                    'width': '120px',
                                                    'border-radius': '15px',
                                                    'z-index': '100'
                                                })
                                                .appendTo(
                                                    $(
                                                        'body')
                                                    )
                                                .animate({
                                                        'top': cart
                                                            .offset()
                                                            .top +
                                                            5,
                                                        'left': cart
                                                            .offset()
                                                            .left +
                                                            20,
                                                        'width': 60,
                                                        'height': 60
                                                    },
                                                    1000,
                                                    'easeInOutExpo'
                                                    );


                                            setTimeout(
                                                function () {
                                                    cart.effect(
                                                        "bounce", {
                                                            times: 2
                                                        },
                                                        200
                                                        );
                                                },
                                                1500
                                                );



                                            imgclone
                                                .animate({
                                                        'width': 0,
                                                        'height': 0
                                                    },
                                                    function () {
                                                        $(this)
                                                            .detach()
                                                    });
                                        }
                                    });
                                $('#response').append(data);
                                $('#pageno').val(nextPage);

                            } else {
                                $("#loader").hide();
                            }
                        }
                    });
                    var nextPage = parseInt($('#pageno').val()) + 1;
                    var catNow = parseInt($('#cat').val());
                    
                }
        });

    </script>
	<script>
	$("#search-title").hide();
	$("#all_cat_title").hide();
	$("#feedMsg").hide();

	$(document).on('click','.cat_link',function(e) {
        e.preventDefault();
        $("#menu_search").val('');
        var id = $(this).data('id');
        $('#parent_cat a').removeClass('cur');
        $("#cat").val(id);
    	$(this).addClass('cur');
        $("#pageno").val(1);
        $("#ajax").html("<span class='text-center' style='padding-top:20px'>Loading<br><img src='{{url('/')}}/front/ajax_loader.svg'></span>");
        $.ajax({
            url: '{{url('/category')}}' + '/' + id,
            async: true,
            cache: false,
            success: function (data){ 
                var hello = '';
                for ( i in data[0] ) {
                    hello += '<li style="" class="product text-center" data-image="{{url('/')}}/'+ data[0][i].image +'" data-name="'+data[0][i].name +'" data-price="'+data[0][i].price +'" data-id="'+data[0][i].id+'">' +
                        '<a data-id="'+data[0][i].id+'" class="showProductInfo">' +
                            '<div class="item list-item-full  pl-0 pr-0">' +
                                '<figure class="mb-0"><img src="{{url('/')}}/'+ data[0][i].image +'"></figure>' +
                                '<div class="content-div"></div>' +
                                '<i class="ti-heart mt-3  bg-price price">AED <span>'+data[0][i].price +'</span></i>' +
                            '</div>' +
                        '</a> <h4 class="">'+data[0][i].name +'</h4> <div class="hCid hcId'+data[0][i].id+'">' +
                           ' <input type="hidden" class="count cId'+data[0][i].id+'" value="1" onchange="cart.updateCartItem('+data[0][i].id+', this.value);">' +
                        '</div><button class="add-to-cart tiny bId'+data[0][i].id+' btn btn-round btn-outline-success mr-1 mt-2"><i class="ti-shopping-cart"></i> add to cart</button>' +

                   ' </li>'};
              $('#ajax').html(
                '<div id="response">' +
                    hello +
                '</div><input type="hidden" id="pageno" value="1">'+
                '<input type="hidden" id="cat" value="0">');
                var sub = '';
                for(i in data[1]){
                    sub += '<div class="item"><a href="javascript:;" data-id="'+data[1][i].name+'" class="cat_link2"> <img ' +
                            'src="{{url('/')}}/'+data[1][i].image+'" class="cat_img">' +
                            '<h4 class=" ">'+data[1][i].name+'</h4>' +
                           ' </a>' +
                        '</div>';}
                $('.sub').html('<p>Sub Categories</p><div id="parent_cat" class="owl-carousel owl-theme shop-categoris vis-slider"style="width:120%;">'+
                    sub +
            '</div>');
            $('.shop-categoris').owlCarousel({
                margin:0,
                nav:false,
                autoplay:true,  
                dots:false,
                items:5
            })
            }


        });


    });


	$(document).on('click','.cat_link2',function(e) {
        e.preventDefault();

        $("#menu_search").val('');
        var id = $(this).data('id');
        $('#parent_cat a').removeClass('cur');
        $("#cat").val(id);
    	$(this).addClass('cur');
        $("#pageno").val(1);
        $("#ajax").html("<span class='text-center' style='padding-top:20px'>Loading<br><img src='{{url('/')}}/front/ajax_loader.svg'></span>");
        $.ajax({
            url: '{{url('/subcategory')}}' + '/' + id,
            async: true,
            cache: false,
            success: function (data){ 
                var hello = '';
                console.log(data);
                for ( i in data ) {
                    hello += '<li style="" class="product text-center" data-image="{{url('/')}}/'+ data[i].image +'" data-name="'+data[i].name +'" data-price="'+data[i].price +'" data-id="'+data[i].id+'">' +
                        '<a data-id="'+data[i].id+'" class="showProductInfo">' +
                            '<div class="item list-item-full  pl-0 pr-0">' +
                                '<figure class="mb-0"><img src="{{url('/')}}/'+ data[i].image +'"></figure>' +
                                '<div class="content-div"></div>' +
                                '<i class="ti-heart mt-3  bg-price price">AED <span>'+data[i].price +'</span></i>' +
                            '</div>' +
                        '</a> <h4 class="">'+data[i].name +'</h4> <div class="hCid hcId'+data[i].id+'">' +
                           ' <input type="hidden" class="count cId'+data[i].id+'" value="1" onchange="cart.updateCartItem('+data[i].id+', this.value);">' +
                        '</div><button class="add-to-cart tiny bId'+data[i].id+' btn btn-round btn-outline-success mr-1 mt-2"><i class="ti-shopping-cart"></i> add to cart</button>' +

                   ' </li>'};
              $('#ajax').html(
                '<div id="response">' +
                    hello +
                '</div><input type="hidden" id="pageno" value="1">'+
                '<input type="hidden" id="cat" value="0">');
            }


        });
    });


    $(document).on('click','.spl_link',function(e) {
        e.preventDefault();

         $("#menu_search").val('');

        $('#sub_cat a').removeClass('cur_sub');
    	$(this).addClass('cur_sub');

        var id = $(this).data('id');
        console.log(id);
        $("#spl_filter").val(id);
        $("#pageno").val(1);
        $("#ajax").html("<span class='text-center' style='padding-top:20px'>Loading<br><img src='{{url('/')}}/front/ajax_loader.svg'></span>");
        $.ajax({
            url: '{{url('/filter')}}'+'/'+id,
            async: true,
            cache: false,
            success: function (data){ 
                var hello = '';
                for ( i in data ) {
                    
                    hello += '<li style="" class="product text-center" data-image="{{url('/')}}/'+ data[i].image +'" data-name="'+data[i].name +'" data-price="'+data[i].price +'" data-id="'+data[i].id+'">' +
                        '<a data-id="'+data[i].id+'" class="showProductInfo">' +
                            '<div class="item list-item-full  pl-0 pr-0">' +
                                '<figure class="mb-0"><img src="{{url('/')}}/'+ data[i].image +'"></figure>' +
                                '<div class="content-div"></div>' +
                                '<i class="ti-heart mt-3  bg-price price">AED <span>'+data[i].price +'</span></i>' +
                            '</div>' +
                        '</a> <h4 class="">'+data[i].name +'</h4> <div class="hCid hcId'+data[i].id+'">' +
                           ' <input type="hidden" class="count cId'+data[i].id+'" value="1" onchange="cart.updateCartItem('+data[i].id+', this.value);">' +
                        '</div><button class="add-to-cart tiny bId'+data[i].id+' btn btn-round btn-outline-success mr-1 mt-2"><i class="ti-shopping-cart"></i> add to cart</button>' +

                   ' </li>'};
              $('#ajax').html(
                '<div id="response">' +
                    hello +
                '</div>');
            }
        });
    });

    $(document).on('click','.spl_link_menu',function(e) {
        e.preventDefault();

         $("#menu_search").val('');
         $('.parent_cat').hide();
         $('#parent_cat').show();
		 $('#sub_cat').hide();

		 $('#search-title').hide();
		 $('#all_cat_title').hide();

		 $('#parent_cat a').removeClass('cur');
    	 $('#sub_cat a').removeClass('cur_sub');


         $('.perspective').removeClass('animate');

        var spl_filter = $(this).attr('href');
        if(spl_filter == 'best'){
        	 $('.menu-spl-best').addClass('cur_sub');
        }else{
        	 $('.menu-spl-special').addClass('cur_sub');
        }
        var id = $(this).data('id');
        $("#spl_filter").val(spl_filter);
        $("#pageno").val(1);
        var data =  'spl_filter='+spl_filter;
        $("#ajax").html("<span class='text-center' style='padding-top:20px'>Loading<br><img src='{{url('/')}}/front/ajax_loader.svg'></span>");
        $.ajax({
            url: '{{url('/filter')}}'+'/'+id,
            async: true,
            cache: false,
            success: function (data){ 
                var hello = '';
                for ( i in data ) {
                    
                    hello += '<li style="" class="product text-center" data-image="{{url('/')}}/'+ data[i].image +'" data-name="'+data[i].name +'" data-price="'+data[i].price +'" data-id="'+data[i].id+'">' +
                        '<a data-id="'+data[i].id+'" class="showProductInfo">' +
                            '<div class="item list-item-full  pl-0 pr-0">' +
                                '<figure class="mb-0"><img src="{{url('/')}}/'+ data[i].image +'"></figure>' +
                                '<div class="content-div"></div>' +
                                '<i class="ti-heart mt-3  bg-price price">AED <span>'+data[i].price +'</span></i>' +
                            '</div>' +
                        '</a> <h4 class="">'+data[i].name +'</h4> <div class="hCid hcId'+data[i].id+'">' +
                           ' <input type="hidden" class="count cId'+data[i].id+'" value="1" onchange="cart.updateCartItem('+data[i].id+', this.value);">' +
                        '</div><button class="add-to-cart tiny bId'+data[i].id+' btn btn-round btn-outline-success mr-1 mt-2"><i class="ti-shopping-cart"></i> add to cart</button>' +

                   ' </li>'};
              $('#ajax').html(
                '<div id="response">' +
                    hello +
                '</div>');
            }
        });
    });


    $(document).on('click','.cat_link_menu',function(e) {
        e.preventDefault();


         $("#menu_search").val('');
         $('#search-title').hide();
          $('#all_cat_title').hide();

         $('.parent_cat').show();
         $('#parent_cat').show();
		 $('#sub_cat').show();


        $('.perspective').removeClass('animate');
          $('#parent_cat a').removeClass('cur');
           $('.menu-spl-cat').addClass('cur');

    	//	$(this).addClass('cur');

        var cat = $(this).attr('href');
        $("#cat").val(cat);
        $("#pageno").val(1);
        var data =  'cat='+cat;
        $("#ajax").html("<span class='text-center' style='padding-top:20px'>Loading<br><img src='{{url('/')}}/front/ajax_loader.svg'></span>");
        $.ajax({
            url: '{{url('/filter')}}'+'/all',
            async: true,
            cache: false,
            success: function (data){ 
                var hello = '';
                for ( i in data ) {
                    
                    hello += '<li style="" class="product text-center" data-image="{{url('/')}}/'+ data[i].image +'" data-name="'+data[i].name +'" data-price="'+data[i].price +'" data-id="'+data[i].id+'">' +
                        '<a data-id="'+data[i].id+'" class="showProductInfo">' +
                            '<div class="item list-item-full  pl-0 pr-0">' +
                                '<figure class="mb-0"><img src="{{url('/')}}/'+ data[i].image +'"></figure>' +
                                '<div class="content-div"></div>' +
                                '<i class="ti-heart mt-3  bg-price price">AED <span>'+data[i].price +'</span></i>' +
                            '</div>' +
                        '</a> <h4 class="">'+data[i].name +'</h4> <div class="hCid hcId'+data[i].id+'">' +
                           ' <input type="hidden" class="count cId'+data[i].id+'" value="1" onchange="cart.updateCartItem('+data[i].id+', this.value);">' +
                        '</div><button class="add-to-cart tiny bId'+data[i].id+' btn btn-round btn-outline-success mr-1 mt-2"><i class="ti-shopping-cart"></i> add to cart</button>' +

                   ' </li>'};
              $('#ajax').html(
                '<div id="response">' +
                    hello +
                '</div>');
            }
        });

        {{--  $.ajax({

            method: 'post',
            url: 'ajax/ajax_sub_cat_load.php',
            data: data,
            async: true,
            cache: false,
            success: function (data){


              $('#ajax_sub_cat').html(data);

            }


        });  --}}


    });

	$('form input').keydown(function (e) {
	    if (e.keyCode == 13) {
	        e.preventDefault();
	        return false;
	    }
	});


    var searchRequest = null;

		$(function () {

		    var minlength = 1;

		    $("#menu_search").keyup(function () {
		        var value = $(this).val();
		         var data =  'search_keyword='+value;

		        if (value.length >= minlength ) {
		        	 $('.parent_cat').hide(); // As Title
		        	 $('#parent_cat').hide();
		        	 $('#sub_cat').hide();
		        	 $('#all_cat_title').hide();

		        	 $('#search-title').show();

		        	 $('#parent_cat a').removeClass('cur');
					 $('#sub_cat a').removeClass('cur_sub');

					  $('.search_query').html(value);



		             $("#ajax").html("<span class='text-center' style='padding-top:20px'>Loading<br><img src='{{url('/')}}/front/ajax_loader.svg'></span>");

		               // $("#ajax").html("<div class='box shimmer'><div class='lines'><div class='line s_shimmer'></div><div class='line s_shimmer'></div><div class='line s_shimmer'></div><div class='line s_shimmer'></div></div></div>");


                       $.ajax({
                        url: '{{url('/search')}}'+'/'+value,
                        async: true,
                        cache: false,
                        success: function (data){ 
                            var hello = '';
                            for ( i in data ) {
                                
                                hello += '<li style="" class="product text-center" data-image="{{url('/')}}/'+ data[i].image +'" data-name="'+data[i].name +'" data-price="'+data[i].price +'" data-id="'+data[i].id+'">' +
                                    '<a data-id="'+data[i].id+'" class="showProductInfo">' +
                                        '<div class="item list-item-full  pl-0 pr-0">' +
                                            '<figure class="mb-0"><img src="{{url('/')}}/'+ data[i].image +'"></figure>' +
                                            '<div class="content-div"></div>' +
                                            '<i class="ti-heart mt-3  bg-price price">AED <span>'+data[i].price +'</span></i>' +
                                        '</div>' +
                                    '</a> <h4 class="">'+data[i].name +'</h4> <div class="hCid hcId'+data[i].id+'">' +
                                       ' <input type="hidden" class="count cId'+data[i].id+'" value="1" onchange="cart.updateCartItem('+data[i].id+', this.value);">' +
                                    '</div><button class="add-to-cart tiny bId'+data[i].id+' btn btn-round btn-outline-success mr-1 mt-2"><i class="ti-shopping-cart"></i> add to cart</button>' +
            
                               ' </li>'};
                          $('#ajax').html(
                            '<div id="response">' +
                                hello +
                            '</div>');
                        }
                    });

		        }
		    });
		});

	$(document).on('click','.showProductInfo',function(e) {
        e.preventDefault();

	     <!--   var product_id = $(this).data('id');-->
	     <!--    var data =  'product_id='+product_id;-->
    		<!--$('#productInfo').modal('show');-->


      <!--  $("#ajax_product_info").html("<div class='text-center' style='padding-top:20px'>Loading<br><img src='{{url('/')}}/front/ajax_loader.svg'></div>");-->
      <!--  $.ajax({-->
      <!--      method: 'post',-->
      <!--      url: 'ajax/ajax_product_details.php',-->
      <!--      data: data,-->
      <!--      async: true,-->
      <!--      cache: false,-->
      <!--      success: function (data){-->
      <!--        $('#ajax_product_info').html(data);-->
      <!--      }-->
      <!--  });-->
      
    });


    $(document).on('click','.allCat',function(e) {
       //alert('dddddddddddddd');
        e.preventDefault();

         $("#menu_search").val('');
         $('#search-title').hide();

        $('.parent_cat').hide();
        $('#parent_cat').hide();
		$('#sub_cat').hide();
		$('.perspective').removeClass('animate');

		$('#all_cat_title').show();

		$('#parent_cat a').removeClass('cur');
		$('#sub_cat a').removeClass('cur_sub');

       //  $("#menu_search").val('');

       // $('#sub_cat a').removeClass('cur_sub');
    	//$(this).addClass('cur_sub');

       // var spl_filter = $(this).attr('href');
       // $("#spl_filter").val(spl_filter);
       // $("#pageno").val(1);
        //var data =  'spl_filter='+spl_filter;
        $("#ajax").html("<span class='text-center' style='padding-top:20px'>Loading<br><img src='{{url('/')}}/front/ajax_loader.svg'></span>");
        $.ajax({
            url: '{{url('/allcategory')}}',
            async: true,
            cache: false,
            success: function (data){ 
                document.location.href="#topID";
                var hello = '';
                for ( i in data ) {
                    hello += '<li class="bor-rad10"><a href="'+ data[i].id+'" data-id="'+ data[i].name+'" class="cat_link">' + 
                        '<div class="item list-item-full bg-gradiant-black pl-0 pr-0">'+
                         '<figure class="mb-0"><img src="'+ data[i].image+'"></figure>'+
                         '<div class="content-div">'+
                             '<h6 class="text-white fw-600 mb-0 ">'+ data[i].name+'</h6>'+
                             '<span class="mt-0"></span>'+
                         '</div></div></a></li>'};
              $('#ajax').html(
                '<div id="response"> <ul class="shop-item pl-0">' +
                    hello +
                '</ul></div>');
            }
        });
    });

    $(document).on('click','.feedbackNav',function(e) {
        e.preventDefault();
        $('.perspective').removeClass('animate');
    	$('#feedbackPage').modal('show');
    	$("#addFeedback").show();
    	$("#feedMsg").hide();

    	$('#saveBtn').show();
	 	//$('#addFeedback')[0].reset();
	 	$('#validCommentGroup').html('');
	 	$('#validName').html('');
	 	$('#validContact').html('');
	 	$('#validVisitStat').html('');
	 	$('#validChoiceStat').html('');
	 	$('#validq1').html('');
	 	$('#validq2').html('');
	 	$('#validq3').html('');
	 	$('#validq4').html('');
    });

     $(document).on('click','.feedbackSuccessNav',function(e) {
        e.preventDefault();
    	$('#successFeedback').modal('hide');
     	$('#feedbackPage').modal('hide');
    });


    $(document).on('click','.showstoreInfo',function(e) {
        e.preventDefault();

	     $('.perspective').removeClass('animate');
    		$('#storeInfo').modal('show');
    });

    $(document).on('click','.showCartInfo',function(e) {
        e.preventDefault();
    	$('#cartInfo').modal('show');
    	 	var stepper = new Stepper(document.querySelector('.bs-stepper'))
  stepper.to(1)

    });

    $(document).on('click','.product button',function(e) {
          var item = helpers.itemData(this.parentNode);
            cart.addItem(item);
           // $( ".bId"+item.id ).hide();
           // $( ".hcId"+item.id ).show();

    });





jQuery(document).ready(function() {

    $(".numericValue").keyup(function () {
        this.value = this.value.replace(/[^0-9\.]/g,'');
    });


    //$('.toast').toast({delay:1000, animation:true});

// close modal on back button press **********************************************************
 $(".modal").on("shown.bs.modal", function()  { // any time a modal is shown
    var urlReplace = "#" + $(this).attr('id'); // make the hash the id of the modal shown
    history.pushState(null, null, urlReplace); // push state that hash into the url
  });

  // If a pushstate has previously happened and the back button is clicked, hide any modals.
  $(window).on('popstate', function() {
    $(".modal").modal('hide');
  });


    var productChoice = $('#productChoice');

            if ($("#rad2").is(":checked")) {
                $("#dvChoice").show();
            } else {
                productChoice.val('');
                $("#dvChoice").hide();
            }


        $("input[name='choice_stat']").click(function () {
            if ($("#rad2").is(":checked")) {
                $("#dvChoice").show();
            } else {
                $("#dvChoice").hide();
                productChoice.val('');
            }
        });





     $('#addFeedback').on('submit', function(e) {
        var submitted=1;
        var clientName = $('#clientName');
        var clientContact = $('#clientContact');
        var clientComment = $('#clientComment');

         if(clientComment.val().length!=0) {


                if ($('[name="comment_group"]:checked').length > 0) {
                    $("#validCommentGroup").html("<i class=' ti-check scs'></i>");



                }else{
                    $("#validCommentGroup").html("<span class='fail'><i class='ti-info-alt'></i>&nbsp; Please Choose A Comment Category</span>");
                    submitted=0;
                    e.preventDefault();

                }

           }




        if(!clientName.val()) {
          // Add errors highlight
          clientName.closest('.form-group').removeClass('has-success').addClass('has-error');
           $("#validName").html("<span class='fail'><i class=' ti-info-alt'></i> Required</span>");
          submitted=0;
          e.preventDefault();

           // $.toast({
           //  heading: 'Error(s) Occured',
           //  text: 'Please Specify Customer Name.',
           //  position: 'top-right',
           //  loaderBg:'#ff6849',
           //  icon: 'error',
           //  hideAfter: 1500
           //  });

        } else {
          clientName.closest('.form-group').removeClass('has-error').addClass('has-success');
           $("#validName").html("<i class=' ti-check scs'></i>");
        }




        if(!clientContact.val()) {
          // Add errors highlight
          clientContact.closest('.form-group').removeClass('has-success').addClass('has-error');
           $("#validContact").html("<span class='fail'><i class=' ti-info-alt'></i> Required</span>");
          submitted=0;
          e.preventDefault();

           // $.toast({
           //  heading: 'Error(s) Occured',
           //  text: 'Specify Client Phone Number.',
           //  position: 'top-right',
           //  loaderBg:'#ff6849',
           //  icon: 'error',
           //  hideAfter: 2500
           //  });

        } else {


        if(clientContact.val().length < 6 ) {
                clientContact.closest('.form-group').removeClass('has-success').addClass('has-error');
               $("#validContact").html("<span class='fail'><i class=' ti-info-alt'></i> Should be valid Phone Number</span>");
              submitted=0;
              e.preventDefault();

           }else{
                clientContact.closest('.form-group').removeClass('has-error').addClass('has-success');
                $("#validContact").html("<i class=' ti-check scs'></i>");
           }
        }











        if ($('[name="choice_stat"]:checked').length > 0) {
            $("#validChoiceStat").html("<i class=' ti-check scs'></i>");



        }else{
            $("#validChoiceStat").html("<span class='fail'><i class='ti-info-alt'></i> &nbsp;Please Answer This Question</span>");
            submitted=0;
            e.preventDefault();

        }


        if ($('[name="visit_stat"]:checked').length > 0) {
            $("#validVisitStat").html("<i class=' ti-check scs'></i>");
        }else{
            $("#validVisitStat").html("<span class='fail'><i class='ti-info-alt'></i>&nbsp; Please Answer This Question</span>");
            submitted=0;
            e.preventDefault();

        }






        for(i = 1; i <=4; ++i) {



                if ($('[name="q'+i+'"]:checked').length > 0) {
                    $("#validq"+i).html("<i class=' ti-check scs'></i>");
                }else{
                    $("#validq"+i).html("<span class='fail'><i class='ti-info-alt'></i>&nbsp; Answer This Question</span>");
                    submitted=0;
                    e.preventDefault();

                    // $.toast({
                    // heading: 'Error(s) Occured',
                    // text: 'Select Product Category.',
                    // position: 'top-right',
                    // loaderBg:'#ff6849',
                    // icon: 'error',
                    // hideAfter: 2500
                    // });
                }

        }






        if(submitted == 1){



        // $( ".ajax-message" ).remove();


        $("#addFeedback").hide();
        $("#feedMsg").show();

         $("#feedMsg").html("<span class='scs'> Feedback Submission In Progress...</span><br><br><div class='preloader '></div>");

        $("#saveBtn").hide();
        $("#dummyBtn").html("<button type='button' class='btn btn-info dummyBtn' >Saving In Progress...</button>");


        var fd = new FormData(document.getElementById("addFeedback"));
        $.ajax({
          url: "ajax/handler_feedback_submission.php",
          type: "POST",
          data: fd,
          enctype: 'multipart/form-data',
          processData: false,  // tell jQuery not to process the data
          contentType: false   // tell jQuery not to set contentType
        }).done(function( data ) {
            // $("#saveBtn").show();
            // $("#dummyBtn").hide();
            // $("#msg").html("");
            //  document.getElementById("myFile").value='';
            // //$('#ajax_load').append('<div class="product-image-preview">'+ data+ '</div>');
            $("#feedMsg").html(data);
        });
        return false;

        }else{

        	$('#errorFeedback').modal('show');
        }
        //e.preventDefault();

    });


 $(document).on('click','#checkOut',function(e) {

 	var fd = new FormData(document.getElementById("submitCart"));
        $.ajax({
          url: "ajax/handler_proceed_to_checkout.php",
          type: "POST",
          data: fd,
          enctype: 'multipart/form-data',
          processData: false,  // tell jQuery not to process the data
          contentType: false   // tell jQuery not to set contentType
        }).done(function( data ) {
            // $("#saveBtn").show();
            // $("#dummyBtn").hide();
            // $("#msg").html("");
            //  document.getElementById("myFile").value='';
            // //$('#ajax_load').append('<div class="product-image-preview">'+ data+ '</div>');
            $("#reviewOrder").html(data);
        });

 });
// var stepper = new Stepper($('.bs-stepper')[0])
//stepper.next()
/// Will navigate to the second step
//stepper.to(2)
});

// $(function(){
//   $("#form").accWizard({
//   	autoButtons:true,
//   	 beforeNextStep:function( currentStep ) { aler('step2'); return true; },

//   });
// });


// });



$(document).ready(function () {

	if($("input[name='mode']:checked").val() != "Delivery") {
		$("#validCustomerAddress").hide();
		$("#customerAddress").hide();
	 }else{
	 	$("#validCustomerAddress").show();
	 	$("#customerAddress").show();
	 }

	$('input:radio').change(function() {
	if($("input[name='mode']:checked").val() != "Delivery") {
		$("#validCustomerAddress").hide();
		$("#customerAddress").hide();
	 }else{
	 	$("#validCustomerAddress").show();
	 	$("#customerAddress").show();
	 }
       helpers.updateView();
    });
  var stepper = new Stepper(document.querySelector('.bs-stepper'),{
	  animation: true
	})

});

 $(document).on('click','.toFinal',function(e) {

 	var submitted=1;
 	var errors = new Array();
 	var otherErrors = new Array();
 	var customerName = $('#customerName');
    var customerPhone = $('#customerPhone');
    // var customerWhatsapp = $('#customerWhatsapp');
    // var customerEmail = $('#customerEmail');
    var customerAddress = $('#customerAddress');
    // var customerOrderNote = $('#customerOrderNote');



        if(!customerName.val()) {
          // Add errors highlight
          customerName.closest('.form-group').removeClass('has-success').addClass('has-error');
           $("#validCustomerName").html("<span class='fail'><i class='ti-hand-point-down'></i> Please Enter Your Name</span>");
          submitted=0;
          errors.push("Name");
          e.preventDefault();
        } else {
          customerName.closest('.form-group').removeClass('has-error').addClass('has-success');
           $("#validCustomerName").html("Your Name <i class=' ti-check-box scs'></i>");
        }

         if(!customerPhone.val()) {
          // Add errors highlight
          customerPhone.closest('.form-group').removeClass('has-success').addClass('has-error');
           $("#validCustomerPhone").html("<span class='fail'><i class='ti-hand-point-down'></i> Please Enter Your Phone Number</span>");
          submitted=0;
          errors.push("Phone Number");
          e.preventDefault();
        } else {


        if(customerPhone.val().length < 6 ) {
                customerPhone.closest('.form-group').removeClass('has-success').addClass('has-error');
             $("#validCustomerPhone").html("<span class='fail'><i class='ti-hand-point-down'></i> Please Enter A Valid Phone Number</span>");
              submitted=0;
              otherErrors.push("Phone Number Should Be Valid");
              e.preventDefault();

           }
           else{
                customerPhone.closest('.form-group').removeClass('has-error').addClass('has-success');
               $("#validCustomerPhone").html("Phone Number <i class=' ti-check-box scs'></i>");
           }
        }

    if($("input[name='mode']:checked").val() == "Delivery") {
        if(!customerAddress.val()) {
          // Add errors highlight
          customerAddress.closest('.form-group').removeClass('has-success').addClass('has-error');
           $("#validCustomerAddress").html("<span class='fail'><i class='ti-hand-point-down'></i> Please Enter Your Address</span>");
          submitted=0;
           errors.push("Address");
          e.preventDefault();
        } else {
          customerAddress.closest('.form-group').removeClass('has-error').addClass('has-success');
           $("#validCustomerAddress").html("Your Address <i class=' ti-check-box scs'></i>");
        }
    }



	if(submitted == 1){
		var stepper = new Stepper(document.querySelector('.bs-stepper'),{
	  	animation: true
	  	})
	  	stepper.to(3)
		//$("#orderCompletionStatus").html("Ordering NOW......");
		$("#orderCompletionStatus").html("<div class='text-center pt-4'><h2>Completing Your Order</h2><br><div id='bar_container'><div id='progress_bar'><div id='progress_percentage'>10%</div></div></div><br><img src='{{url('/')}}/front/loader_cart.gif' style='margin-top:-50px; max-width:300px;'></div>");
		var bar=$('#progress_bar');
		var percentage=parseInt($('#progress_percentage').html());

		function stopProgress(){
		  clearInterval(progress);
		}
		var delay =2000;
		var progress= setInterval(function(){
		  percentage++;
		  if (percentage<=100){
		    $('#progress_percentage').html(percentage+'%');
		    if (percentage>10) {
		      bar.css('width',percentage+'%');
		     // console.log(percentage);
		    }
		  }
		  else {
		    stopProgress()
		  }
		},80);

	  	var fd = new FormData(document.getElementById("submitCart"));
	  	var total = $('#orderTotal').html();
        var tax = $('#taxAmount').html();
        fd.append('total', total);
        fd.append('tax', tax);
        $.ajax({
                    url: "{{url('submit_data')}}",
                    type: "POST",
                    data: fd,
                    enctype: 'multipart/form-data',
                    processData: false, // tell jQuery not to process the data
                    contentType: false, // tell jQuery not to set contentType
                    success: function(response){
                        cart.clearItems();
                        $("#orderCompletionStatus").html();
                        
                        window.location = 'https://wa.me/{{$footer->whatsapp}}?text=' + response
                    }
                });


  	}else{
  		if(errors.length > 1){
  			var errorString ='Fields Are Mandatory. Please Fill Them.';
  		}else if(errors.length == 1){
  			var errorString ='Field Is Mandatory. Please Fill It.';
  		}else{
  			var errorString ='';
  		}

  		var allErrors= errors.toString();
  		var allOtherErrors= otherErrors.toString();
 $("#errorFields").html("<span class='fail'><strong>"+ allErrors+"</strong> "+errorString+" "+allOtherErrors+"  </span>");
  		$('#errorModal').modal('show');
  	}
});



 $(document).on('click','.toCheckout',function(e) {

 	var errors = new Array();


 	var submitted=1;

 		var cartCur=localStorage.getItem('hashoneCart');
			if(cartCur == null){
				 submitted=0;
				 errors.push("Cart Is Empty !");
			}

 	if ($('[name="mode"]:checked').length > 0) {
         $("#validmode").html("Service Mode");
    }else{
        $("#validmode").html("<span class='fail small'><i class='ti-hand-point-down'></i>&nbsp; Please Choose One Option</span>");
        submitted=0;
         errors.push(" Choose Service Mode.  ");

        e.preventDefault();

    }

	if(submitted == 1){
		var stepper = new Stepper(document.querySelector('.bs-stepper'),{
	  animation: true
	})
  		stepper.to(2)
  	}else{
  		if(errors.length > 1){
  			var errorString ='Following Errors Occured ';
  		}else{
  			var errorString ='Following Error Occured ';
  		}
  		var allErrors= errors.toString();
  		$("#errorFields").html("<span class='fail'><strong>"+ errorString+": </strong> "+allErrors+"  </span>");
  		$('#errorModal').modal('show');
  	}
});



$(document).on('click','.toCart',function(e) {

 	var stepper = new Stepper(document.querySelector('.bs-stepper'))
  stepper.to(1)
});
</script>

<script type="text/template" id="cartT">

 <%  _.each(items, function (item) {  %>

<div class="col-sm-12 mt-0 list-item pl-0 pr-0 d-flex">
	<figure class="mr-3"><a href="#"><img src="<%= item.image %>" alt="image"></a></figure>
	<div class="content-div mr-3">
		<h4 class="text-black mb-2"><%= item.name %> &nbsp; </h4>
		<!-- <h5><%= item.count %> X  <%= item.price %> = <%= item.total %> </h5> -->
		<span>
	<!-- 	<input type="number" min="0" step="1"  value="<%= item.count %>" onchange="cart.updateCartItem(<%= item.id %>, this.value);" data-step-max="1" max="100"> -->


<!-- <input id="input" type="number" value="<%= item.count %>" onchange="cart.updateCartItem(<%= item.id %>, this.value);" min="0" max="140" > -->
		<input type="hidden" name="idname[]" value="<%= item.name %> X <%= item.price %> ">
		<input type="hidden" name="id[]" value="<%= item.id %>">
		<input type="hidden" name="qt[]" value="<%= item.count %>">
		<div class="item-price-total"><span class="item-qty"><%= item.count %> </span><strong> X </strong><%= item.price %> = <%= item.total %>  &nbsp;&nbsp; <button onclick="cart.clearItem(<%= item.id %>);" class="cart-del"><i class="ti-trash text-red"></i></button></div>

		</span>


	</div>
	<div class="quantity">
				<input type="hidden"  onchange="cart.updateCartItem(<%= item.id %>, this.value);" min="0" max="140" value="<%= item.count %>" >
			</div>
</div>

<% });  %>

</script>


    <!-- <script src="{{url('/')}}/front/js/bootstrap-input-spinner.js"></script> -->

    <script src='{{url('/')}}/front/js/underscore-min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
    <script src="{{url('/')}}/front/js/tijara_cart.js"></script>
    <script src="{{url('/')}}/front/js/stepper.js"></script>
    <!-- <script src="{{url('/')}}/front/js/jquery.accordion-wizard.min.js"></script> -->

</body>

</html>
