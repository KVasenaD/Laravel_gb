<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Builder;

class Order extends Model
{
    use HasFactory;

    public static $availableFields = [
        'title', 'number','email', 'description'
    ];

    protected $table = 'order';
    protected $fillable =
        [
        'title',
        'number',
        'email',
        'description'
        ];
}

