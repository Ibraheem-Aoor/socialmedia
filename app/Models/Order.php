<?php

namespace App\Models;

use App\Models\Admin\Platform;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory , SoftDeletes;
    protected $fillable = [
        'url',
        'platform_id',
        'choice' ,
    ];

    public function platform()
    {
        return $this->belongsTo(Platform::class ,'platform_id');
    }
}

