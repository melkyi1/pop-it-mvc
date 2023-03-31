<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'ФИО',
        'Пол',
        'birthday',
        'Адрес',
        'Должность',
        'Подразделение',
        'ДисциплинаID'
    ];
    protected $table = 'employees';
}