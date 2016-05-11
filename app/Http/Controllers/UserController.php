<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\UserRegisterValidation;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Session;

class UserController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        return view('index');
    }

    public function store(UserRegisterValidation $request){
    	return $request->file('gallery');
    	exit;
    }

    public function userjson(){
		return view('user.json');
    }
}