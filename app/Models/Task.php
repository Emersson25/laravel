<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Task extends Model
{
    use HasUuids;

    protected $fillable = [
        'project_id',
        'title',
        'description',
        'status',
        'priority',
        'due_date'
    ];

    protected $casts = [
        'due_date' => 'date'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}