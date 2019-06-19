<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Member;
// use App\Book;



    class MembersController extends Controller
    {
        public function index() {
            $members = Member::all();
            return view('libadmin.members', compact('members'));
        }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
         return view('libadmin.createmember');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'voornaam'=>'required',
            'achternaam'=>'required',
            'woonplaats'=>'required',
            'abo_geldig_tot'=>['required', 'date'],
        ]);
        
        $member = new Member;

        $member->voornaam = $request->voornaam;
        $member->achternaam = $request->achternaam;
        $member->woonplaats = $request->woonplaats;
        $member->abo_geldig_tot = $request->abo_geldig_tot;

        $member->save();

        return redirect('\members');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        session(['loggedinUser' => $member->id]);
        return view('libmember.memberIndex', compact('member'));

    }

    /** 
     * Display all members to a member
     *
     * @return \Illuminate\Http\Response
     */

    public function memberLogin()
    {
        $members = Member::all();
        return view('libmember.login', compact('members'));
    }


    public function getLentBooks()
    {
        $id = session("loggedinUser");
        $member = Member::find($id);
        $lentBooks = $member->books;
        return view('libmember.lentbooks', compact('lentBooks'));
    }

     /** 
     * Display a member
     *
     * @return \Illuminate\Http\Response
     */

    // public function memberIndex(Member $member)
    // {
       
    //     return view('libmember.memberIndex', compact('member'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
