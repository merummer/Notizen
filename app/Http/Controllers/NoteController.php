<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NoteController extends Controller
{
    public function index(): View
    {
        $notes = Note::simplePaginate(5); // Teilt Notes in seiten aus

        return view('notes.index', [
            'title' => 'Notes',
            'notes' => $notes
            ]);
    }
}
