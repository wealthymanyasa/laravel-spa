<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portcat extends Model
{
    use HasFactory;

    protected $table = 'portcats';
    protected $primaryKey = 'pcid';
}
