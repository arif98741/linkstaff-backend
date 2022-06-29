<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['post_content', 'user_id', 'page_id'];

    /**
     * @return BelongsTo
     */
    public function user_post()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    /**
     * @return BelongsTo
     */
    public function page_post()
    {
        return $this->belongsTo(Page::class,'page_id','id');
    }

}
