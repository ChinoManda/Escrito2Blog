<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publicity extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = "publicity";
}
