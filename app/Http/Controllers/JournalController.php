<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journal;

class JournalController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(Journal::all());
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'creator' => 'required',
            'subject' => 'required',
            'publisher' => 'required',
            'contributor' => 'required',
            'date' => 'required',
            'identifier' => 'required',
            'language' => 'required',
        ]);

        $journal = Journal::create($request->all());

        return response()->json($journal, 201);
    }

    public function show($id)
    {
        return response()->json(Journal::find($id));
    }

    public function update(Request $request, $id)
    {
        $journal = Journal::findOrFail($id);

        $journal->update($request->all());

        return response()->json($journal, 200);
    }

    public function destroy($id)
    {
        Journal::findOrFail($id)->delete();
        
        return response()->json(null, 204);
    }
}
