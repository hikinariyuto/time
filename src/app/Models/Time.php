<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;
    protected $fillable = [ 'id','user_id','punchIn', 'punchOut','month','day','breakIn','breakOut','workTime','restTime','year'];

    public function user()
    {
        $this->belongsTo('App\User');
    }
    public function getdate()
    {
        return $this->year . '-' . $this->month . '-' . $this->day;
    }
}
