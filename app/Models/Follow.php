<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'follow_by',
        'follow_to',
        'follow_page',

    ];
}
