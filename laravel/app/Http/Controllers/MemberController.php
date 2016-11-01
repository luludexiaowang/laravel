<?php
namespace App\Http\Controllers;

use App\Member;

class MemberController extends Controller
{
    public function info($id)
    {
//        return 'member-info-id-' . $id;
//        return route('memberinfo');

//        return view('member-info');

        return Member::getMember();

//        return view('member/info',[
//            'name'=>'kingj',
//            'age'=>'18'
//        ]);
    }
}