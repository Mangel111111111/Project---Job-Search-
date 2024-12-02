<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vacancy extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'jobOffer',
        'jobVacancyStatus'
    ];

    public function follows(){
        return $this->hasMany(Follow::class);
    }
}
