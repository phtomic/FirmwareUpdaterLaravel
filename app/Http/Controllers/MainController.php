<?php

namespace App\Http\Controllers;

use App\Http\Resources\Firmware;
use App\Models\Firmwares;
use App\Models\Tokens;
use App\Models\User;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Rule\Parameters;
class MainController extends Controller
{
    public function index(){
        $users=User::all();
        return view('main',[
            'users'=> $users
        ]);
    }
    public function getVersion(Request $request){
        $tk=Tokens::where('token',$request["token"])->get();
        if($tk!=[]){
            $last=Firmwares::first();
           return new Firmware($last);
        }
    }
    public function getUpdate(Request $request){
        $tk=Tokens::where('token',$request["token"])->get();
        if($tk!=[]){
            $last=Firmwares::where('name',$request["name"])->get();
            return response()->download(storage_path()."\\downloads\\".$last[0]['localPath']);
        }
    }
}
