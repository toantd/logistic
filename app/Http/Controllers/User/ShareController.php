<?php
namespace App\Http\Controllers\User;
/**
 * Created by PhpStorm.
 * User: toantran
 * Date: 4/17/2015
 * Time: 2:44 PM
 */

use App\Http\Controllers\Controller;

class ShareController extends Controller{
    public function getIndex(){
        $title = "All post";
        return view('site.share.index',compact("title"));
    }
}