<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'ДисциплинаID',
        'Название'
    ];
    protected $table = 'discipline';
}