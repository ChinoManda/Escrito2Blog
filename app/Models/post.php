<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = "post";

    public function author(): BelongsTo
    {
        return $this->belongsTo(author::class, 'author');
    }
}
