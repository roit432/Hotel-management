<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Contact extends Model 
{
    use notifiable;
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'messages',
       
    ];
}
