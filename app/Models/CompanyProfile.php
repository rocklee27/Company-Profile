<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


#[Fillable(['sejarah', 'visi', 'misi', 'nilai_perusahhaan'])]
class CompanyProfile extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyProfileFactory> */
    // use HasFactory;
    // protected $table='company_profiles';
    // protected $fillable = ['articles','profiles','home_image','articles'];


}
