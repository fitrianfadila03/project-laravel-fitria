<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;



class category extends Model
{
      protected $fillable = ['name'];

    public function categories(): BelongsTo
    {
        return $this->belongsTo(category::class, 'category_id');
    }

}
