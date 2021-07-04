<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotesController extends Controller
{

    public function getIndex() {
        // Get all the notes
        $notes = DB::table('notes')->get();

        // This should be on the VIEW. Just trying here.
/*         foreach($notes as $note) {
            echo $note->title . '<br/>';
        } */

        return view('notes.index', ['notes' => $notes]);
    }

}
