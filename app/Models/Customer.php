<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "register";
    protected $primarykey = "id";

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }
   /* public function setEmailAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    } */
}
