<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlipSalary extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $with = ['employee'];

    public function employee() {
        return $this->belongsTo(Employee::class);
    }
}
