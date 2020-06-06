<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMembersRequest;
use DB;
use App\Models\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = DB::table('members')
            ->join('users', 'users.id', '=', 'members.user_id')
            ->join('categories', 'categories.id', '=', 'members.category_id')
            ->select('members.*','users.name as user_name', 'users.email_verified_at as verified' ,'categories.name as category_name')
            ->get();
        /*return $members;
        dd();*/
        return view('admin.members.index')->with(['members' => $members]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('categories')->select('id','name')->get();
        $comptes = DB::table('users')->select('id','name')->get();
        return view('admin.members.create')->with(['categories' => $categories, 'comptes' => $comptes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMembersRequest $request)
    {
        auth()->user()->members()->create($request->all());
        return redirect()->route('admin.members.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        /*$member = Member::with('user')->get()->first();*/
        /*return $member;
        dd();*/
        return view('admin.members.show')->with(['member' => $member]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        $categories = DB::table('categories')->select('id','name')->get();
        $comptes = DB::table('users')->select('id','name')->get();
        return view('admin.members.edit')->with(['member' => $member,'categories' => $categories, 'comptes' => $comptes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $request->validate([
            'category_id' => 'required|exists:App\Models\Category,id',
            'user_id' => 'exists:App\Models\User,id',
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'gender' => 'required',
            'phoneNumber' => 'required|numeric|min:14',
            'city' => 'required|string',
            'mail' => 'required|email:rfc,dns',
            'address' => 'required|string|max:500',
        ]);
        $member->update([
            'category_id' => $request->category_id,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'gender' => $request->gender,
            'phoneNumber' => $request->phoneNumber,
            'CIN' => $request->CIN,
            'city' => $request->city,
            'mail' => $request->mail,
            'address' => $request->address,
        ]);
        return redirect()->route('admin.members.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()->route('admin.members.index');

    }
}
