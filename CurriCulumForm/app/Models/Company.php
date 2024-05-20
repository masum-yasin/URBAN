<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';

    protected $fillable = ['personal_informations_id','company_name', 'mobile', 'project_name', 'project_role'];

    function PersonalInformation(){
        return $this->belongsTo(PersonalInformation::class, 'personal_informations_id','id');
    }
}
