@extends('layouts.front.partial-template.basic')

@section('loader')
@include('layouts.front.partial-template.loader')
@endsection
@section('body')
@include('layouts.front.partial-template.header')
@include('layouts.front.partial-template.menu')
@yield('content')
@include('layouts.front.partial-template.footer')
@include('layouts.front.partial-template.login-modal')

@endsection
@push('js')
<script>
    function addToCart(id) {
        let itemId = parseInt(id.substring(4));
        let itemCount = document.getElementById('itemCount');
        // Access Cart and Wishlist
        let cartBtns = document.querySelectorAll('#cart' + itemId)
        let quickCartBtn = document.querySelectorAll('#qkct' + itemId)
        let wishlistBtn = document.querySelectorAll('#wishlist' + itemId);
        let wishIconBtn = document.querySelectorAll('#wishIcon' + itemId);
        @if (Auth::check())
            let token={{Auth::user()->id}}
        @else
            let token="{{session()->get('_token')}}"
        @endif
        let quantity = 1;
        if (document.getElementById('quantity' + itemId) != null) {
            quantity = document.getElementById('quantity' + itemId).value;
        }
        let uri = `http://127.0.0.1:8000/api/cart`;
        data = {
            itemId: itemId,
            quantity: parseInt(quantity),
            token:token,
        }
        params = {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }
        fetch(uri, params).then(response => response.json()).then(jsondata => {
            if (jsondata != null) {
                itemCount.innerText = jsondata.extraData.itemCount;
                cartBtns.forEach((cartBtn) => {
                    if (cartBtn.firstElementChild) {
                    console.log("if",cartBtn.firstElementChild);
                    cartBtn.innerHTML="";
                    cartIcon=document.createElement("span");
                    cartIcon.className="fa fa-shopping-cart";
                    cartBtn.appendChild(cartIcon)
                    // textNode=document.createTextNode("Added To Cart");
                    // cartBtn.appendChild(textNode);
                    console.log("if",cartBtn.textContent);

                    } else {
                    console.log("else");
                    cartBtn.innerText = "Added To Cart";
                    }
                    cartBtn.setAttribute('href', location.origin + '/cart');
                    cartBtn.removeAttribute('onclick')
                });
                if (quickCartBtn) {
                    quickCartBtn.forEach((quickCartBtn) => {
                        quickCartBtn.innerText = "Added To Cart";
                    });
                }
                // Wishlist Btn
                if (wishlistBtn != null) {
                    wishlistBtn.forEach((wishlistBtn) => {
                        wishlistBtn.innerText = "Wishlist";
                        wishlistBtn.setAttribute('onclick', 'addToWishlist(this.id)');
                        wishlistBtn.style.cursor = "pointer";
                        wishlistBtn.removeAttribute('href');
                    });
                }
                if (wishIconBtn != null) {
                    wishIconBtn.forEach((wishIconBtn) => {
                        wishIconBtn.children[0].className = 'fa fa-heart-o';
                        wishIconBtn.setAttribute('onclick', 'addToWishlist(this.id)');
                        wishIconBtn.removeAttribute('href');
                    });
                }
                // console.log(quantity, cartBtn);
            }
                // console.log(jsondata);
        });
    }

    function addToWishlist(id) {
        let itemId = parseInt(id.substring(8));
        let itemCount = document.getElementById('itemCount');

        // Cart and Wishlist
        let wishlistBtn = document.querySelectorAll('#wishlist' + itemId);
        let wishIconBtn = document.querySelectorAll('#wishIcon' + itemId);
        let cartBtn = document.querySelectorAll('#cart' + itemId);
        let quantity = 1;
        @if (Auth::check())
            let token={{Auth::user()->id}}
        @else
            let token="{{session()->get('_token')}}"
        @endif
        if (document.getElementById('quantity' + itemId) != null) {
            quantity = document.getElementById('quantity' + itemId).value;
        }
        let uri = `http://127.0.0.1:8000/api/wishlist`;
        data = {
            itemId: itemId,
            quantity: quantity,
            token:token
        }
        params = {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }
        fetch(uri, params).then(response => response.json()).then(jsondata => {
            if (jsondata != null) {
                if (wishlistBtn != null) {
                    wishlistBtn.forEach((wishlistBtn) => {
                        wishlistBtn.innerText = "Added To Wishlist";
                        wishlistBtn.setAttribute('href', location.origin + '/wishlist');
                        wishlistBtn.removeAttribute('onclick');
                    });
                }

                if (wishIconBtn != null) {
                    wishIconBtn.forEach((wishIconBtn) => {
                        console.log("inside whislist icon");
                        wishIconBtn.children[0].className = 'fa fa-heart';
                        wishIconBtn.setAttribute('href', location.origin + '/wishlist');
                        wishIconBtn.removeAttribute('onclick');
                    })
                }

                // Cart Btn
                if (cartBtn != null) {
                    itemCount.innerText = jsondata.itemCount;
                    cartBtn.forEach((cartBtn) => {
                        if (cartBtn.firstElementChild) {
                    console.log("if",cartBtn.firstElementChild);
                    cartBtn.innerHTML="";
                    cartIcon=document.createElement("span");
                    cartIcon.className="fa fa-opencart";
                    cartBtn.appendChild(cartIcon)
                    // textNode=document.createTextNode("Add To Cart");
                    // cartBtn.appendChild(textNode);
                    console.log("if",cartBtn.textContent);

                    } else {
                    console.log("else");
                    cartBtn.innerText = "Add To Cart";
                    }
                        cartBtn.setAttribute('onclick', 'addToCart(this.id)');
                        cartBtn.style.cursor = "pointer";
                        cartBtn.removeAttribute('href');
                    });
                }
                console.log(jsondata);
            }
        });
    }
</script>
@endpush