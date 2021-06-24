<?php

namespace App\Http\Controllers;

use App\Http\Resources\Channel\ChannelEpgResource;
use App\Http\Requests\Channel\ChannelEpgRequest;
use App\Model\ChannelEpg;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ChannelEpgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ChannelEpgResource::collection(ChannelEpg::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChannelEpgRequest $request)
    {
        $channelepg = new ChannelEpg;
        $channelepg->channel_no = $request->channel_no;
        $channelepg->channel_name = $request->channel_name;
        $channelepg->epg_date = $request->epg_date;
        $channelepg->program_id = $request->program_id;
        $channelepg->epg_start_time = $request->epg_start_time;
        $channelepg->epg_end_time = $request->epg_end_time;
        $channelepg->save();
        return response([
            "data" => ChannelEpgResource::collection(ChannelEpg::all())
        ],Response::HTTP_CREATED);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\ChannelEpg  $channelEpg
     * @return \Illuminate\Http\Response
     */
    public function show(ChannelEpg $channelEpg)
    {
        return new ChannelEpgResource($channelEpg);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ChannelEpg  $channelEpg
     * @return \Illuminate\Http\Response
     */
    public function edit(ChannelEpg $channelEpg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ChannelEpg  $channelEpg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChannelEpg $channelEpg)
    {
        $channelEpg->update($request->all());
        return response([
            'data' => ChannelEpgResource::collection(ChannelEpg::all())
        ],Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ChannelEpg  $channelEpg
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChannelEpg $channelEpg)
    {
        $channelEpg->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
