<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'gender',
        'email',
        'tel',
        'address',
        'build',
        'kind',
        'content'
        ];
}
//'name','gender', 'email', 'tel','address','build','kind','content'