<?php
namespace Juhedao\PackageName\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Request, Response, Redirect, View, Input, DB, Config, Cache, Session, Hash, File, Validator, Log, Auth;
use Juhedao\PackageName\Models;

class SomeController extends BaseController {

    function __construct() {

    }

    public function index(){
        //return View::make('juhedao-package-name-views::index');
    }

}