<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getMyDateAttribute()
    {
        //{{-- <td>{{ date('F d, Y @ h:i:s', strtotime($prospect->created_at)) }}</td> --}}
        return date('F d, Y', strtotime($this->created_at));
    }
}
