
<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
</head>

<!-- class=animsition -->

<!-- Header -->
@include('header')

<!-- Cart -->
@include('cart')
<div class="container p-t-80">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="/" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <a href="/danh-muc/{{ $product->id }}-{{ \Str::slug($product->name) }}.html"
           class="stext-109 cl8 hov-cl1 trans-04">
            {{ $product->name }}
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
				{{ $title }}
			</span>
    </div>
</div>
<section class="sec-product-detail bg0 p-t-65 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-7 p-b-30">
                <div class="p-l-25 p-r-30 p-lr-0-lg">
                    <div class="wrap-slick3 flex-sb flex-w">

                        <div class="slick3 gallery-lb slick-initialized slick-slider slick-dotted">
                            <div class="slick-list draggable">
                                <div class="slick-track" style="opacity: 1; width: 1539px;"><div class="item-slick3 slick-slide slick-current slick-active" data-thumb="images/product-detail-01.jpg" data-slick-index="0" aria-hidden="false" style="width: 513px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" tabindex="0" role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10">
                                        <div class="wrap-pic-w pos-relative">
                                            <img src="{{$product->thumb}}" alt="IMG-PRODUCT">
                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg" tabindex="-1">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 p-b-30">
                <div class="p-r-50 p-t-5 p-lr-0-lg">
                    <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                        {{ $title }}
                    </h4>

                    <span class="mtext-106 cl2">
							{!! \App\Helpers\Helper::price($product->price, $product->price_sale) !!}
						</span>

                    <p class="stext-102 cl3 p-t-23">
                        {{ $product -> description }}
                    </p>

                    <!--  -->
                    <div class="p-t-33">

                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-204 flex-w flex-m respon6-next">
                                <form action="/add-cart" method="post">
                                    @if ($product->price !== NULL)
                                        <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-minus"></i>
                                            </div>

                                            <input class="mtext-104 cl3 txt-center num-product" type="number"
                                                   name="num_product" value="1">

                                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-plus"></i>
                                            </div>
                                        </div>


                                        <button type="submit"
                                                class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 ">
                                            Th??m V??o Gi??? H??ng
                                        </button>
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    @endif
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>

                    <!--  -->
                    <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                        <div class="flex-m bor9 p-r-10 m-r-11">
                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
                                <i class="zmdi zmdi-favorite"></i>
                            </a>
                        </div>

                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>

                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="bor10 m-t-50 p-t-43 p-b-40">
            <!-- Tab01 -->
            <div class="tab01">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item p-b-10">
                        <a class="nav-link active" data-toggle="tab" href="#description" role="tab">M?? T???</a>
                    </li>

                    <li class="nav-item p-b-10">
                        <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Ph???n H???i </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-t-43">
                    <!-- - -->
                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                        <div class="how-pos2 p-lr-15-md">
                            <p class="stext-102 cl6">
                                {!! $product->content !!}
                            </p>
                        </div>
                    </div>

                    <!-- - -->

                    <!-- - -->
                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                                <div class="p-b-30 m-lr-15-sm">
                                    <!-- Review -->
                                    <div class="flex-w flex-t p-b-68">
                                        <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                                            <img src="http://hopamchuan.com/node/get_artist_image/thuy_chi" alt="AVATAR">
                                        </div>

                                        <div class="size-207">
                                            <div class="flex-w flex-sb-m p-b-17">
													<span class="mtext-107 cl2 p-r-20">
														Th??y Chi
													</span>

                                                <span class="fs-18 cl11">
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star-half"></i>
													</span>
                                            </div>

                                            <p class="stext-102 cl6">
                                                S???n Ph???m V???n Gi??? ???????c ????? T????i Ngon Trong Khi Ship Kh?? L??u
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex-w flex-t p-b-68">
                                        <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                                            <img src="https://topxephang.com/wp-content/uploads/2017/12/1493540243795-600-14-94e8.jpg" alt="AVATAR">
                                        </div>

                                        <div class="size-207">
                                            <div class="flex-w flex-sb-m p-b-17">
													<span class="mtext-107 cl2 p-r-20">
														B??ch Ph????ng
													</span>

                                                <span class="fs-18 cl11">
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
													</span>
                                            </div>

                                            <p class="stext-102 cl6">
                                                L???n ?????u Mua C???m Th???y R???t H??i L??ng Mong Shop Duy Tr?? Ch???t L?????ng
                                            </p>
                                        </div>
                                    </div>


                                    <div class="flex-w flex-t p-b-68">
                                        <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                                            <img src="https://i-ngoisao.vnecdn.net/2022/10/12/-2222-1665591777.jpg" alt="AVATAR">
                                        </div>

                                        <div class="size-207">
                                            <div class="flex-w flex-sb-m p-b-17">
													<span class="mtext-107 cl2 p-r-20">
														M??? T??m
													</span>

                                                <span class="fs-18 cl11">
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>

													</span>
                                            </div>

                                            <p class="stext-102 cl6">
                                                C???n Xem K?? Kh??u ????ng G??i V???n Chuy???n V?? L??m Tr??i C??y B??? D???p Kh?? Nhi???u
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Add review -->
                                    <form class="w-full">
                                        <h5 class="mtext-108 cl2 p-b-7">
                                            Th??m ????nh Gi??
                                        </h5>

                                        <p class="stext-102 cl6">
                                            Email c???a b???n s??? kh??ng ???????c c??ng khai, C??c Tr?????ng b???t bu???c s??? ????nh d???u *
                                        </p>

                                        <div class="flex-w flex-m p-t-50 p-b-23">
												<span class="stext-102 cl3 m-r-16">
													????nh Gi?? C???a B???n
												</span>

                                            <span class="wrap-rating fs-18 cl11 pointer">
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<input class="dis-none" type="number" name="rating">
												</span>
                                        </div>

                                        <div class="row p-b-25">
                                            <div class="col-12 p-b-5">
                                                <label class="stext-102 cl3" for="review">Tr???i Nghi???m V??? S???n Ph???m C???a B???n</label>
                                                <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review"></textarea>
                                            </div>

                                            <div class="col-sm-6 p-b-5">
                                                <label class="stext-102 cl3" for="name">T??n</label>
                                                <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text" name="name">
                                            </div>

                                            <div class="col-sm-6 p-b-5">
                                                <label class="stext-102 cl3" for="email">Email</label>
                                                <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email" type="text" name="email">
                                            </div>
                                        </div>

                                        <button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
                                            G???i ????nh Gi??
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
        <span class="stext-107 cl6 p-lr-25">
            T??n S???n Ph???m: {{ $product->name }}
			</span>
    </div>
</section>
<section class="sec-relate-product bg0 p-t-45 p-b-105">
    <div class="container">
        <div class="p-b-45">
            <h3 class="ltext-106 cl5 txt-center">
                S???N PH???M LI??N QUAN
            </h3>
        </div>
        @include('products.list')
    </div>
</section>


@include('footer')
</html>
