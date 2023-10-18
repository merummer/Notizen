<?php

namespace Database\Seeders;

use App\Models\Note;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        $note1 = new Note();
        $note1->title = 'Demo-Notiz1';
        $note1->content = 'Lorem ipsum';
        $note1->favorite = true;
        $note1->save();

        $note2 = new Note();
        $note2->title = 'Demo-Notiz2';
        $note2->content = 'Lorem ipsum dolor';
        $note2->favorite = true;
        $note2->save();
        */

        Note::factory(15)->create();
    }
}
