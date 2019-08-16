<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LandType extends Model
{
    protected $table = 'land_type';

    /**
     * Поля таблиц разрешенные для массового присваивания
     * @var array
     */
    protected $fillable = [
        'title',
    ];
}
