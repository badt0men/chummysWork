<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactsModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname', 
        'email', 
        'number',
        'address',
        'job_type',
    ];
}
