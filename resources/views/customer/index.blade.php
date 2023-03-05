@extends('customer.layout')
@section('title', "")


@section('css')

@endsection()


@section('body')
<!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main">
            <!-- Slider Section -->
            <div class="mb-5">
                <div class="bg-img-hero" style="background-image: url('{{ asset('customer/assets/img/1920X422/img1.jpg') }}');">
                    <div class="container min-height-420 overflow-hidden">
                        <div class="js-slick-carousel u-slick"
                            id="trending-carousel" 
                            data-pagi-classes="text-center position-absolute right-0 bottom-0 left-0 u-slick__pagination u-slick__pagination--long justify-content-start mb-3 mb-md-4 offset-xl-3 pl-2 pb-1">

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Slider Section -->
            <div class="container">
                <!-- Banner --> 
                <!-- End Banner -->
                <!-- Deals-and-tabs -->
                <div class="mb-5">
                    <div class="row"> 
                        <!-- Tab Prodcut -->
                        <div class="col">
                            <!-- Features Section -->
                            <div class="">
                                <!-- Nav Classic -->
                                <div class="position-relative bg-white text-center z-index-2">
                                    <ul class="nav nav-classic nav-tab justify-content-center" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active " id="new-arrivals-tab" data-toggle="pill" href="#new-arrivals" role="tab" aria-controls="#new-arrivals" aria-selected="true">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                    Sản phẩm mới
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " id="discount-arrivals-tab" data-toggle="pill" href="#discount-arrivals" role="tab" aria-controls="discount-arrivals" aria-selected="false">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                    Đang giảm giá
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " id="pills-three-example1-tab" data-toggle="pill" href="#pills-three-example1" role="tab" aria-controls="pills-three-example1" aria-selected="false">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                    Được đánh giá cao
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Nav Classic -->

                                <!-- Tab Content -->
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade pt-2 show active" id="new-arrivals" role="tabpanel" aria-labelledby="#new-arrivals-tab">
                                        <ul class="row list-unstyled products-group no-gutters">

                                        </ul>
                                    </div>
                                    <div class="tab-pane fade pt-2" id="discount-arrivals" role="tabpanel" aria-labelledby="discount-arrivals-tab">
                                        <ul class="row list-unstyled products-group no-gutters">

                                        </ul>
                                    </div>
                                    <div class="tab-pane fade pt-2" id="pills-three-example1" role="tabpanel" aria-labelledby="pills-three-example1-tab">
                                        <ul class="row list-unstyled products-group no-gutters">

                                        </ul>
                                    </div>
                                </div>
                                <!-- End Tab Content -->
                            </div>
                            <!-- End Features Section -->
                        </div>
                        <!-- End Tab Prodcut -->
                    </div>
                </div>
                <!-- End Deals-and-tabs -->
            </div>
            <div class="container">
                <!-- Deals of The Day -->
                <div class="mb-3">
                    <div class="d-flex border-bottom border-color-1 flex-lg-nowrap flex-wrap justify-content-between border-md-down-top-0 border-sm-bottom-0 mb-2 mb-md-0">
                        <h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Quick Sale</h3> 
                        <a class="ml-md-auto d-block text-gray-16 align-self-center" href="../shop/product-categories-7-column-full-width.html">Xem tất cả <i class="ec ec-arrow-right-categproes"></i></a>
                    </div>
                    <div class="js-slick-carousel u-slick overflow-hidden u-slick-overflow-visble pt-3 pb-6 px-1"
                        id="quick-discount"
                        data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4"
                        data-slides-show="7"
                        data-slides-scroll="1"
                        data-responsive='[{
                          "breakpoint": 1400,
                          "settings": {
                            "slidesToShow": 5
                          }
                        }, {
                            "breakpoint": 1200,
                            "settings": {
                              "slidesToShow": 4
                            }
                        }, {
                          "breakpoint": 992,
                          "settings": {
                            "slidesToShow": 4
                          }
                        }, {
                          "breakpoint": 768,
                          "settings": {
                            "slidesToShow": 3
                          }
                        }, {
                          "breakpoint": 554,
                          "settings": {
                            "slidesToShow": 2
                          }
                        }]'> 
                    </div>
                </div>

                {{-- <div class="mb-6"> 
                    <div class="position-relative text-center z-index-2">
                        <div class=" d-flex justify-content-between border-bottom border-color-1 flex-lg-nowrap flex-wrap border-md-down-top-0 border-md-down-bottom-0">
                            <h3 class="section-title mb-0 pb-2 font-size-22">Danh mục sản phẩm</h3>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-12 col-xl-auto pr-lg-2">
                            <div class="min-width-200 mt-xl-5">
                                <ul class="list-group list-group-flush flex-nowrap flex-xl-wrap flex-row flex-xl-column overflow-auto overflow-xl-visble mb-3 mb-xl-0 border-top border-color-1 border-lg-top-0">
                                    <li class="border-color-1 list-group-item border-lg-down-0 flex-shrink-0 flex-xl-shrink-1"><a class="hover-on-bold py-1 px-3 text-gray-90 d-block" href="../shop/product-categories-7-column-full-width.html">Earbuds and In-ear</a></li> 
                                </ul>
                            </div>
                        </div> 
                        <div class="col-md pl-md-0">
                            <ul class="row list-unstyled products-group no-gutters mb-0">
                                <li class="col-6 col-md-4 col-wd-3 product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner bg-white p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                                <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                                <div class="mb-2">
                                                    <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">$685,00</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li> 
                            </ul>
                        </div>
                    </div>
                </div> 
                <div class="mb-6">
                    <div class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap border-md-down-top-0 border-sm-bottom-0 mb-4">
                        <h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Gợi ý cho bạn</h3>
                        <a class="d-block text-gray-16 border-top border-color-1 border-md-top-0 w-100 w-md-auto pt-2 pt-md-0" href="../shop/product-categories-7-column-full-width.html">View All Recommendations <i class="ec ec-arrow-right-categproes"></i></a>
                    </div>
                    <ul class="row list-unstyled products-group no-gutters">
                        <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item">
                            <div class="product-item__outer h-100">
                                <div class="product-item__inner px-xl-4 p-3">
                                    <div class="product-item__body pb-xl-2">
                                        <div class="mb-2"><a href="../shop/product-categories-7-column-full-width.html" class="font-size-12 text-gray-5">Speakers</a></div>
                                        <h5 class="mb-1 product-item__title"><a href="../shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Wireless Audio System Multiroom 360 degree Full base audio</a></h5>
                                        <div class="mb-2">
                                            <a href="../shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="../../assets/img/212X200/img1.jpg"></a>
                                        </div>
                                        <div class="flex-center-between mb-1">
                                            <div class="prodcut-price">
                                                <div class="text-gray-100">$685,00</div>
                                            </div>
                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                <a href="../shop/single-product-fullwidth.html" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item__footer">
                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                            <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                            <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> 
                    </ul>
                </div>  --}}
            </div>
        </main>
        <!-- ========== END MAIN CONTENT ========== -->
@endsection()

@section('sub_layout')

@endsection()


@section('js')
<script type="text/javascript" src="{{ asset('customer/assets/js/page/index.js') }}"></script>
@endsection()
        
