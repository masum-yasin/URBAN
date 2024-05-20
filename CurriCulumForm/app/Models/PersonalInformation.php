<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    use HasFactory;
    protected $table ='personal_informations';
  protected $fillable = [
    'first_name', 'email'
  ];

  public function companies()
    {
        return $this->hasMany(Company::class, 'personal_informations_id');
    }
}
