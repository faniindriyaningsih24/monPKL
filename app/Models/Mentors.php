<?php

namespace App\Models;

use App\Models\DetailCompany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mentors extends Model
{
    use HasFactory;
    protected $table = "mentors";
    protected $fillable = [
        "namaMentors",
        "email",
        "noHpMentors",
        "photoMentors",
        "parafMentors"
    ];

    public function mentorPKL()
    {
        return $this->hasOne(DetailCompany::class);
    }
}
