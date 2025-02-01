<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Otp extends Model
{
    protected $guarded = ['id'];  // This allows all fields to be mass-assigned except for the 'id'

    protected $fillable = [
        'email',  // Add this line
        // other attributes like 'otp', 'expires_at', etc.
    ];
}

