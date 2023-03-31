<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeesSpisok extends Model
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

}