<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Anand\LaravelPaytmWallet\Facades\PaytmWallet;
use App\Order;
use App\OrderProduct;
use App\Product;

class OrderController extends Controller
{
    /**
     * Redirect the user to the Payment Gateway.
     *
     * @return Response
     */
    public function order(Request $request)
    {
      // dd($request->productId);
      $order=Order::create([
        'user_id'=>$request->userId,
        'user_email'=>"$request->email",
        'name'=>"$request->name",
        'address'=>"$request->address",
        'city'=>"$request->city",
        'state'=>"$request->state",
        'pincode'=>$request->pincode,
        'shipping_charges'=>$request->shippingCharges,
        'country'=>"$request->country",
        'mobile'=>$request->mobile,
        'order_status'=>$request->orderStatus,
        'payment_method'=>"$request->paymentMethod",
        'grand_total'=>$request->grandTotal,

      ]);
        foreach ($request->productId as $key=>$productId) {
            $product=Product::find($productId);
            $orderProduct=new OrderProduct;
            $orderProduct->order_id=$order->id;
            $orderProduct->user_id=$request->userId;
            $orderProduct->product_id=$product->id;
            $orderProduct->product_code=$product->product_code??"shdl";
            $orderProduct->product_size=$product->haveAttribute->size;
            $orderProduct->product_color=$product->haveAttribute->color;
            $orderProduct->product_price=$product->price;
            $orderProduct->product_qty=$request->productQty[$key];
            $orderProduct->save();
        }
        $payment = PaytmWallet::with('receive');
        $payment->prepare([
          'order' =>$order->id,
          'user' => $order->user_id,
          'mobile_number' => $order->mobile,
          'email' => $order->user_email,
          'amount' => $order->grand_total,
          'callback_url' =>env('APP_URL').'/payment/status'
        ]);
        return $payment->receive();
    }

    /**
     * Obtain the payment information.
     *
     * @return Object
     */
    public function paymentCallback()
    {
        $transaction = PaytmWallet::with('receive');
        
        $response = $transaction->response(); // To get raw response as array
        //Check out response parameters sent by paytm here -> http://paywithpaytm.com/developer/paytm_api_doc?target=interpreting-response-sent-by-paytm
        
        if($transaction->isSuccessful()){
          //Transaction Successful
        }else if($transaction->isFailed()){
          //Transaction Failed
        }else if($transaction->isOpen()){
          //Transaction Open/Processing
        }
        $transaction->getResponseMessage(); //Get Response Message If Available
        //get important parameters via public methods
        $transaction->getOrderId(); // Get order id
        $transaction->getTransactionId(); // Get transaction id
    }    

    /**
    * Obtain the transaction status/information.
    *
    * @return Object
    */
    public function statusCheck(){
        $status = PaytmWallet::with('status');
        $status->prepare(['order' =>123321 ]);
        $status->check();
        
        $response = $status->response(); // To get raw response as array
        //Check out response parameters sent by paytm here -> http://paywithpaytm.com/developer/paytm_api_doc?target=txn-status-api-description
        
        if($status->isSuccessful()){
          //Transaction Successful
        }else if($status->isFailed()){
          //Transaction Failed
        }else if($status->isOpen()){
          //Transaction Open/Processing
        }
        $status->getResponseMessage(); //Get Response Message If Available
        //get important parameters via public methods
        $status->getOrderId(); // Get order id
        $status->getTransactionId(); // Get transaction id
    }

    /**
    * Initiate refund.
    *
    * @return Object
    */
    public function refund(){
        $refund = PaytmWallet::with('refund');
        $refund->prepare([
            'order' =>123321,
            'reference' => "refund-order-4", // provide refund reference for your future reference (should be unique for each order)
            'amount' => 300, // refund amount 
            'transaction' => 312 // provide paytm transaction id referring to this order 
        ]);
        $refund->initiate();
        $response = $refund->response(); // To get raw response as array
        
        if($refund->isSuccessful()){
          //Refund Successful
        }else if($refund->isFailed()){
          //Refund Failed
        }else if($refund->isOpen()){
          //Refund Open/Processing
        }else if($refund->isPending()){
          //Refund Pending
        }
    }

    /**
    * Initiate refund.
    *
    * @return Object
    */
    public function refundStatus(){
        $refundStatus = PaytmWallet::with('refund_status');
        $refundStatus->prepare([
            'order' =>123321,
            'reference' => "refund-order-4", // provide reference number (the same which you have entered for initiating refund)
        ]);
        $refundStatus->check();
        
        $response = $refundStatus->response(); // To get raw response as array
        
        if($refundStatus->isSuccessful()){
          //Refund Successful
        }else if($refundStatus->isFailed()){
          //Refund Failed
        }else if($refundStatus->isOpen()){
          //Refund Open/Processing
        }else if($refundStatus->isPending()){
          //Refund Pending
        }
    }

}
