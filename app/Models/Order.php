<?php

namespace App\Models;

use App\Models\Admin\Platform;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'url',
        'platform_id',
        'choice' ,
    ];

    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }
}

