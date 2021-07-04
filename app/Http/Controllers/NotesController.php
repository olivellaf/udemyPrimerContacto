<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotesController extends Controller
{

    public function getIndex() {
        // Get all the notes
        $notes = DB::table('notes')->orderBy('id', 'desc')->get();

        // This should be on the VIEW. Just trying here.
/*         foreach($notes as $note) {
            echo $note->title . '<br/>';
        } */

        return view('notes.index', ['notes' => $notes]);
    }

    public function getNoteFromID(int $id) {

        // Get a specific note
        // We use "select" for only get information from selected columns
        $note = DB::table('notes')->select('id', 'title', 'description')->where('id', $id)->first();

        if(empty($note)) {

            return redirect()->action([NotesController::class, 'getIndex']);

        }

        return view('notes.note', ['note' => $note] );
    }

    public function postNote(Request $request) {
        $note = DB::table('notes')->insert([
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ]);

        return redirect()->action([NotesController::class, 'getIndex']);
    }

    public function saveNote() {
        return view('notes.saveNote');
    }

}
