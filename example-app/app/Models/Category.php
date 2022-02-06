<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Builder;

class Category extends Model
{
    use HasFactory;
    public static $availableFields = [
        'title', 'description'
    ];

    protected $table = 'categories';
    protected $fillable = [
        'title',
        'description'
    ];
    protected $casts = [
        'display' => 'boolean'
    ];
    public function news(): HasMany
    {
        return $this->hasMany(News::class, 'category_id', 'id');
    }
}
