<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProgramResource extends JsonResource
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
            'program' =>$this->program_title,
            'program_age_rating' =>$this->program_age_rating,
            'program_description' =>$this->program_description,
            'program_type'=>$this->program_type
        ];
    }
}
