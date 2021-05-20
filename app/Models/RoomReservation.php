<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomReservation extends Model
{
    use HasFactory;
    protected $guarded=[];
    
    public function userReserve(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function roomReserve(){
        return $this->belongsTo(RoomDetail::class,'room_id','id');
    }
    public function serviceReserve(){
        return $this->belongsTo(OtherService::class,'service_id','id');
    }
}
