<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setup extends Model
{

    use HasFactory;
    protected $table = 'setups';
    protected $primaryKey = 'sid';
    // protected $fillable = [
    //     'meta-title',
    //     'email',
    //     'address',
    //     'contact',
    // ];
}
