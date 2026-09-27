@props(['item'])

<article class="product-card">

    <a href="{{ route('product.details', $item) }}">
        <div class="img-wrap">
            <span class="badge">New</span>

            <button class="wishlist" aria-label="Wishlist">
                ♡
            </button>
            @if ($item->image)
                <img src="{{ asset($item->image) }}" alt="{{ $item->name }}">
            @else
                <img src="https://placehold.net/product-400x400.png">
            @endif
        </div>

        <div class="stock">
            <span class="dot"></span>
            In stock · {{ $item->quantity }} items
        </div>

        <span class="name">
            {{ $item->name }}
        </span>

        <div class="price">
            <span class="now">{{ $item->price }}</span>
        </div>

        <div class="stars">
            ★★★★★
            <span class="count">(56)</span>
        </div>
    </a>

    <a href="cart.html" class="btn">
        Order now →
    </a>

</article>
