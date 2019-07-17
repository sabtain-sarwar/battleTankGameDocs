<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'body'
    ];

    public function user() {
        return $this->belongsTo("App\User");
    }

}
