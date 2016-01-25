<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class apartment extends Model
{
    //

    protected $fillable = ['name','description','price','current','max'];



    public function user(){
        return $this->belongsTo(User::class);
    }
}
