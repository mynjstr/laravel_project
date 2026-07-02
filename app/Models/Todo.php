<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Todo extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = ['title', 'description', 'is_completed'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['title', 'description', 'is_completed'])
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs();
    }
}