<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Kalnoy\Nestedset\NodeTrait;

#[Fillable(['name'])]
class Folder extends Model
{
    use NodeTrait;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
