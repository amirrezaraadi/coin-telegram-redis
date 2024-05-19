<?php

namespace App\Models\Manager;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amount extends Model
{
    use HasFactory;


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cups()
    {
        return $this->belongsToMany(Cup::class , 'amount_cup');
    }
}
