<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DeliveryBoy;
use App\Traits\SendInapp;
use App\Traits\SendMail;
use App\Traits\SendSms;
use DB;
use Session;
use Auth;

class OrderController extends Controller
{

    use SendMail;
    use SendSms;
    use SendInapp;
    public function assignOrderToDeliveryBoy(Request $request)
    {


        $cart_id = $request->cart_id;
        $gt_orders = DB::table('orders')
            ->join('address', 'orders.address_id', '=', 'address.address_id')
            ->select('address.lat', 'address.lng', 'orders.user_id')
            ->where('orders.cart_id', $cart_id)
            ->first();

        $gt_orders2 = DB::table('orders')
            ->where('cart_id', $cart_id)
            ->first();
        $store_id = $request->store_id;
        $store = DB::table('store')
            ->where('id', $store_id)
            ->first();
        $userssss = DB::table('users')
            ->where('id', $gt_orders2->user_id)
            ->first();

        $user_phone = $userssss->user_phone;
        // $deliveryBoy = DB::table('delivery_boy')
        // ->join('store_delivery_boy', 'delivery_boy.dboy_id', '=', 'store_delivery_boy.ad_dboy_id')
        // ->select("delivery_boy.dboy_id", DB::raw("6371 * acos(cos(radians(" . $gt_orders->lat . "))
        //         * cos(radians(delivery_boy.lat))
        //         * cos(radians(delivery_boy.lng) - radians(" . $gt_orders->lng . "))
        //         + sin(radians(" . $gt_orders->lat . "))
        //         * sin(radians(delivery_boy.lat))) AS distance"))
        // ->groupBy("delivery_boy.boy_name", "delivery_boy.dboy_id", "delivery_boy.lat", "delivery_boy.lng", "delivery_boy.boy_city")
        // ->where('store_delivery_boy.store_id', $store_id)
        //     ->where('delivery_boy.status', '1')
        //     ->orderBy('distance')
        //     ->first();

        $deliveryBoy = DeliveryBoy::find($request->delivery_boy_id);

        if ($deliveryBoy) {
            $curr = DB::table('currency')
                ->first();

            $store = DB::table('store')
                ->where('id', $store_id)
                ->first();

            $getDevice = DB::table('delivery_boy')
                ->where('dboy_id', $deliveryBoy->dboy_id)
                ->select('device_id', 'boy_name', 'dboy_id')
                ->first();
            $getDDevice = $getDevice;

            $orr = DB::table('orders')
                ->where('cart_id', $cart_id)
                ->first();

            $v = DB::table('store_orders')
                ->where('order_cart_id', $cart_id)
                ->get();
            foreach ($v as $vs) {
                $qt = $vs->qty;
                $pr = DB::table('store_products')
                    ->join('product_varient', 'store_products.varient_id', '=', 'product_varient.varient_id')
                    ->join('product', 'product_varient.product_id', '=', 'product.product_id')
                    ->where('store_products.varient_id', $vs->varient_id)
                    ->where('store_products.store_id', $store_id)
                    ->first();
                $stoc = DB::table('store_products')
                    ->where('varient_id', $vs->varient_id)
                    ->where('store_id', $store_id)
                    ->first();
                if ($stoc) {
                    $newquantity = $stoc->quantity - $qt;
                }
            }
            $orderconfirm = DB::table('orders')
                ->where('cart_id', $cart_id)
                ->update([
                    'order_status' => 'Confirmed',
                    'dboy_id' => $deliveryBoy->dboy_id
                ]);


            if ($orderconfirm) {
                // $sms = DB::table('notificationby')
                //     ->select('sms', 'app')
                //     ->where('user_id', $orr->user_id)
                //     ->first();
                // $sms_status = $sms->sms;
                // if ($sms_status == 1) {
                //     $codorderplaced = $this->orderconfirmedsms($cart_id, $user_phone, $orr);
                // }

                // if ($sms->app == 1) {

                //     $confirmedinappuser = $this->orderconfirmedinapp($cart_id, $user_phone, $orr);
                // }

                $confirmedinappuser = $this->orderconfirmedinapp($cart_id, $user_phone, $orr);

                $confirmedinappdriver = $this->orderconfirmedinappdriver($getDDevice, $cart_id, $user_phone, $orr, $curr);

                // $message = array('status' => '1', 'message' => 'order is confirmed and Assigned to ' . $getDevice->boy_name);
                // return $message;
                return redirect()->back()->withSuccess('order is confirmed and Assigned to ' . $getDevice->boy_name);
            } else {
                // $message = array('status' => '0', 'message' => 'Already Assigned to ' . $getDevice->boy_name);
                // return $message;
                return redirect()->back()->withSuccess('Already Assigned to ' . $getDevice->boy_name);
            }
        } else {
            // $message = array('status' => '1', 'message' => 'no delivery boy is online/available');
            // return $message;
            return redirect()->back()->withSuccess('no delivery boy is online/available');
        }
    }
    public function cancel_products(Request $request)
    {
        $id = $request->store_order_id;
        $cart = DB::table('store_orders')
            ->select('order_cart_id', 'varient_id', 'qty')
            ->where('store_order_id', $id)
            ->first();

        $curr = DB::table('currency')
            ->first();
        $cart_id = $cart->order_cart_id;
        $st = DB::table('orders')
            ->where('cart_id', $cart_id)
            ->first();
        $store_id = $st->store_id;
        $var = DB::table('store_orders')
            ->where('order_cart_id', $cart_id)
            ->get();
        $price2 = 0;

        foreach ($var as $h) {
            $varient_id = $h->varient_id;
            $p = DB::table('store_products')
                ->join('product_varient', 'store_products.varient_id', '=', 'product_varient.varient_id')
                ->join('product', 'product_varient.product_id', '=', 'product.product_id')
                ->where('store_products.varient_id', $varient_id)
                ->where('store_products.store_id', $store_id)
                ->first();
            $price = $p->price;
            $mrpprice = $p->mrp;
            $order_qty = $h->qty;
            $price2 += $price * $order_qty;
            $unit[] = $p->unit;
            $qty[] = $p->quantity;
            $p_name[] = $p->product_name . "(" . $p->quantity . $p->unit . ")*" . $order_qty;
            $prod_name = implode(',', $p_name);
        }
        $ordr = DB::table('orders')
            ->where('cart_id', $cart->order_cart_id)
            ->first();
        $v = DB::table('store_products')
            ->join('product_varient', 'store_products.varient_id', '=', 'product_varient.varient_id')
            ->join('product', 'product_varient.product_id', '=', 'product.product_id')
            ->where('store_products.varient_id', $cart->varient_id)
            ->where('store_products.store_id', $store_id)
            ->first();

        $v_price = $v->price * $cart->qty;
        $ordr = DB::table('orders')
            ->where('cart_id', $cart->order_cart_id)
            ->first();
        $user_id = $ordr->user_id;
        $tot_price = $ordr->total_price - $v_price;
        $rem_price = $ordr->rem_price - $v_price;
        if ($rem_price > 0) {
            $rem_price2 = $ordr->rem_price - $v_price;
        } else {
            $rem_price2 = 0;
        }
        if ($tot_price > 0) {
            $tot_price2 = $ordr->total_price - $v_price;
        } else {
            $tot_price2 = 0;
        }
        $userwa = DB::table('users')
            ->where('id', $user_id)
            ->first();
        if ($ordr->payment_method == 'COD' || $ordr->payment_method == 'Cod' || $ordr->payment_method == 'cod') {
            $newbal = $userwa->wallet;
        } else {
            $newbal = $userwa->wallet + $v_price;
        }
        $orders = DB::table('store_orders')
            ->where('order_cart_id', $cart->order_cart_id)
            ->where('store_approval', 1)
            ->get();

        if (count($orders) == 1 || count($orders) == 0) {
            $email = Session::get('bamaStore');
            $store = DB::table('store')
                ->where('email', $email)
                ->first();


            $cancel = 2;
            $carte = DB::table('store_orders')
                ->where('order_cart_id', $cart->order_cart_id)
                ->where('store_approval', 0)
                ->get();

            foreach ($carte as $carts) {
                $v1 = DB::table('store_products')
                    ->join('product_varient', 'store_products.varient_id', '=', 'product_varient.varient_id')
                    ->join('product', 'product_varient.product_id', '=', 'product.product_id')
                    ->where('store_products.varient_id', $carts->varient_id)
                    ->where('store_products.store_id', $store_id)
                    ->first();

                $v_price1 = $v1->price * $carts->qty;
                $ordr1 = DB::table('orders')
                    ->where('cart_id', $carts->order_cart_id)
                    ->first();
                $user_id1 = $ordr1->user_id;
                if ($ordr->payment_method != 'COD' || $ordr->payment_method != 'Cod' || $ordr->payment_method != 'cod') {
                    $userwa1 = DB::table('users')
                        ->where('id', $user_id1)
                        ->first();
                    $newbal1 = $userwa1->wallet - $v_price1;
                    $userwalletupdate = DB::table('users')
                        ->where('id', $user_id1)
                        ->update(['wallet' => $newbal1]);
                }
            }
            $ordupdate = DB::table('orders')
                ->where('cart_id', $cart->order_cart_id)
                ->update([
                    'store_id' => 0,
                    'cancel_by_store' => $cancel
                ]);


            $cart_update = DB::table('store_orders')
                ->where('order_cart_id', $cart->order_cart_id)
                ->update(['store_approval' => 1]);
            return redirect()->back()->withSuccess(trans('keywords.Order cancelled successfully'));
        } else {
            $cancel_product = DB::table('store_orders')
                ->where('store_order_id', $id)
                ->update(['store_approval' => 0]);
            if ($ordr->payment_method != 'COD' || $ordr->payment_method != 'Cod' || $ordr->payment_method != 'cod') {
                $userwallet = DB::table('users')
                    ->where('id', $user_id)
                    ->update(['wallet' => $newbal]);
                $ordr = DB::table('orders')
                    ->where('cart_id', $cart->order_cart_id)
                    ->update([
                        'total_price' => $tot_price2,
                        'rem_price' => $rem_price2
                    ]);
            }
            return redirect()->back()->withSuccess(trans('keywords.Product removed successfully'));
        }
    }

    public function reject_order(Request $request)
    {
        $cart_id = $request->cart_id;
        $ordr = DB::table('orders')
            ->where('cart_id', $cart_id)
            ->first();
        $user_id1 = $ordr->user_id;
        $orders = DB::table('store_orders')
            ->where('order_cart_id', $cart_id)
            ->where('store_approval', 1)
            ->get();
        $curr = DB::table('currency')
            ->first();
        $email = Auth::guard('store')->user()->email;
        $store = DB::table('store')
            ->where('email', $email)
            ->first();

        $v_price1 = 0;
        $cartss = DB::table('store_orders')
            ->where('order_cart_id', $cart_id)
            ->where('store_approval', 0)
            ->get();

        if (count($cartss) > 0) {
            foreach ($cartss as $carts) {
                $v1 = DB::table('store_orders')
                    ->where('store_order_id', $carts->store_order_id)
                    ->first();

                $v_price1 += $v1->price * $v1->qty;
            }
            $user_id1 = $ordr->user_id;
            $userwa1 = DB::table('users')
                ->where('id', $user_id1)
                ->first();
            if ($ordr->payment_method == 'COD' || $ordr->payment_method == 'Cod' || $ordr->payment_method == 'cod') {
                $newbal1 = $userwa1->wallet;
            } else {
                $newbal1 = $userwa1->wallet - $v_price1;
            }
            $userwalletupdate = DB::table('users')
                ->where('id', $user_id1)
                ->update(['wallet' => $newbal1]);
        }


        $var = DB::table('store_orders')
            ->where('order_cart_id', $cart_id)
            ->where('store_approval', 1)
            ->get();
        $price2 = 0;
        foreach ($var as $h) {
            $varient_id = $h->varient_id;
            $p = DB::table('store_products')
                ->join('product_varient', 'store_products.varient_id', '=', 'product_varient.varient_id')
                ->join('product', 'product_varient.product_id', '=', 'product.product_id')
                ->where('product_varient.varient_id', $varient_id)
                ->where('store_products.store_id', $store->id)
                ->first();
            $price = $p->price;
            $order_qty = $h->qty;
            $price2 += $price * $order_qty;
            $unit[] = $p->unit;
            $qty[] = $p->quantity;
            $p_name[] = $p->product_name . "(" . $p->quantity . $p->unit . ")*" . $order_qty;
            $prod_name = implode(',', $p_name);
        }

        $cancel = 2;
        $ordupdate = DB::table('orders')
            ->where('cart_id', $cart_id)
            ->update([
                'store_id' => 0,
                'cancel_by_store' => $cancel,
                'order_status' => 'Pending'
            ]);


        $cart_update = DB::table('store_orders')
            ->where('order_cart_id', $cart_id)
            ->update(['store_approval' => 1]);

        return redirect()->back()->withSuccess(trans('keywords.Order Rejected successfully'));
    }
}
