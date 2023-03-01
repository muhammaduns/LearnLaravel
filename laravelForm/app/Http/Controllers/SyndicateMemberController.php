<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SyndicateMember;
class SyndicateMemberController extends Controller
{
    //
    public function indexsm()
    {
        return view('syndicate-member-form');
    }

    public function storesm(Request $request)
    {
        $post = new SyndicateMember;
        $post->member_name = $request->member_name;
        $post->designation = $request->designation;
        $post->grade = $request->grade;
        $post->member_title = $request->member_title;
        $post->member_since = $request->member_since;
        $post->tenure_upto = $request->tenure_upto;
        $post->remarks= $request->remarks;
        
        $post->save();
        return redirect('syndicate-member-form')->with('status', 'Data of Syndicate Memebr inserted');
    }
}
