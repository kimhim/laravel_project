<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
<<<<<<< HEAD

class StaffController extends Controller
{
    public function stafflist(){
		return view('user.list');
	}
=======
use App\Http\Controllers\Controller;
use DB;

class StaffController extends Controller
{
	public function index(){
		$stafflist = DB::select(DB::raw('SELECT s.lname,s.fname,s.email,s.username,s.phone,t.name AS "team",p.`name` AS "position" FROM tbl_staff AS s INNER JOIN tbl_team AS t ON s.team_id=t.id
INNER JOIN `tbl_position` AS p ON s.`position_id`=p.`id`
ORDER BY s.id DESC'));
		return view('staff.index',compact('stafflist'));
	}
    public function staffList(){
    	return view('staff.list');
    }
>>>>>>> d7ff2528870e76dfe2beea37a18343829dc96c20
}
