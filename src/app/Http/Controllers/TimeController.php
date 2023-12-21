<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Time;

class TimeController extends Controller
{
    public function index() {
        $today = Carbon::today();
        $month = intval($today->month);
        $day = intval($today->day);
        $items = Time::simplePaginate(5);
        $username = user::all();
        return view('stamp',['items'=>$items,'username'=>$username]);
    }

    public function timein() {
        $user = Auth::user();
        $today = Carbon::today();
        $month = intval($today->month);
        $day = intval($today->day);
        $year = intval($today->year);
        $time = Time::create([
            'user_id' => $user->id,
            'user_name' =>Auth::user()->name,
            'punchIn' => Carbon::now(),
            'month' => $month,
            'day' => $day,
            'year' => $year,
        ]);
        return redirect()->back();
    }

    public function timeOut() {
        $user = Auth::user();
        $timeOut = Time::where('user_id',$user->id)->latest()->first();
        //string → datetime型
        $now = new Carbon();
        $punchIn = new Carbon($timeOut->punchIn);
        $breakIn = new Carbon($timeOut->breakIn);
        $breakOut = new Carbon($timeOut->breakOut);
        //実労時間(Minute)
        $stayTime = $punchIn->diffInMinutes($now);
        $breakTime = $breakIn-> diffInMinutes($breakOut);
        $workingMinute = $stayTime - $breakTime;
        $timeOut->update([
                'punchOut' => Carbon::now(),
                'workTime' => $workingMinute,
                'restTime' => $breakTime
        ]);
        return redirect()->back();
    }

    public function breakIn() {
        $user = Auth::user();
        $oldtimein = Time::where('user_id',$user->id)->latest()->first();
        $oldtimein->update([
                'breakIn' => Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function breakOut() {
        $user = Auth::user();
        $oldtimein = Time::where('user_id',$user->id)->latest()->first();
        $oldtimein->update([
                'breakOut' => Carbon::now(),
            ]);
            return redirect()->back();
    }

    public function attendance(){
        $today = Carbon::today();
        $month = intval($today->month);
        $day = intval($today->day);
        $items = Time::simplePaginate(5);
        $dates = Time::simplePaginate(1);
        $username = user::all();
        return view('attendance',['items'=>$items,'username'=>$username,'dates'=>$dates]);
    }
}
