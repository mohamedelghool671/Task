<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = ['name', 'user_id'];

    public function merchant() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
