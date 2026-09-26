@extends('site.layouts.master')

@section('title', 'Home')

@section('content')
    <main id="main">

        <!-- HERO: bento grid -->
        <section class="hero">
            <div class="container">
                <div class="bento">

                    <article class="bento-card bento-card--lg">
                        <div class="sparkle"></div>
                        <div>
                            <span class="eyebrow">⚡ Audio &middot; Featured</span>
                            <h2>Apple HomePod<br />2nd Gen Speaker</h2>
                            <p>Apple ecosystem with high-quality audio playback while serving as a hub for controlling
                                smart home devices. Spatial audio, room-sensing tech.</p>
                            <a href="product.html" class="btn btn--paper">Shop Now
                                <svg width="14" height="10" viewBox="0 0 14 10" fill="none" aria-hidden="true">
                                    <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <div class="dots"><span class="active"></span><span></span><span></span></div>
                        </div>
                        <img class="product"
                            src="https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?w=900&q=80&auto=format&fit=crop"
                            alt="HomePod speaker" />
                    </article>

                    <article class="bento-card bento-card--purple">
                        <div class="sparkle"></div>
                        <span class="eyebrow">Wearables</span>
                        <h3 style="font-size:var(--text-xl); line-height:1.15">Explore<br />Apple Watch</h3>
                        <a href="product.html" class="shop-now">Shop Now
                            <svg width="12" height="10" viewBox="0 0 14 10" fill="none" aria-hidden="true">
                                <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-width="1.6"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <img class="product"
                            src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=600&q=80&auto=format&fit=crop"
                            alt="Apple Watch" />
                    </article>

                    <article class="bento-card bento-card--teal">
                        <div class="sparkle"></div>
                        <span class="eyebrow">Latest Phones</span>
                        <h3 style="font-size:var(--text-xl); line-height:1.15">Galaxy S24<br />Ultra · 5G</h3>
                        <a href="product.html" class="shop-now">Shop Now
                            <svg width="12" height="10" viewBox="0 0 14 10" fill="none" aria-hidden="true">
                                <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-width="1.6"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <img class="product"
                            src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=600&q=80&auto=format&fit=crop"
                            alt="Samsung Galaxy phone" />
                    </article>

                    <div class="bento-row">
                        <article class="bento-card bento-card--orange">
                            <div class="sparkle"></div>
                            <span class="eyebrow">Cameras</span>
                            <h3 style="font-size:var(--text-lg); line-height:1.2">Samsung<br />Gear Camera</h3>
                            <a href="product.html" class="shop-now">Shop Now
                                <svg width="12" height="10" viewBox="0 0 14 10" fill="none" aria-hidden="true">
                                    <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-width="1.6"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <img class="product"
                                src="https://images.unsplash.com/photo-1606983340126-99ab4feaa64a?w=500&q=80&auto=format&fit=crop"
                                alt="Camera" />
                        </article>

                        <article class="bento-card bento-card--green">
                            <div class="sparkle"></div>
                            <span class="eyebrow">Audio</span>
                            <h3 style="font-size:var(--text-lg); line-height:1.2">Beats<br />Studio Buds</h3>
                            <a href="product.html" class="shop-now">Shop Now
                                <svg width="12" height="10" viewBox="0 0 14 10" fill="none" aria-hidden="true">
                                    <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-width="1.6"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <img class="product"
                                src="https://images.unsplash.com/photo-1606220945770-b5b6c2c55bf1?w=500&q=80&auto=format&fit=crop"
                                alt="Earbuds" />
                        </article>

                        <article class="bento-card bento-card--black">
                            <div class="sparkle"></div>
                            <span class="eyebrow">DSLR</span>
                            <h3 style="font-size:var(--text-lg); line-height:1.2">Hero Camera<br />X-Series</h3>
                            <a href="product.html" class="shop-now">Shop Now
                                <svg width="12" height="10" viewBox="0 0 14 10" fill="none"
                                    aria-hidden="true">
                                    <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-width="1.6"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <img class="product"
                                src="https://images.unsplash.com/photo-1502920917128-1aa500764cbd?w=500&q=80&auto=format&fit=crop"
                                alt="DSLR camera" />
                        </article>
                    </div>

                </div>
            </div>
        </section>

        <!-- TRENDING PRODUCTS -->
        <section class="section" style="padding-top: var(--s5)">
            <div class="container">
                <div class="section-head">
                    <h2>Trending Products</h2>
                    <a href="shop.html" class="view-all">View all
                        <svg width="14" height="10" viewBox="0 0 14 10" fill="none">
                            <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-width="1.8"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>

                <div class="tabs" role="tablist">

                    <!-- Mobile Tab -->
                    <button class="tab is-active" type="button" role="tab" aria-selected="true"
                        data-target="#mobile-products">
                        Mobile
                    </button>

                    <!-- Watch Tab -->
                    <button class="tab" type="button" role="tab" aria-selected="false"
                        data-target="#watch-products">
                        Watch
                    </button>

                    <!-- Camera Tab -->
                    <button class="tab" type="button" role="tab" aria-selected="false"
                        data-target="#camera-products">
                        Camera
                    </button>

                    <!-- Accessories Tab -->
                    <button class="tab" type="button" role="tab" aria-selected="false"
                        data-target="#accessories-products">
                        Accessories
                    </button>

                    <!-- Speaker Tab -->
                    <button class="tab" type="button" role="tab" aria-selected="false"
                        data-target="#speaker-products">
                        Speaker
                    </button>

                </div>


                <!-- =====================================================
             MOBILE PRODUCTS
        ===================================================== -->

                <div class="products tab-pane" id="mobile-products">

                    <article class="product-card">

                        <div class="img-wrap">
                            <span class="badge">New</span>

                            <button class="wishlist" aria-label="Wishlist">
                                ♡
                            </button>

                            <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=500&q=80&auto=format&fit=crop"
                                alt="Galaxy Note 20 Ultra 5G">
                        </div>

                        <div class="stock">
                            <span class="dot"></span>
                            In stock · 52 items
                        </div>

                        <a href="product.html" class="name">
                            Galaxy Note 20 Ultra 5G
                        </a>

                        <div class="price">
                            <span class="now">$2,780</span>
                        </div>

                        <div class="stars">
                            ★★★★★
                            <span class="count">(56)</span>
                        </div>

                        <a href="cart.html" class="btn">
                            Order now →
                        </a>

                    </article>


                    <article class="product-card">

                        <div class="img-wrap">
                            <span class="badge badge--sale">Sale</span>

                            <button class="wishlist" aria-label="Wishlist">
                                ♡
                            </button>

                            <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?w=500&q=80&auto=format&fit=crop"
                                alt="iPad 10th Generation">
                        </div>

                        <div class="stock">
                            <span class="dot"></span>
                            In stock · 32 items
                        </div>

                        <a href="product.html" class="name">
                            iPad 10th Generation
                        </a>

                        <div class="price">
                            <span class="now">$1,780</span>
                            <span class="was">$1,980</span>
                        </div>

                        <div class="stars">
                            ★★★★★
                            <span class="count">(124)</span>
                        </div>

                        <a href="cart.html" class="btn">
                            Order now →
                        </a>

                    </article>


                    <article class="product-card">

                        <div class="img-wrap">

                            <button class="wishlist" aria-label="Wishlist">
                                ♡
                            </button>

                            <img src="https://images.unsplash.com/photo-1592899677977-9c10ca588bbd?w=500&q=80&auto=format&fit=crop"
                                alt="Galaxy Note 20 Ultra 5G Mint">

                        </div>

                        <div class="stock">
                            <span class="dot"></span>
                            In stock · 41 items
                        </div>

                        <a href="product.html" class="name">
                            Galaxy Note 20 Ultra 5G
                        </a>

                        <div class="price">
                            <span class="now">$2,780</span>
                        </div>

                        <div class="stars">
                            ★★★★☆
                            <span class="count">(89)</span>
                        </div>

                        <a href="cart.html" class="btn">
                            Order now →
                        </a>

                    </article>


                    <article class="product-card">

                        <div class="img-wrap">

                            <span class="badge">
                                New
                            </span>

                            <button class="wishlist" aria-label="Wishlist">
                                ♡
                            </button>

                            <img src="https://images.unsplash.com/photo-1565849904461-04a58ad377e0?w=500&q=80&auto=format&fit=crop"
                                alt="Samsung S21 Ultra">

                        </div>

                        <div class="stock">
                            <span class="dot"></span>
                            In stock · 24 items
                        </div>

                        <a href="product.html" class="name">
                            Samsung S21 Ultra
                        </a>

                        <div class="price">
                            <span class="now">$2,780</span>
                        </div>

                        <div class="stars">
                            ★★★★★
                            <span class="count">(212)</span>
                        </div>

                        <a href="cart.html" class="btn">
                            Order now →
                        </a>

                    </article>


                    <article class="product-card">

                        <div class="img-wrap">

                            <button class="wishlist" aria-label="Wishlist">
                                ♡
                            </button>

                            <img src="https://images.unsplash.com/photo-1592750475338-74b7b21085ab?w=500&q=80&auto=format&fit=crop"
                                alt="Samsung Galaxy Note 20">

                        </div>

                        <div class="stock">
                            <span class="dot"></span>
                            In stock · 67 items
                        </div>

                        <a href="product.html" class="name">
                            Samsung Galaxy Note 20
                        </a>

                        <div class="price">
                            <span class="now">$2,780</span>
                        </div>

                        <div class="stars">
                            ★★★★★
                            <span class="count">(98)</span>
                        </div>

                        <a href="cart.html" class="btn">
                            Order now →
                        </a>

                    </article>

                </div>


                <!-- =====================================================
             WATCH PRODUCTS
        ===================================================== -->

                <div class="products tab-pane" id="watch-products">

                    <article class="product-card">

                        <div class="img-wrap">

                            <span class="badge">
                                New
                            </span>

                            <button class="wishlist" aria-label="Wishlist">
                                ♡
                            </button>

                            <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?w=500&q=80&auto=format&fit=crop"
                                alt="Apple Watch Series 9">

                        </div>

                        <div class="stock">
                            <span class="dot"></span>
                            In stock · 25 items
                        </div>

                        <a href="product.html" class="name">
                            Apple Watch Series 9
                        </a>

                        <div class="price">
                            <span class="now">$399</span>
                        </div>

                        <div class="stars">
                            ★★★★★
                            <span class="count">(120)</span>
                        </div>

                        <a href="cart.html" class="btn">
                            Order now →
                        </a>

                    </article>


                    <article class="product-card">

                        <div class="img-wrap">

                            <span class="badge badge--sale">
                                Sale
                            </span>

                            <button class="wishlist" aria-label="Wishlist">
                                ♡
                            </button>

                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=500&q=80&auto=format&fit=crop"
                                alt="Samsung Galaxy Watch 6">

                        </div>

                        <div class="stock">
                            <span class="dot"></span>
                            In stock · 29 items
                        </div>

                        <a href="product.html" class="name">
                            Samsung Galaxy Watch 6
                        </a>

                        <div class="price">
                            <span class="now">$329</span>
                        </div>

                        <div class="stars">
                            ★★★★☆
                            <span class="count">(91)</span>
                        </div>

                        <a href="cart.html" class="btn">
                            Order now →
                        </a>

                    </article>


                    <article class="product-card">

                        <div class="img-wrap">

                            <button class="wishlist" aria-label="Wishlist">
                                ♡
                            </button>

                            <img src="https://images.unsplash.com/photo-1434494878577-86c23bcb06b9?w=500&q=80&auto=format&fit=crop"
                                alt="Apple Watch Ultra 2">

                        </div>

                        <div class="stock">
                            <span class="dot"></span>
                            In stock · 12 items
                        </div>

                        <a href="product.html" class="name">
                            Apple Watch Ultra 2
                        </a>

                        <div class="price">
                            <span class="now">$799</span>
                        </div>

                        <div class="stars">
                            ★★★★★
                            <span class="count">(203)</span>
                        </div>

                        <a href="cart.html" class="btn">
                            Order now →
                        </a>

                    </article>


                    <article class="product-card">

                        <div class="img-wrap">

                            <button class="wishlist" aria-label="Wishlist">
                                ♡
                            </button>

                            <img src="https://images.unsplash.com/photo-1508685096489-7aacd43bd3b1?w=500&q=80&auto=format&fit=crop"
                                alt="Garmin Venu 3">

                        </div>

                        <div class="stock">
                            <span class="dot"></span>
                            In stock · 22 items
                        </div>

                        <a href="product.html" class="name">
                            Garmin Venu 3
                        </a>

                        <div class="price">
                            <span class="now">$449</span>
                        </div>

                        <div class="stars">
                            ★★★★★
                            <span class="count">(76)</span>
                        </div>

                        <a href="cart.html" class="btn">
                            Order now →
                        </a>

                    </article>

                </div>


                <!-- =====================================================
             CAMERA PRODUCTS
        ===================================================== -->

                <div class="products tab-pane" id="camera-products">

                    <article class="product-card">

                        <div class="img-wrap">

                            <span class="badge">
                                New
                            </span>

                            <button class="wishlist" aria-label="Wishlist">
                                ♡
                            </button>

                            <img src="https://images.unsplash.com/photo-1516035069371-29a1b244cc32?w=500&q=80&auto=format&fit=crop"
                                alt="Sony Alpha A7 IV">

                        </div>

                        <div class="stock">
                            <span class="dot"></span>
                            In stock · 15 items
                        </div>

                        <a href="product.html" class="name">
                            Sony Alpha A7 IV
                        </a>

                        <div class="price">
                            <span class="now">$2,499</span>
                        </div>

                        <div class="stars">
                            ★★★★★
                            <span class="count">(186)</span>
                        </div>

                        <a href="cart.html" class="btn">
                            Order now →
                        </a>

                    </article>


                    <article class="product-card">

                        <div class="img-wrap">

                            <button class="wishlist" aria-label="Wishlist">
                                ♡
                            </button>

                            <img src="https://images.unsplash.com/photo-1606986628253-0e9c5f0b9c99?w=500&q=80&auto=format&fit=crop"
                                alt="Canon EOS R6">

                        </div>

                        <div class="stock">
                            <span class="dot"></span>
                            In stock · 9 items
                        </div>

                        <a href="product.html" class="name">
                            Canon EOS R6
                        </a>

                        <div class="price">
                            <span class="now">$2,199</span>
                        </div>

                        <div class="stars">
                            ★★★★★
                            <span class="count">(142)</span>
                        </div>

                        <a href="cart.html" class="btn">
                            Order now →
                        </a>

                    </article>


                    <article class="product-card">

                        <div class="img-wrap">

                            <button class="wishlist" aria-label="Wishlist">
                                ♡
                            </button>

                            <img src="https://images.unsplash.com/photo-1512790182412-b19e6d62bc39?w=500&q=80&auto=format&fit=crop"
                                alt="Nikon Z6 II">

                        </div>

                        <div class="stock">
                            <span class="dot"></span>
                            In stock · 14 items
                        </div>

                        <a href="product.html" class="name">
                            Nikon Z6 II
                        </a>

                        <div class="price">
                            <span class="now">$1,999</span>
                        </div>

                        <div class="stars">
                            ★★★★☆
                            <span class="count">(94)</span>
                        </div>

                        <a href="cart.html" class="btn">
                            Order now →
                        </a>

                    </article>


                    <article class="product-card">

                        <div class="img-wrap">

                            <button class="wishlist" aria-label="Wishlist">
                                ♡
                            </button>

                            <img src="https://images.unsplash.com/photo-1606986628253-0e9c5f0b9c99?w=500&q=80&auto=format&fit=crop"
                                alt="Fujifilm X-T5">

                        </div>

                        <div class="stock">
                            <span class="dot"></span>
                            In stock · 11 items
                        </div>

                        <a href="product.html" class="name">
                            Fujifilm X-T5
                        </a>

                        <div class="price">
                            <span class="now">$1,699</span>
                        </div>

                        <div class="stars">
                            ★★★★★
                            <span class="count">(118)</span>
                        </div>

                        <a href="cart.html" class="btn">
                            Order now →
                        </a>

                    </article>

                </div>


                <!-- =====================================================
             ACCESSORIES PRODUCTS
        ===================================================== -->

                <div class="products tab-pane" id="accessories-products">

                    <article class="product-card">

                        <div class="img-wrap">

                            <span class="badge badge--sale">
                                Sale
                            </span>

                            <button class="wishlist" aria-label="Wishlist">
                                ♡
                            </button>

                            <img src="https://images.unsplash.com/photo-1586953208448-b95a79798f07?w=500&q=80&auto=format&fit=crop"
                                alt="Wireless Charging Pad">

                        </div>

                        <div class="stock">
                            <span class="dot"></span>
                            In stock · 45 items
                        </div>

                        <a href="product.html" class="name">
                            Wireless Charging Pad
                        </a>

                        <div class="price">
                            <span class="now">$49</span>
                            <span class="was">$69</span>
                        </div>

                        <div class="stars">
                            ★★★★☆
                            <span class="count">(64)</span>
                        </div>

                        <a href="cart.html" class="btn">
                            Order now →
                        </a>

                    </article>


                    <article class="product-card">

                        <div class="img-wrap">

                            <button class="wishlist" aria-label="Wishlist">
                                ♡
                            </button>

                            <img src="https://images.unsplash.com/photo-1583863788434-e58a36330cf0?w=500&q=80&auto=format&fit=crop"
                                alt="USB-C Fast Charger">

                        </div>

                        <div class="stock">
                            <span class="dot"></span>
                            In stock · 73 items
                        </div>

                        <a href="product.html" class="name">
                            USB-C Fast Charger
                        </a>

                        <div class="price">
                            <span class="now">$39</span>
                        </div>

                        <div class="stars">
                            ★★★★★
                            <span class="count">(132)</span>
                        </div>

                        <a href="cart.html" class="btn">
                            Order now →
                        </a>

                    </article>


                    <article class="product-card">

                        <div class="img-wrap">

                            <span class="badge">
                                New
                            </span>

                            <button class="wishlist" aria-label="Wishlist">
                                ♡
                            </button>

                            <img src="https://images.unsplash.com/photo-1601593346740-925612772716?w=500&q=80&auto=format&fit=crop"
                                alt="Premium Phone Case">

                        </div>

                        <div class="stock">
                            <span class="dot"></span>
                            In stock · 36 items
                        </div>

                        <a href="product.html" class="name">
                            Premium Phone Case
                        </a>

                        <div class="price">
                            <span class="now">$29</span>
                        </div>

                        <div class="stars">
                            ★★★★☆
                            <span class="count">(51)</span>
                        </div>

                        <a href="cart.html" class="btn">
                            Order now →
                        </a>

                    </article>


                    <article class="product-card">

                        <div class="img-wrap">

                            <button class="wishlist" aria-label="Wishlist">
                                ♡
                            </button>

                            <img src="https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=500&q=80&auto=format&fit=crop"
                                alt="Bluetooth Keyboard">

                        </div>

                        <div class="stock">
                            <span class="dot"></span>
                            In stock · 22 items
                        </div>

                        <a href="product.html" class="name">
                            Bluetooth Keyboard
                        </a>

                        <div class="price">
                            <span class="now">$89</span>
                        </div>

                        <div class="stars">
                            ★★★★★
                            <span class="count">(98)</span>
                        </div>

                        <a href="cart.html" class="btn">
                            Order now →
                        </a>

                    </article>

                </div>


                <!-- =====================================================
             SPEAKER PRODUCTS
        ===================================================== -->

                <div class="products tab-pane" id="speaker-products">

                    <article class="product-card">

                        <div class="img-wrap">

                            <span class="badge">
                                New
                            </span>

                            <button class="wishlist" aria-label="Wishlist">
                                ♡
                            </button>

                            <img src="https://images.unsplash.com/photo-1608043152269-423dbba4e7e1?w=500&q=80&auto=format&fit=crop"
                                alt="JBL Charge 5">

                        </div>

                        <div class="stock">
                            <span class="dot"></span>
                            In stock · 31 items
                        </div>

                        <a href="product.html" class="name">
                            JBL Charge 5
                        </a>

                        <div class="price">
                            <span class="now">$179</span>
                        </div>

                        <div class="stars">
                            ★★★★★
                            <span class="count">(231)</span>
                        </div>

                        <a href="cart.html" class="btn">
                            Order now →
                        </a>

                    </article>


                    <article class="product-card">

                        <div class="img-wrap">

                            <button class="wishlist" aria-label="Wishlist">
                                ♡
                            </button>

                            <img src="https://images.unsplash.com/photo-1589003077984-894e133dabab?w=500&q=80&auto=format&fit=crop"
                                alt="Sony SRS-XB23">

                        </div>

                        <div class="stock">
                            <span class="dot"></span>
                            In stock · 19 items
                        </div>

                        <a href="product.html" class="name">
                            Sony SRS-XB23
                        </a>

                        <div class="price">
                            <span class="now">$129</span>
                        </div>

                        <div class="stars">
                            ★★★★☆
                            <span class="count">(87)</span>
                        </div>

                        <a href="cart.html" class="btn">
                            Order now →
                        </a>

                    </article>


                    <article class="product-card">

                        <div class="img-wrap">

                            <span class="badge">
                                New
                            </span>

                            <button class="wishlist" aria-label="Wishlist">
                                ♡
                            </button>

                            <img src="https://images.unsplash.com/photo-1545454675-3531b543be5d?w=500&q=80&auto=format&fit=crop"
                                alt="Bose SoundLink Flex">

                        </div>

                        <div class="stock">
                            <span class="dot"></span>
                            In stock · 16 items
                        </div>

                        <a href="product.html" class="name">
                            Bose SoundLink Flex
                        </a>

                        <div class="price">
                            <span class="now">$149</span>
                        </div>

                        <div class="stars">
                            ★★★★★
                            <span class="count">(154)</span>
                        </div>

                        <a href="cart.html" class="btn">
                            Order now →
                        </a>

                    </article>


                    <article class="product-card">

                        <div class="img-wrap">

                            <button class="wishlist" aria-label="Wishlist">
                                ♡
                            </button>

                            <img src="https://images.unsplash.com/photo-1608156639585-b3a032ef9689?w=500&q=80&auto=format&fit=crop"
                                alt="Marshall Emberton II">

                        </div>

                        <div class="stock">
                            <span class="dot"></span>
                            In stock · 13 items
                        </div>

                        <a href="product.html" class="name">
                            Marshall Emberton II
                        </a>

                        <div class="price">
                            <span class="now">$169</span>
                        </div>

                        <div class="stars">
                            ★★★★★
                            <span class="count">(109)</span>
                        </div>

                        <a href="cart.html" class="btn">
                            Order now →
                        </a>

                    </article>

                </div>

            </div>
        </section>

        <!-- DISCOUNT BANNERS -->
        <section class="section" style="padding-top:0">
            <div class="container">
                <div class="discount-row">
                    <article class="discount-card discount-card--watch">
                        <span class="meta">THIS WEEK ONLY</span>
                        <h3>Mega Discounts<br /><span class="pct">50% Off</span></h3>
                        <a href="shop.html" class="shop-now">Shop Now
                            <svg width="14" height="10" viewBox="0 0 14 10" fill="none">
                                <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <img class="product"
                            src="https://images.unsplash.com/photo-1579586337278-3befd40fd17a?w=500&q=80&auto=format&fit=crop"
                            alt="Smart watch" />
                    </article>
                    <article class="discount-card discount-card--airpods">
                        <span class="meta">LIMITED EDITION</span>
                        <h3>Studio Buds Pro<br /><span class="pct">30% Off</span></h3>
                        <a href="shop.html" class="shop-now">Shop Now
                            <svg width="14" height="10" viewBox="0 0 14 10" fill="none">
                                <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <img class="product"
                            src="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?w=500&q=80&auto=format&fit=crop"
                            alt="Earbuds" />
                    </article>
                </div>
            </div>
        </section>

        <!-- CATEGORIES grid -->
        <section class="section" style="padding-top: var(--s5)">
            <div class="container">
                <div class="section-head">
                    <h2>Shop by category</h2>
                    <a href="shop.html" class="view-all">View all products
                        <svg width="14" height="10" viewBox="0 0 14 10" fill="none">
                            <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-width="1.8"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
                <div class="cats-grid">
                    <a href="shop.html" class="cat-tile">
                        <div class="pic"><img
                                src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=300&q=80&auto=format&fit=crop"
                                alt="" /></div>
                        <div class="name">Watch</div>
                        <div class="count">28 Products</div>
                    </a>
                    <a href="shop.html" class="cat-tile">
                        <div class="pic"><img
                                src="https://images.unsplash.com/photo-1502920917128-1aa500764cbd?w=300&q=80&auto=format&fit=crop"
                                alt="" /></div>
                        <div class="name">Camera</div>
                        <div class="count">42 Products</div>
                    </a>
                    <a href="shop.html" class="cat-tile">
                        <div class="pic"><img
                                src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=300&q=80&auto=format&fit=crop"
                                alt="" /></div>
                        <div class="name">Smart Phone</div>
                        <div class="count">76 Products</div>
                    </a>
                    <a href="shop.html" class="cat-tile">
                        <div class="pic"><img
                                src="https://images.unsplash.com/photo-1592840496694-26d035b52b48?w=300&q=80&auto=format&fit=crop"
                                alt="" /></div>
                        <div class="name">Accessories</div>
                        <div class="count">112 Products</div>
                    </a>
                    <a href="shop.html" class="cat-tile">
                        <div class="pic"><img
                                src="https://images.unsplash.com/photo-1606220945770-b5b6c2c55bf1?w=300&q=80&auto=format&fit=crop"
                                alt="" /></div>
                        <div class="name">Smart Buds</div>
                        <div class="count">35 Products</div>
                    </a>
                </div>
            </div>
        </section>

        <!-- COMPACT row (4 cards in 2x2 layout) -->
        <section class="section" style="padding-top:0">
            <div class="container">
                <div class="section-head">
                    <h2>Just for you</h2>
                    <a href="shop.html" class="view-all">More picks
                        <svg width="14" height="10" viewBox="0 0 14 10" fill="none">
                            <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-width="1.8"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
                <div class="compact-row">
                    <article class="compact-card">
                        <div class="pic"><img
                                src="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?w=300&q=80&auto=format&fit=crop"
                                alt="" /></div>
                        <div>
                            <div class="stock">IN STOCK · 12</div>
                            <div class="name">Apple Airpods V57</div>
                            <div class="price">$680</div>
                            <a href="cart.html" class="btn">Order Now</a>
                        </div>
                    </article>
                    <article class="compact-card">
                        <div class="pic"><img
                                src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=300&q=80&auto=format&fit=crop"
                                alt="" /></div>
                        <div>
                            <div class="stock">IN STOCK · 8</div>
                            <div class="name">Apple MacBook Pro</div>
                            <div class="price">$2,780</div>
                            <a href="cart.html" class="btn">Order Now</a>
                        </div>
                    </article>
                    <article class="compact-card">
                        <div class="pic"><img
                                src="https://images.unsplash.com/photo-1592840496694-26d035b52b48?w=300&q=80&auto=format&fit=crop"
                                alt="" /></div>
                        <div>
                            <div class="stock">IN STOCK · 24</div>
                            <div class="name">Power Wired Controller</div>
                            <div class="price">$190</div>
                            <a href="cart.html" class="btn">Order Now</a>
                        </div>
                    </article>
                    <article class="compact-card">
                        <div class="pic"><img
                                src="https://images.unsplash.com/photo-1527814050087-3793815479db?w=300&q=80&auto=format&fit=crop"
                                alt="" /></div>
                        <div>
                            <div class="stock">IN STOCK · 36</div>
                            <div class="name">Gaming Mouse Pro</div>
                            <div class="price">$190</div>
                            <a href="cart.html" class="btn">Order Now</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- BRAND STRIP -->
        <section class="brands">
            <div class="container">
                <div class="brand-row">
                    <a href="#" class="brand-logo">HP</a>
                    <a href="#" class="brand-logo">Huawei</a>
                    <a href="#" class="brand-logo">Nokia</a>
                    <a href="#" class="brand-logo">Samsung</a>
                    <a href="#" class="brand-logo">Canon</a>
                    <a href="#" class="brand-logo">Sony</a>
                </div>
            </div>
        </section>

        <!-- NEWSLETTER -->
        <section style="background: var(--paper)">
            <div class="container">
                <div class="newsletter">
                    <div class="newsletter-grid">
                        <div>
                            <h2>Get <strong>20% Off</strong> your first order — straight to your inbox.</h2>
                            <p>Drop your email and we'll send a one-time discount, plus first-look offers on the gear we
                                just got in. Unsubscribe anytime.</p>
                        </div>
                        <form class="newsletter-form"
                            onsubmit="event.preventDefault(); this.querySelector('button').textContent='Sent ✓';">
                            <input type="email" required placeholder="Enter your email" aria-label="Email address" />
                            <button class="btn" type="submit">Subscribe →</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection


<!-- =====================================================
         TAB JAVASCRIPT
    ===================================================== -->
@section('script')
<script>
    document.addEventListener("DOMContentLoaded", function() {

        const tabs = document.querySelectorAll(".tab");
        const panes = document.querySelectorAll(".tab-pane");

        // Hide every pane except Mobile
        panes.forEach(function(pane) {
            if (pane.id !== "mobile-products") {
                pane.style.display = "none";
            }
        });

        tabs.forEach(function(tab) {

            tab.addEventListener("click", function() {

                const targetSelector = this.getAttribute("data-target");
                const targetPane = document.querySelector(targetSelector);

                if (!targetPane) {
                    return;
                }

                // Remove active state from all tabs
                tabs.forEach(function(item) {
                    item.classList.remove("is-active");
                    item.setAttribute("aria-selected", "false");
                });

                // Add active state to clicked tab
                this.classList.add("is-active");
                this.setAttribute("aria-selected", "true");

                // Hide all product sections
                panes.forEach(function(pane) {
                    pane.style.display = "none";
                });

                // Show selected product section
                targetPane.style.display = "";
            });

        });

    });
</script>
@endsection