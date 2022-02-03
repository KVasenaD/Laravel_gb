<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Builder;

class Feedback extends Model
{
    use HasFactory;

    public static $availableFields = [
        'title', 'description',
    ];

    protected $table = 'feedback';
    protected $fillable = [
        'title',
        'description'
    ];
}
