<?php

namespace App\Models;

use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Follow extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'vacancy_id',
        'news',
    ];
    public function vacancy(){
        return $this->belongsTo(Vacancy::class);
    }
}
