<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    protected $fillable =['name','dob','address','phone_number'];
    public function borrow(){
        return $this->hasMany(Borrow::class);
    }
}
