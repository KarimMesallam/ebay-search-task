<?php

namespace App\Http\Controllers;

use App\PastSearch;
use Validator;
use Illuminate\Http\Request;
use Kozz\Laravel\Facades\Guzzle as Guzzle;

class SearcheBayController extends Controller
{
    public function index()
    {
        $pastSearches = PastSearch::all();
        return view('search')->with($pastSearches);
    }

    public function search(Request $request)
    {
        $inputs = $request->all();

        $validator = Validator::make($inputs, [
            'item_id' => 'integer|required'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return view('search')->with($errors);
        }
        $itemId = $request->item_id;

        //Get the response using the API
        //Add the selected fields to the db
        //return the past searches

        //$response = Guzzle::get('http://open.api.ebay.com/shopping?callname=GetSingleItem&responseencoding=JSON&appid=KBCwareT-fa69-4a39-a049-60ca79a5fff2&siteid=0&version=967&ItemID=152778467676&IncludeSelector=Details');
        //$pastSearches = PastSearch::where('item_id', $input->item_id);
    }
}
