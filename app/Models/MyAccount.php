<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyAccount extends Model
{
    use HasFactory;
    protected $table = 'accounts';
    public $timestamps = true;
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'address',
        'country',
        'state',
        'zip',
        'phone'
    ];
}
