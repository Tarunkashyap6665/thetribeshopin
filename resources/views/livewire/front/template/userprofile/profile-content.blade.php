<div>
    <div class="col-sm-9">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
            <li><a data-toggle="tab" href="#messages">My Orders</a></li>
            {{-- <li><a data-toggle="tab" href="#Wishlists">Wishlist</a></li>
            <li><a data-toggle="tab" href="#Manage Addresses">Manage Address</a></li>
            <li><a data-toggle="tab" href="#Payments">Payment</a></li> --}}
        </ul>


        <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>

                @if ($edit)
                <form class="form">
                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="first_name">
                                <h4>First name</h4>
                            </label>
                            <input type="text" class="form-control" wire:model.lazy="form.firstName"
                                placeholder="first name" title="enter your first name if any."
                                value="{{$form['firstName']}}">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="last_name">
                                <h4>Last name</h4>
                            </label>
                            <input type="text" class="form-control" wire:model.lazy="form.lastName"
                                placeholder="last name" title="enter your last name if any."
                                value="{{$form['lastName']}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="mobile">
                                <h4>Mobile</h4>
                            </label>
                            <input type="text" class="form-control" wire:model.lazy="form.mobile" name="mobile"
                                id="mobile" placeholder="enter mobile number" title="enter your mobile number if any."
                                value="{{$form['mobile']??''}}">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="email">
                                <h4>Email</h4>
                            </label>
                            <input type="email" class="form-control" name="email" wire:model="form.email" id="email"
                                placeholder="you@email.com" title="enter your email." value="{{$form['email']}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <br>
                            <button class="btn btn-lg btn-success" type="button" wire:click="save"><i
                                    class="glyphicon glyphicon-ok-sign"></i>
                                Save</button>
                </form>
                @else
                <form class="form" id="registrationForm">
                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="first_name">
                                <h4>First name</h4>
                            </label>
                            <input type="text" class="form-control" name="first_name" id="first_name"
                                placeholder="first name" title="enter your first name if any."
                                value="{{$form['firstName']}}" disabled>
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="last_name">
                                <h4>Last name</h4>
                            </label>
                            <input type="text" class="form-control" name="last_name" id="last_name"
                                placeholder="last name" title="enter your last name if any."
                                value="{{$form['lastName']}}" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-6">
                            <label for="mobile">
                                <h4>Mobile</h4>
                            </label>
                            <input type="text" class="form-control" name="mobile" id="mobile"
                                placeholder="enter mobile number" title="enter your mobile number if any."
                                value="{{$user->userDetails->mobile??''}}" disabled>
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-xs-6">
                            <label for="email">
                                <h4>Email</h4>
                            </label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com"
                                title="enter your email." value="{{($user->email)}}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <br>
                            <button class="btn btn-lg btn-warning" wire:click="edit" type="button"><i
                                    class="glyphicon glyphicon-ok-sign"></i>Edit</button>
                            @endif
                        </div>
                    </div>
                </form>

                <hr>

            </div>
            <!--/tab-pane-->
            <div class="tab-pane" id="messages">

                <h2></h2>

                <class class="row">
                    <style>
                        .table>tbody>tr>td,
                        .table>tfoot>tr>td {
                            vertical-align: middle;
                        }

                        @media screen and (max-width: 600px) {
                            table#cart tbody td .form-control {
                                width: 20%;
                                display: inline !important;
                            }

                            .actions .btn {
                                width: 36%;
                                margin: 1.5em 0;
                            }

                            .actions .btn-info {
                                float: left;
                            }

                            .actions .btn-danger {
                                float: right;
                            }

                            table#cart thead {
                                display: none;
                            }

                            table#cart tbody td {
                                display: block;
                                padding: .6rem;
                                min-width: 320px;
                            }

                            table#cart tbody tr td:first-child {
                                background: #333;
                                color: #fff;
                            }

                            table#cart tbody td:before {
                                content: attr(data-th);
                                font-weight: bold;
                                display: inline-block;
                                width: 8rem;
                            }



                            table#cart tfoot td {
                                display: block;
                            }

                            table#cart tfoot td .btn {
                                display: block;
                            }

                        }
                    </style>

                    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
                    <div class="container">
                        <table id="cart" class="table table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th style="width:10%" class="text-center">Product</th>
                                    <th style="width:1%" class="text-center">Quantity</th>
                                    <th style="width:5%" class="text-center">Total Price</th>
                                    <th style="width:3%" class="text-center">Status</th>
                                </tr>
                            </thead>
                            @forelse ($orders as $order)
                            
                            <td colspan="4">
                                Order id - T3AGs{{$order->id}}
                            </td>
                            <tbody>
                                @forelse ($order->haveOrderProducts as $orderProduct)
                                <tr>
                                    @php
                                    $imageString=$orderProduct->product->haveAttribute->images;
                                    $imageArray=json_decode($imageString);
                                    $imagePath='storage/'.$imageArray[0];
                                    @endphp
                                    <td data-th="Product">
                                        <div class="row">
                                            <div class="col-sm-2 hidden-xs"><img src="{{asset($imagePath)}}" alt="..."
                                                    class="img-responsive" /></div>
                                            <div class="col-sm-10">
                                                <h4 class="nomargin">{{$orderProduct->product->name}}</h4>
                                                <p>{{$orderProduct->product->description}}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-th="Quantity" class="text-center">
                                        <input type="number" class="form-control text-center"
                                            value="{{$orderProduct->product_qty}}" disabled>
                                    </td>
                                    <td data-th="Price" class="text-center">Rs. {{$orderProduct->product_price}}</td>
                                    @if ($order->order_status)
                                    <td data-th="Subtotal" class="text-center">
                                        <div class="alert alert-success" role="alert">Approved.</div>
                                    </td>
                                    @else
                                    <td data-th="Subtotal" class="text-center">
                                        <div class="alert alert-warning" role="alert">Pending..</div>
                                    </td>
                                    @endif
                                </tr>
                            </tbody>
                            @empty
                            Empty
                            @endforelse
                            
                            @empty
                            <tbody>
                                <tr>
                                    <td>
                                        <h6>Empty..</h6>
                                    </td>
                                </tr>
                            </tbody>

                            @endforelse
                        </table>
                </class>

            </div>
            <!--/tab-pane-->
            <div class="tab-pane" id="Wishlists">


            </div>

        </div>
        <!--/tab-pane-->
    </div>
</div>