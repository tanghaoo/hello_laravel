<?php
/**
 * Created by PhpStorm.
 * User: 05
 * Date: 2017/5/23
 * Time: 16:30
 */

namespace App\Http\Controllers;


class IndexController extends Controller
{
  public function index(){
    return view('hello');
  }
}