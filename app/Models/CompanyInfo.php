<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    protected $table ='company_info';
    protected $fillable = [
        'company_name',
        'logo_path',
        
    ];
}
