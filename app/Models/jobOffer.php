<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class jobOffer extends Model
{
    use HasFactory;

    protected $fillable = [
        'jobOffer',
        'jobVacancyStatus'
    ];
}
