<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subdivision extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'Name',
        'Subdivisiontype'
    ];
    protected $table = 'Subdivisions';
}