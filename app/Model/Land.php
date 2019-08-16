<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    /**
     * Поля таблиц разрешенные для массового присваивания
     * @var array
     */
    protected $fillable = [
        'name', 'wow', 'land_type_id', 'category', 'building', 'price', 'building_icons', 'info', 'table', 'img_name'
    ];

    /**
     * Динамическое свойство модели
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function land_type()
    {
        return $this->belongsTo(LandType::class);
    }

    public function land_images()
    {
        return $this->hasMany(LandImages::class, 'lands_id');
    }
}
