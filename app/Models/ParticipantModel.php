<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ParticipantModel extends Model
{
    use HasFactory;

    protected $table = 'participant';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}