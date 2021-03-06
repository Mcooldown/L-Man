<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignmentHeader extends Model
{
    use HasFactory;
    protected $table = 'assignment_headers';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function submission()
    {
        return $this->hasMany('App\Models\AssignmentDetail', 'assignment_id', 'id');
    }

    public function submissionUser()
    {
        return $this->submission()->where('user_id', auth()->user()->id);
    }
}
