<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MPasswordreset extends Model
{
    use HasFactory;
    protected $table = 'password_reset_tokens';
    
    protected $fillable = ['email', 'token'];
}