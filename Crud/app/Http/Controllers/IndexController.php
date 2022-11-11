<?php

namespace App\Http\Controllers;

use App\Models\PersonModel;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function Index(){

        $personData = PersonModel::all();
        return view('index', ['personData' => $personData]);
    }

    function addNew(){
        return view('addNew');
    }

    function addNewData(Request $request){
        $firstName = $request->first_name;
        $lastName = $request->last_name;
        $user = $request->user;
        $result = PersonModel::insert([
            'first_name' => $firstName,
            'last_name' => $lastName,
            'user' => $user
        ]);
        return $result;
    }

    function showUpdateDate($id){
        $showUpdateData = PersonModel::find($id);
        return view('update', ['updateShowingData' => $showUpdateData]);
    }
    function UpdateDate(Request $request){
        $data = PersonModel::find($request->id);
        $data->first_name = $request->first_nme;
        $data->last_name = $request->last_nme;
        $data->user = $request->use;
        $data->save();
    }

    function DeleteData($id){
        $deleteData = PersonModel::find($id);
        $deleteData->delete();
    }
}
