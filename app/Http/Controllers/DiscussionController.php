<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DiscussionController extends Controller
{
    public function byUser($input) {
        if (empty($input) || !is_int($input)) {
            $data = \App\Discussion::all()->sortByDesc('created_at');
        } else {
            $data = \App\User::find($input)->discussions()->sortByDesc('created_at');
        }
        //$data = \App\Discussion::all()->first();
        //var_dump($data);
        return view('discussions', $data);
    }
}
