@extends('site.layouts.master')

@section('title', 'Cart')

@section('style')
    <style>
        .checkout-form {
            display: none;
        }
    </style>
@endsection

@section('content')
    <main id="main">

        <section class="page-head">
            <div class="container">
                <p>Payment is succesfull</p>
            </div>
        </section>

       

    </main>

@endsection


@section('script')
    @if (session('success'))
        <script>
            cart.emptyCart();
        </script>
    @endif
    <script>
        // Cart
        // ======================

        let cartList = document.querySelector('.cart-list');

        function printCart() {
            var list = cart.getCart();
            document.querySelector('.checkout-form input[name="items"]').value = JSON.stringify(list);
            var html = '';
            var subtotal = 0;
            list.forEach(item => {

                // img = item.img ? "{{ asset(':img') }}".replace(':img', item.img) :  'https://placehold.net/400x400.png';
                img = item.img ? item.img : 'https://placehold.net/400x400.png';
                html += `
                <article class="cart-row">
                    <div class="pic"><img src="${img}" alt=""></div>
                    <div class="info">
                    <div class="name">${item.name}</div>
                    <div class="variant">$${item.price.toFixed(2)}</div>
                    </div>
                    <div class="qty">

                    <button data-act="-" aria-label="Decrease" onclick="decreaseQty(${item.id}")>−</button>

                    <input type="text" value="${item.quantity}" inputmode="numeric" aria-label="Quantity">
                    
                    <button data-act="+" aria-label="Increase" onclick="increaseQty(${item.id})">+</button>
                    </div>

                    <span class="subtotal">$${(item.price * item.quantity).toFixed(2)}</span>
                    <button class="remove" aria-label="Remove" onclick="removeFromCart(${item.id})">✕</button>
                </article>
            `;
                subtotal += parseFloat(item.price * item.quantity);

            });
            cartList.innerHTML = html;
            document.querySelector('#subtotal').innerText = `$${subtotal.toFixed(2)}`;
            document.querySelector('#shippingCost').innerText = `$${(subtotal ? 30 : 0).toFixed(2)}`;
            document.querySelector('#tax').innerText = `$${(subtotal * .05).toFixed(2)}`;
            document.querySelector('#total').innerText =
                `$${(subtotal + (subtotal ? 30 : 0) + (subtotal * .05)).toFixed(2)}`;
        }
        printCart();

        function increaseQty(id) {
            cart.increaseQuantity(id);
            printCart();
        }

        function decreaseQty(id) {
            cart.decreaseQuantity(id);
            printCart();
            printItemsNumber();
        }

        function removeFromCart(id) {
            cart.removeItem(id);
            printCart();
            printItemsNumber();
        }

        // Order Form
        // ======================
        document.querySelector('.btn-proceed').addEventListener('click', function() {
            document.querySelector('.checkout-form').style.display = 'block';
            this.style.display = "none";
        })
    </script>
@endsection
