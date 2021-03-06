<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body', 'event_date'];

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
