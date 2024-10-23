<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $table = 'workers'; // Указывает таблицу в БД

    protected $guarded = []; // Разрешает массовое заполнение всех полей
}
