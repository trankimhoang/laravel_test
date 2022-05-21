<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';

    protected $primaryKey = 'id';


    public function User() {
        return $this->belongsTo(User::class);
    }
}
