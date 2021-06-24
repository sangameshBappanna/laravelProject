<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Program;

class ChannelEpg extends Model
{
    protected $fillable = [
        'channel_no','channel_name','epg_date','program_id','epg_start_time','epg_end_time'
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

}
