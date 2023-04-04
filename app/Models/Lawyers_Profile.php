<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Lawyers_Profile extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    // mass assignable
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'practice_area',
        'location',
        'phone',
        'license',
        'license_year',
    ];
    protected $table = 'lawyers_profile';
    public function getDates(){
        return array('license_year');
    }
}
