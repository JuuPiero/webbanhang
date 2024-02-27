@extends('client.layout._masterLayout')

@section('content')
@if (session('message'))
    <script>
        alert('{{ session('message') }}')
    </script>
@endif
<main class="main">
    <div class="intro-section pt-3 pb-3 mb-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="intro-slider-container slider-container-ratio mb-2 mb-lg-0">
                        <div class="intro-slider owl-carousel owl-simple owl-dark owl-nav-inside" data-toggle="owl" data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "responsive": {
                                    "768": {
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>
                            <div class="intro-slide">
                                <figure class="slide-image">
                                    <picture>
                                        <source media="(max-width: 480px)" srcset="{{ asset('assets/client/images/demos/demo-3/slider/slide-1-480w.jpg') }}">
                                        <img src="{{ asset('assets/client/images/demos/demo-3/slider/slide-1.jpg') }}" alt="Image Desc">
                                    </picture>
                                </figure><!-- End .slide-image -->

                                <div class="intro-content">
                                    <h3 class="intro-subtitle text-primary">Daily Deals</h3><!-- End .h3 intro-subtitle -->
                                    <h1 class="intro-title">
                                        AirPods <br>Earphones
                                    </h1><!-- End .intro-title -->

                                    <div class="intro-price">
                                        <sup>Today:</sup>
                                        <span class="text-primary">
                                            $247<sup>.99</sup>
                                        </span>
                                    </div><!-- End .intro-price -->

                                    <a href="category.html" class="btn btn-primary btn-round">
                                        <span>Click Here</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .intro-content -->
                            </div><!-- End .intro-slide -->

                            <div class="intro-slide">
                                <figure class="slide-image">
                                    <picture>
                                        <source media="(max-width: 480px)" srcset="{{ asset('assets/client/images/demos/demo-3/slider/slide-2-480w.jpg') }}">
                                        <img src="{{ asset('assets/client/images/demos/demo-3/slider/slide-2.jpg') }}" alt="Image Desc">
                                    </picture>
                                </figure><!-- End .slide-image -->

                                <div class="intro-content">
                                    <h3 class="intro-subtitle text-primary">Deals and Promotions</h3><!-- End .h3 intro-subtitle -->
                                    <h1 class="intro-title">
                                        Echo Dot <br>3rd Gen
                                    </h1><!-- End .intro-title -->

                                    <div class="intro-price">
                                        <sup class="intro-old-price">$49,99</sup>
                                        <span class="text-primary">
                                            $29<sup>.99</sup>
                                        </span>
                                    </div><!-- End .intro-price -->

                                    <a href="category.html" class="btn btn-primary btn-round">
                                        <span>Click Here</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .intro-content -->
                            </div><!-- End .intro-slide -->
                        </div><!-- End .intro-slider owl-carousel owl-simple -->
                        
                        <span class="slider-loader"></span><!-- End .slider-loader -->
                    </div><!-- End .intro-slider-container -->
                </div><!-- End .col-lg-8 -->

                <div class="col-lg-4">
                    <div class="intro-banners">
                        <div class="banner mb-lg-1 mb-xl-2">
                            <a href="#">
                                <img src="{{ asset('assets/client/images/demos/demo-3/banners/banner-1.jpg') }}" alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle d-lg-none d-xl-block"><a href="#">Top Product</a></h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title"><a href="#">Edifier <br>Stereo Bluetooth</a></h3><!-- End .banner-title -->
                                <a href="#" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->

                        <div class="banner mb-lg-1 mb-xl-2">
                            <a href="#">
                                <img src="{{ asset('assets/client/images/demos/demo-3/banners/banner-2.jpg') }}" alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle d-lg-none d-xl-block"><a href="#">Clearance</a></h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title"><a href="#">GoPro - Fusion 360 <span>Save $70</span></a></h3><!-- End .banner-title -->
                                <a href="#" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->

                        <div class="banner mb-0">
                            <a href="#">
                                <img src="{{ asset('assets/client/images/demos/demo-3/banners/banner-3.jpg') }}" alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle d-lg-none d-xl-block"><a href="#">Featured</a></h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title"><a href="#">Apple Watch 4 <span>Our Hottest Deals</span></a></h3><!-- End .banner-title -->
                                <a href="#" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .intro-banners -->
                </div><!-- End .col-lg-4 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .intro-section -->

    {{-- <div class="container">
        <div class="owl-carousel mt-5 mb-5 owl-simple" data-toggle="owl" 
                data-owl-options='{
                    "nav": false, 
                    "dots": false,
                    "margin": 30,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "420": {
                            "items":3
                        },
                        "600": {
                            "items":4
                        },
                        "900": {
                            "items":5
                        },
                        "1024": {
                            "items":6
                        }
                    }
                }'>
                <a href="#" class="brand">
                    <img src="{{ asset('assets/client/images/brands/1.png') }}" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{ asset('assets/client/images/brands/2.png') }}" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{ asset('assets/client/images/brands/3.png') }}" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{ asset('assets/client/images/brands/4.png') }}" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{ asset('assets/client/images/brands/5.png') }}" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{ asset('assets/client/images/brands/6.png') }}" alt="Brand Name">
                </a>
            </div><!-- End .owl-carousel -->
    </div><!-- End .container --> --}}

    <div class="container">
        <hr class="mt-3 mb-6">
    </div><!-- End .container -->


    <div class="container">
        <hr class="mt-5 mb-6">
    </div><!-- End .container -->

    <div class="container top">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">Products</h2><!-- End .title -->
            </div><!-- End .heading-left -->

           <div class="heading-right">
                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="top-all-link" data-toggle="tab" href="#top-all-tab" role="tab" aria-controls="top-all-tab" aria-selected="true">All</a>
                    </li>
                    {{-- @foreach ($categories as $category)
                        <li class="nav-item">
                            <a class="nav-link" id="cate{{ $category->id }}" data-toggle="tab" href="#cate{{ $category->id }}" role="tab" aria-controls="cate{{ $category->id }}-tab" aria-selected="false">{{ $category->name }}</a>
                        </li>
                    @endforeach --}}
                  
                    {{-- <li class="nav-item">
                        <a class="nav-link" id="top-computers-link" data-toggle="tab" href="#top-computers-tab" role="tab" aria-controls="top-computers-tab" aria-selected="false">Computers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="top-phones-link" data-toggle="tab" href="#top-phones-tab" role="tab" aria-controls="top-phones-tab" aria-selected="false">Tablets & Cell Phones</a>
                    </li>
                  --}}
                </ul>
           </div><!-- End .heading-right -->
        </div><!-- End .heading -->

        <div class="tab-content tab-content-carousel just-action-icons-sm">
            <div class="tab-pane p-0 fade show active" id="top-all-tab" role="tabpanel" aria-labelledby="top-all-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                    data-owl-options='{
                        "nav": true, 
                        "dots": false,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            },
                            "1200": {
                                "items":5
                            }
                        }
                    }'
                    >

                    @foreach ($products as $product)
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{ asset('uploads/' . $product->images[0]->name) }}" alt="Product image" class="product-image">
                                </a>
                                <div class="product-action product-action-dark">
                                    <a href="{{ route('cart.add', $product->id) }}" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">{{ $product->category_name }}</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">{{ $product->name }}</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    ${{ $product->price }}
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    @endforeach
                
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
{{--         
            @foreach ($categories as $category)
                <div class="tab-pane p-0 fade" id="cate{{ $category->id }}-tab" role="tabpanel" aria-labelledby="cate{{ $category->id }}-link">
                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                        data-owl-options='{
                            "nav": true, 
                            "dots": false,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":5
                                }
                            }
                        }'>
                        @foreach ($category->products as $product)
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('uploads/' . $product->images[0]->name) }}" alt="Product image" class="product-image">
                                    </a>
                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->
                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">{{ $product->category_name }}</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">{{ $product->name }}</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        ${{ $product->price }}
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        @endforeach
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
            @endforeach --}}

            {{-- <div class="tab-pane p-0 fade" id="top-computers-tab" role="tabpanel" aria-labelledby="top-computers-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                    data-owl-options='{
                        "nav": true, 
                        "dots": false,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            },
                            "1200": {
                                "items":5
                            }
                        }
                    }'>
                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <a href="product.html">
                                <img src="{{ asset('assets/client/images/demos/demo-3/products/product-15.jpg') }}" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            </div><!-- End .product-action -->

                            <div class="product-action product-action-dark">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">TV & Home Theater</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Samsung - 55" Class  LED 2160p Smart</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $899.99
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 5 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <a href="product.html">
                                <img src="{{ asset('assets/client/images/demos/demo-3/products/product-11.jpg') }}" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            </div><!-- End .product-action -->

                            <div class="product-action product-action-dark">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Laptops</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $1,199.99
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-new">New</span>
                            <a href="product.html">
                                <img src="{{ asset('assets/client/images/demos/demo-3/products/product-13.jpg') }}" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            </div><!-- End .product-action -->

                            <div class="product-action product-action-dark">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Tablets</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Apple - 11 Inch iPad Pro  with Wi-Fi 256GB </a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $899.99
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" style="background: #edd2c8;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                                <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="{{ asset('assets/client/images/demos/demo-3/products/product-12.jpg') }}" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            </div><!-- End .product-action -->

                            <div class="product-action product-action-dark">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Audio</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Bose - SoundLink Bluetooth Speaker</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $79.99
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <span class="product-label label-circle label-sale">Sale</span>
                            <a href="product.html">
                                <img src="{{ asset('assets/client/images/demos/demo-3/products/product-14.jpg') }}" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            </div><!-- End .product-action -->

                            <div class="product-action product-action-dark">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Cell Phone</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Google - Pixel 3 XL  128GB</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$35.41</span>
                                <span class="old-price">Was $41.67</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 10 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #edd2c8;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="top-phones-tab" role="tabpanel" aria-labelledby="top-phones-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                    data-owl-options='{
                        "nav": true, 
                        "dots": false,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "480": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            },
                            "1200": {
                                "items":5
                            }
                        }
                    }'>
                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <a href="product.html">
                                <img src="{{ asset('assets/client/images/demos/demo-3/products/product-11.jpg') }}" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            </div><!-- End .product-action -->

                            <div class="product-action product-action-dark">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Laptops</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $1,199.99
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="{{ asset('assets/client/images/demos/demo-3/products/product-12.jpg') }}" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            </div><!-- End .product-action -->

                            <div class="product-action product-action-dark">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Audio</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Bose - SoundLink Bluetooth Speaker</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $79.99
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-new">New</span>
                            <a href="product.html">
                                <img src="{{ asset('assets/client/images/demos/demo-3/products/product-13.jpg') }}" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            </div><!-- End .product-action -->

                            <div class="product-action product-action-dark">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Tablets</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Apple - 11 Inch iPad Pro  with Wi-Fi 256GB </a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $899.99
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" style="background: #edd2c8;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                                <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <a href="product.html">
                                <img src="{{ asset('assets/client/images/demos/demo-3/products/product-15.jpg') }}" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            </div><!-- End .product-action -->

                            <div class="product-action product-action-dark">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">TV & Home Theater</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Samsung - 55" Class  LED 2160p Smart</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $899.99
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 5 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <a href="product.html">
                                <img src="{{ asset('assets/client/images/demos/demo-3/products/product-11.jpg') }}" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            </div><!-- End .product-action -->

                            <div class="product-action product-action-dark">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Laptops</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $1,199.99
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <span class="product-label label-circle label-sale">Sale</span>
                            <a href="product.html">
                                <img src="{{ asset('assets/client/images/demos/demo-3/products/product-14.jpg') }}" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            </div><!-- End .product-action -->

                            <div class="product-action product-action-dark">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Cell Phone</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.html">Google - Pixel 3 XL  128GB</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$35.41</span>
                                <span class="old-price">Was $41.67</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 10 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #edd2c8;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane --> --}}
         
        </div><!-- End .tab-content -->
    </div><!-- End .container -->

    <div class="container">
        <hr class="mt-5 mb-0">
    </div><!-- End .container -->
   
</main><!-- End .main -->    


@endsection
