<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    /**
     *  JournalController CRUD Handled by this controller.
     */
    public function index()
    {
        $journals=Journal::where('user_id',auth()->user()->id)->get();
        return view('user.journal.journal',compact('journals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.journal.addjournal');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "title" => "required",
            "content" => "required"
        ]);

        $data['user_id'] = auth()->user()->id;
        Journal::create($data);

        return redirect('/journal')->with('success','Journal created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Journal $journal)
    {
        // Don't show if they didnt own the journal
    
        $journal=Journal::find($journal->id);
        $owner=$journal->user->id;
        
        if ($owner != auth()->user()->id) {
            return redirect("/journal")->with('error','Error: You dont have access to the Journal.');
        }

        return view('user.journal.view',compact('journal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Journal $journal)
    {
        $validatedData = $request->validate([
            "title" => "required",
            "content" => "required"
        ]);
    
        $journal->title = $validatedData['title'];
        $journal->content = $validatedData['content'];
        $journal->save();

        return redirect('/journal')->with('success','Journal updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Journal $journal)
    {
        $journal->delete(); // Delete journal by object passed
        return redirect('/journal')->with('success', 'Journal deleted successfully');
    }
}
