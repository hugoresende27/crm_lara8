<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getMyDateAttribute()
    {       
        return date('F d, Y', strtotime($this->created_at));
    }
}
