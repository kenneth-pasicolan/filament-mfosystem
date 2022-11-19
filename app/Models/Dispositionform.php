<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositionform extends Model
{
    use HasFactory;

    protected $fillable =['dispositiontype_id', 'chargeabilitytype_id', 'chargeability_id', 'unit_id', 'quarter_id', 'dated', 'subject', 'particular', 'amount'];

    public function chargeability()
    {
        return $this-> belongsTo(Chargeability::class);
    }

    public function chargeabilitytype()
    {
        return $this-> belongsTo(Chargeabilitytype::class);
    }

    public function dispositiontype()
    {
        return $this-> belongsTo(Dispositiontype::class);
    }

    public function quarter()
    {
        return $this-> belongsTo(Quarter::class);
    }

    public function unit()
    {
        return $this-> belongsTo(Unit::class);
    }

}
