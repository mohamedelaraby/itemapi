<?php

namespace App\Http\Controllers;

use App\item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class itemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response As JSON format
     */
    public function index()
    {

        // Get all items in the database
        $items = Item::all();

        // Return Response
        return response()->json($items);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Setup validator
        $validator = Validator::make($request->all(),[
           'text' => 'required',
            'body' => 'required',
        ]);

        // Test validator
        if($validator->fails()){
            $response = array('response' => $validator->messages(), 'success' => false);
            return $response;
        } else {
            // creeat new item
            $item = new Item;

            $item->text= $request->input('text');
            $item->body=$request->input('body');
            $item->save();

            // Return a response
            return response()->json($item);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get one item
        $item = Item::find($id);
        return response()->json($item);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Create a validator
        $validator = Validator::make($request->all(),[
           'text' => 'required',
           'body' => 'required',
        ]);

        // Check for the validator
        if($validator->fails()){
            $response = ['response' => $validator->messages, 'success' => false];
            return $response;
        } else {
            // Find an item
            $item = Item::find($id);

            $item->text = $request->input('text');
            $item->body = $request->input('body');
            $item->save();

            // Return response
            return response()->json($item);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find an item
        $item = Item::find($id);

        // Delete an item
        $item->delete();

        // Return a response for successful delete
        $response = ['response' => 'Item deleted', 'success' => true];
        return $response;
    }
}
