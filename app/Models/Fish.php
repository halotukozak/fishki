<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    use HasFactory;

    protected $fillable = ['ang', 'pol', 'package_id'];

    public function package()
    {
        $this->belongsTo(Package::class);
    }
}
