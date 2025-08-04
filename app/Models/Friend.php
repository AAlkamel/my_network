<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $fillable = ['name', 'age', 'bio', 'skill', 'group_id'];
    /** @use HasFactory<\Database\Factories\FriendFactory> */
    use HasFactory;
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
