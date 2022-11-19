<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chargeability extends Model
{
    use HasFactory;

    protected $fillable =['name'];

    public function dispositionforms()
    {
        return $this-> hasMany(Dispositionform::class);
    }
}
