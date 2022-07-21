<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function users()
    {
        return $this->hasMany(User::class,'contry_id',"id");
    }
    public function posts()
    {
        return $this->hasManyThrough(Post::class, User::class,
        'contry_id',
        'user_id',
        "id","id");
    }
}
