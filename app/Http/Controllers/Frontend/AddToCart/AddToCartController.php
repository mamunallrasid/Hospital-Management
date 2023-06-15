<?php
namespace App\Http\Controllers\Webpage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\ShopType;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\ProductDetails;
use App\Models\ProductImages;
use Illuminate\Support\Facades\Cookie;
class AddToCartController extends Controller
{

    public function addToCart(Request $request)
    {

        $prod_id = $request->input('product_id');
        $quantity = $request->input('quantity');

        if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
        }
        else
        {
            $cart_data = array();
        }

        $item_id_list = array_column($cart_data, 'item_id');
        $prod_id_is_there = $prod_id;

        if(in_array($prod_id_is_there, $item_id_list))
        {
            foreach($cart_data as $keys => $values)
            {
                if($cart_data[$keys]["item_id"] == $prod_id)
                {
                    $cart_data[$keys]["item_quantity"] = $request->input('quantity');
                    $item_data = json_encode($cart_data);
                    $minutes = 60;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    return response()->json(['msg'=>'"'.$cart_data[$keys]["item_name"].'" Already Added to Cart','status'=>false]);
                }
            }
        }
        else
        {
            $products = ProductDetails::with('product')->with('productImagesOne')->find($prod_id);
            $prod_name = $products->product->product_name;
            $prod_image = $products->productImagesOne->images;
            $priceval = $products->price;

            if($products)
            {
                $item_array = array(
                    'item_id' => $prod_id,
                    'item_name' => $prod_name,
                    'item_quantity' => $quantity,
                    'item_price' => $priceval,
                    'item_image' => $prod_image
                );

                $cart_data[] = $item_array;

                $item_data = json_encode($cart_data);
                $minutes = 60;
                Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                return response()->json(['msg'=>'"'.$prod_name.'" Added to Cart','status'=>true]);
            }
        }
    }

    public function cartLoad()
    {
        $total_price = 0;
        if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
            $totalcart = count($cart_data);
            $product = "";       
            foreach($cart_data as $key => $item)
            {
                $product .= '<li class="minicart-product">
                            <a class="product-item_remove delete_cart_data" data-product_id="'.$item['item_id'].'" href="javascript:void(0)"><i
                                    class="ion-android-close"></i></a>
                            <div class="product-item_img">
                                <img src="'.url('product_images/'.$item['item_image'].'').'" alt="'.$item['item_name'].'">
                            </div>
                            <div class="product-item_content">
                                <a class="product-item_title" href="shop-left-sidebar.html">'.$item['item_name'].'</a>
                                <span class="product-item_quantity">'.$item['item_quantity'].' x ₹&nbsp;'.$item['item_price'].'</span>
                            </div>
                        </li>';
                $total_price +=$item['item_price'];
            }

            $cart =  self::cartLoadDisplay();

            echo json_encode(
                array(
                    'totalcart' => $totalcart,
                    'product'=>$product,
                    'total_price'=>"₹&nbsp;".number_format($total_price,2),
                    'total'=>$cart['total'],
                    'subtotal'=>$cart['subtotal'],
                    'cart'=>$cart['cart_item'],

                )
            ); die;
            return;
        }
        else
        {
            $totalcart = "0";
            $product = "";
            $cart =  self::cartLoadDisplay();
            echo json_encode(
                array(
                    'totalcart' => $totalcart,
                    'product'=>$product,
                    'total_price'=>"₹&nbsp;".number_format($total_price,2),
                    'total'=>$cart['total'],
                    'subtotal'=>$cart['subtotal'],
                    'cart'=>$cart['cart_item'],
                )
            ); die;
            return;
        }
    }


    public function deleteFromCart(Request $request)
    {
        $prod_id = $request->input('product_id');

        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);

        $item_id_list = array_column($cart_data, 'item_id');
        $prod_id_is_there = $prod_id;

        if(in_array($prod_id_is_there, $item_id_list))
        {
            foreach($cart_data as $keys => $values)
            {
                if($cart_data[$keys]["item_id"] == $prod_id)
                {
                    unset($cart_data[$keys]);
                    $item_data = json_encode($cart_data);
                    $minutes = 60;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    return response()->json(['status'=>'Item Removed from Cart']);
                }
            }
        }
    }

    public function cartLoadDisplay()
    {
        $total_price = 0;
        if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
            $totalcart = count($cart_data);
            $product = ""; 
            if(count($cart_data)>0) {
                foreach($cart_data as $key => $data)
                {
                    $product .= '<tr>
                                                        
                    <td class="hiraola-product-thumbnail">
                        <a href="javascript:void(0)">
                            <img src="'.url('product_images/'.$data['item_image'].'').'" width="160px" alt="'.$data['item_name'].'">
                        </a>
                    </td>
                    <td class="hiraola-product-name"><a href="javascript:void(0)">'.$data['item_name'].'</a></td>
                    <td class="hiraola-product-price"><span class="amount">'.number_format($data['item_price'], 2).'</span></td>
                    <td class="quantity">
                        <label>Quantity</label>
                        <div class="cart-plus-minus">
                            <input class="cart-plus-minus-box" value="1" type="text">
                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                        </div>
                    </td>
                    <td class="product-subtotal"><span class="amount">'.number_format($data['item_quantity'] * $data['item_price'], 2).'</span></td>
                    <td class="hiraola-product-remove">
                        <a href="javascript:void(0)" class="delete_cart_data" data-product_id="'.$data['item_id'].'">
                            <i class="fa fa-trash" title="Remove"></i>
                        </a>
                    </td>
                    </tr>';
                    $total_price +=$data['item_price'];
                }
    
                $res = array(
                    'subtotal' =>"₹&nbsp;".number_format($total_price,2),
                    'total' =>"₹&nbsp;".number_format(round($total_price),2),
                    'cart_item'=>$product
                );
                return $res;
            } 
            else{
                $product = '
                <tr>
                    <td colspan="6">Your cart is currently empty.<br>
                    <div class="coupon2">
                        <a href="/" class="btn btn-dark">Continue Shopping</a>
                    </div>
                    </td>
                </tr>
                ';
                $res = array(
                    'subtotal' =>"₹&nbsp;".number_format($total_price,2),
                    'total' =>"₹&nbsp;".number_format(round($total_price),2),
                    'cart_item'=>$product
                );
                return $res;
                }        
            
        }
        else
        {
            $product = '
                <tr>
                    <td colspan="6">Your cart is currently empty.<br>
                    <div class="coupon2">
                        <a href="/" class="btn btn-dark">Continue Shopping</a>
                    </div>
                    </td>
                </tr>
            ';
            $res = array(
                'subtotal' =>"₹&nbsp;".number_format($total_price,2),
                'total' =>"₹&nbsp;".number_format(round($total_price),2),
                'cart_item'=>$product
            );
            return $res;
        }
    }
    

}