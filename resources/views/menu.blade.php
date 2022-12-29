
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
<!-- Product -->
<div class="bg0 m-t-23 p-b-140 p-t-80">
    <div class="container">
        <div class="flex-w flex-sb-m p-b-52">
            <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                <h1>{{ $title }}</h1>
            </div>
            <div class="container">


            </div>
            </div>
            <div id="loadProduct">
                @include('products.list')
            </div>
            <!-- Load more -->
            <div class="flex-c-m flex-w w-full p-t-45" id="button-loadMore">
                <input type="hidden" value="1" id="page">
                <a onclick="loadMore()" class=" flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
                    Xem Thêm
                </a>
            </div>


    </div>
</div>
@include('footer')

</body>
</html>
