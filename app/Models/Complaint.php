<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;
    protected $table = 'complaints';
    protected  $fillable = [
        'name',
        'subject',
        'complaintsText',
        'case',
        'sms',
        'status',
        'user_id',
    ];

    public $primaryKey = 'id';

    public function user(){
        return $this->belongTo('User::class');
    }
}
