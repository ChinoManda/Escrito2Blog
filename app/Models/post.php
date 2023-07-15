<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
