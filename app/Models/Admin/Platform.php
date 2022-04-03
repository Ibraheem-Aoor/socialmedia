<?php

namespace App\Models\Admin;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDO;

class Platform extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' , 'image' , 'description',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class , 'platform_id');
    }
}
