<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'ФИО',
        'Пол',
        'Дата рождения',
        'Адрес прописки',
        'Должность',
        'Подразделение'
    ];
}