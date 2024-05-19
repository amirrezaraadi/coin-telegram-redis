<?php

namespace App\Models\Manager;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cup extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sub_title',
        'slug',
        'amount',
        'donate',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function amount()
    {
        return $this->belongsToMany(Amount::class , 'amount_cup');
    }

}
