<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Member;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'members' => Member::all()
        ];
        return view('admin.members.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $request -> validate([
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'mail' => 'nullable|email:rfc,dns|unique:members|max:255',
            'role' => 'max:255',
            'img' => 'nullable|image|max:512'
        ]);

        // save all request info
        $member_info = $request->all();

        // new istance
        $new_member = new Member();

        // img
        if (array_key_exists('img', $member_info)) {
            $img_path = Storage::put('member-img', $member_info['img']);
            $member_info['img'] = $img_path;
        }

        // visible
        if (array_key_exists('visible', $member_info)) {
            $member_info['visible'] = 1;
        }

        $new_member->fill($member_info);
        $new_member->save();

        return redirect()->route('admin.member.index')->withSuccess('Salvataggio avvenuto correttamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        if ($member)
        {
            $data = [
                'member' => $member
            ];
            return view('admin.members.show', $data);
        }
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        if ($member) {
            $data = [
                'member' => $member
            ];
            return view('admin.members.edit', $data);
        }
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        // validation
        $request -> validate([
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            // 'mail' => 'nullable|email:rfc,dns|unique:members|max:255',
            'role' => 'max:255',
            'img' => 'nullable|image|max:512'
        ]);

        // save all request info
        $member_info = $request->all();

        // img
        if (array_key_exists('img', $member_info)) {
            $img_path = Storage::put('member-img', $member_info['img']);
            $member_info['img'] = $img_path;
        }

        // visible
        if (array_key_exists('visible', $member_info)) {
            $member_info['visible'] = 1;
        }

        $member->update($member_info);

        return redirect()->route('admin.member.show', ['member' => $member->id])->withSuccess('Salvataggio avvenuto correttamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member->delete();

        return redirect()->route('admin.member.index');
    }
}
