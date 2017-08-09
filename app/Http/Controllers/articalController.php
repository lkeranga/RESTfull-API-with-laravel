<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\artical;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Response;

class articalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        //if author id is null
      if ($request->id == null) {
        return Response::json([
         'query_status' => 'error', 
         'code' => 400,
         'message' => 'missing argument',
         'data' => null
         ], 400);
      }

//get data from artical
      $artical =  artical::where('auth_id',$request->id)
      ->get();
//is artical data is null
      if ($artical->count() == 0) {

       return Response::json([
         'query_status' => 'success', 
         'code' => 404,
         'message' => 'records not found',
         'data' => null
         ], 404);
     }

//is artical data not null
     return Response::json([ 
       'query_status' => 'success', 
       'code' => 200,
       'message' => '',
       'data' => $artical
       ], 200);
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
    
      $record = artical::create($request->all());

      if($record){
       return Response::json([ 
         'query_status' => 'success', 
         'code' => 200,
         'message' => '',
         'data' => 'data added successfully'
         ], 200);
     }else{
      return Response::json([
       'query_status' => 'error', 
       'code' => 400,
       'message' => 'missing argument',
       'data' => 'error'
       ], 400);
    }
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {


 //if artical id is null
      if ($id == null) {
        return Response::json([
         'query_status' => 'error', 
         'code' => 400,
         'message' => 'missing argument',
         'data' => null
         ], 400);
      }

//get data from artical
      $artical =  artical::where('id',$id)
      ->get();

//is artical data is null
      if ($artical->count() == 0) {

       return Response::json([
         'query_status' => 'success', 
         'code' => 404,
         'message' => 'records not found',
         'data' => null
         ], 404);
     }

//is artical data not null
     return Response::json([ 
       'query_status' => 'success', 
       'code' => 200,
       'message' => '',
       'data' => $artical
       ], 200);

   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
 //if artical id is null
      if ($id == null) {
        return Response::json([
         'query_status' => 'error', 
         'code' => 400,
         'message' => 'missing argument',
         'data' => null
         ], 400);
      }

//get data from artical
      $artical =  artical::where('id',$id)
      ->get();

//is artical data is null
      if ($artical->count() == 0) {

       return Response::json([
         'query_status' => 'success', 
         'code' => 404,
         'message' => 'records not found',
         'data' => null
         ], 404);
     }

//is artical data not null
     return Response::json([ 
       'query_status' => 'success', 
       'code' => 200,
       'message' => '',
       'data' => $artical
       ], 200);
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {

 //if auth id is null
      if ($id == null) {
        return Response::json([
         'query_status' => 'error', 
         'code' => 400,
         'message' => 'missing argument',
         'data' => null
         ], 400);
      }

      $artical = artical::find($id);
      $result = $artical->update($request->all());

      if($result){
       return Response::json([ 
         'query_status' => 'success', 
         'code' => 200,
         'message' => '',
         'data' => 'data updated successfully'
         ], 200);
     }else{
      return Response::json([
       'query_status' => 'error', 
       'code' => 400,
       'message' => 'missing argument',
       'data' => 'error'
       ], 400);
    }
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
     $result =  artical::destroy($id);

     if($result){
       return Response::json([ 
         'query_status' => 'success', 
         'code' => 200,
         'message' => '',
         'data' => 'data deleted successfully'
         ], 200);
     }else{
      return Response::json([
       'query_status' => 'error', 
       'code' => 400,
       'message' => 'missing argument',
       'data' => 'error'
       ], 400);
    }

  }

}
