<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopifyController extends Controller
{
    function getAllProducts() {
        $shop = Auth::user();

        // GraphQL queries
        // $request = $shop->api()->graph('
        //     {
        //         products(first: 250) {
        //             edges {
        //                 node {
        //                     title
        //                     handle
        //                     variants(first: 1) {
        //                         edges {
        //                             node {
        //                                 price
        //                             }
        //                         }
        //                     }
        //                 }
        //              }
        //         }
        //     }
        // ');

        $request = $shop->api()->rest('GET', '/admin/products.json');
        $products = $request['body']['products'];

        return view('products', compact('products'));
    }
}
