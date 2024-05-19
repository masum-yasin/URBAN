<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurriCulumBioData extends Model
{
    use HasFactory;
    
    protected $table = 'curri_culum_bio_data';
    protected $fillable = [
        'first_name',
        'email',
        'company_name',
        'mobile',
        'project_name',
        'project_role',
    ];
}
