<?php

namespace App\Http\Requests\Channel;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ChannelEpgRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "channel_no" =>'required|unique:channel_epgs',
            "channel_name" =>'required',
            "epg_date" =>'required|date|date_format:Y-m-d',
            "program_id" =>'required',
            "epg_start_time" =>'required|date|date_format:Y-m-d H:i:s',
            "epg_end_time" =>'required|date|date_format:Y-m-d H:i:s',
        ];
    }
}
