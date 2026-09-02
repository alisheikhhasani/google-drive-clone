<?php

namespace App\Models;

use App\Observers\FileObserver;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['name', 'format', 'folder_id'])]
#[ObservedBy(FileObserver::class)]
class File extends Model
{
    public function folder(): BelongsTo
    {
        return $this->belongsTo(Folder::class);
    }
}
