<?php

namespace App\Http\Resources\Channel;

use Illuminate\Http\Resources\Json\JsonResource;

class ChannelEpgResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'program_id'=>$this->program_id,
            'channel_no'=>$this->channel_no,
            'channel_name'=>$this->channel_name,
            'epg_date'=>$this->epg_date,
            'epg_start_time'=>$this->epg_start_time,
            'epg_end_time'=>$this->epg_end_time
        ];
    }
}
