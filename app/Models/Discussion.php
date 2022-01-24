<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Discussion extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','channel_id','title','content','slug'];


    public function user() {
        return $this->belongsTo(User::class);
    }


    public function replies() {

        return $this->hasMany(Reply::class);
    }


    public function getRouteKeyName()
    {
       return 'slug'; 
    }
}
