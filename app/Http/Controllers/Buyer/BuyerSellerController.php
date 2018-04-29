<?php

namespace App\Http\Controllers\Buyer;

use App\Buyer;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class BuyerSellerController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Buyer $buyer)
    {
        /**
         * Very comprehensive relationship query have to perform
         * Buyer have a collection of transactions
         * and each transaction has one product
         * and each products belong to one seller
         * we have extract all seller from the transactions collection
         */

        $sellers = $buyer->transactions()->with('product.seller')
                        ->get()
                        ->pluck('product.seller')
                        ->unique('id') // in this section there are some empty object
                        ->values(); // remove the empty and return the value

        return $this->showAll($sellers);
    }


}
