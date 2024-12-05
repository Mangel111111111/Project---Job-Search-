<?php

namespace App\Models;

use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $fillable =[
        'vacancy_id',
        'news',
    ];
    public function vacancy(){
        return $this->belongsTo(Vacancy::class);
    }
}
