<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
        // create var store 
    private $store;

    // create constructor
    public function __construct(Store $store)
    {
        $this->store = $store;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // return with limit 10
        // return $this->store->paginate(10);
        
        // Simples return
        return $this->store->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //simples return of creation
        return $this->store->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        // full version of data
        //return $store->with('products')->first();

        // simple store data
        return $store;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        // return with all attributes
        $store->update($request->all()); // true or false

        return $store;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        // the return of delete data
        return $store->delete();
    }
}
