<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LandImages extends Model
{
    /**
     * Поля таблиц разрешенные для массового присваивания
     * @var array
     */
    protected $fillable = [
        'lands_id', 'img_name'
    ];
}
