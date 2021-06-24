<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\ChannelEpg;

class Program extends Model
{
    protected $fillable = [
        'program_title','program_age_rating','program_description','program_type'
    ];

    public function channels()
    {
        return $this->hasMany(ChannelEpg::class);
    }
}
