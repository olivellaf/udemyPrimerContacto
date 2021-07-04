<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FruitsController extends Controller
{
    //

    // Action returns a view
    public function getIndex() {
        return view('fruits.index')
                        ->with('fruits', array('plátano', 'sandía', 'melón', 'manzana', 'fresa', 'piña'));
    }

    public function getOranges() {
        return  'Action from the oranges';
    }

    public function anyPears() {
        return  'Action from the pears';
    }

    public function getFormData(Request $request) {
        $data = $request;

        return 'The name of the fruit is: ' . $request->input('fruit_name');
    }

}
