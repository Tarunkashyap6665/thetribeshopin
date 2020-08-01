<div class="col-sm-9">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
        <li><a data-toggle="tab" href="#messages">My Orders</a></li>
        <li><a data-toggle="tab" href="#Wishlists">Wishlist</a></li>
        <li><a data-toggle="tab" href="#Manage Addresses">Manage Address</a></li>
        <li><a data-toggle="tab" href="#Payments">Payment</a></li>
    </ul>


    <div class="tab-content">
        <div class="tab-pane active" id="home">
            <hr>
            <form class="form" action="##" method="post" id="registrationForm">
                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="first_name">
                            <h4>First name</h4>
                        </label>
                        <input type="text" class="form-control" name="first_name" id="first_name"
                            placeholder="first name" title="enter your first name if any." value="{{$firstName}}">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="last_name">
                            <h4>Last name</h4>
                        </label>
                        <input type="text" class="form-control" name="last_name" id="last_name"
                            placeholder="last name" title="enter your last name if any." value="{{$lastName}}">
                    </div>
                </div>

                {{-- <div class="form-group">

                    <div class="col-xs-6">
                        <label for="phone">
                            <h4>Phone</h4>
                        </label>
                        <input type="text" class="form-control" name="phone" id="phone"
                            placeholder="enter phone" title="enter your phone number if any.">
                    </div>
                </div> --}}

                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="mobile">
                            <h4>Mobile</h4>
                        </label>
                        <input type="text" class="form-control" name="mobile" id="mobile"
                            placeholder="enter mobile number" title="enter your mobile number if any." >
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="email">
                            <h4>Email</h4>
                        </label>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="you@email.com" title="enter your email." value="{{$user->email}}">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="email">
                            <h4>Location</h4>
                        </label>
                        <input type="email" class="form-control" id="location" placeholder="somewhere"
                            title="enter a location">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="password">
                            <h4>Password</h4>
                        </label>
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="password" title="enter your password.">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="password2">
                            <h4>Verify</h4>
                        </label>
                        <input type="password" class="form-control" name="password2" id="password2"
                            placeholder="password2" title="enter your password2.">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <br>
                        <button class="btn btn-lg btn-success" type="submit"><i
                                class="glyphicon glyphicon-ok-sign"></i> Save</button>
                        <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i>
                            Reset</button>
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

                <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"
                    rel="stylesheet">
                <div class="container">
                    <table id="cart" class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th style="width:50%">Product</th>
                                <th style="width:10%">Price</th>
                                <th style="width:8%">Quantity</th>
                                <th style="width:22%" class="text-center">Subtotal</th>
                                <th style="width:10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-sm-2 hidden-xs"><img
                                                src="http://placehold.it/100x100" alt="..."
                                                class="img-responsive" /></div>
                                        <div class="col-sm-10">
                                            <h4 class="nomargin">Product 1</h4>
                                            <p>Quis aute iure reprehenderit in voluptate velit esse cillum
                                                dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price">$1.99</td>
                                <td data-th="Quantity">
                                    <input type="number" class="form-control text-center" value="1">
                                </td>
                                <td data-th="Subtotal" class="text-center">1.99</td>
                                <td class="actions" data-th="">
                                    <button class="btn btn-info btn-sm"><i
                                            class="fa fa-refresh"></i></button>
                                    <button class="btn btn-danger btn-sm"><i
                                            class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="visible-xs">
                                <td class="text-center"><strong>Total 1.99</strong></td>
                            </tr>
                            <tr>
                                <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i>
                                        Continue Shopping</a></td>
                                <td colspan="2" class="hidden-xs"></td>
                                <td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
                                <td><a href="#" class="btn btn-success btn-block">Checkout <i
                                            class="fa fa-angle-right"></i></a></td>
                            </tr>
                        </tfoot>
                    </table>
            </class>

        </div>
        <!--/tab-pane-->
        <div class="tab-pane" id="Wishlists">


        </div>

    </div>
    <!--/tab-pane-->
</div>
