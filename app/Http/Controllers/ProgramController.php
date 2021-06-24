<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProgramRequest;
use App\Http\Resources\ProgramResource;
use App\Model\Program;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProgramResource::collection(Program::all());
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
    public function store(ProgramRequest $request)
    {
        $program = new Program;
        $program->program_id = $request->program_id;
        $program->program_title = $request->program_title;
        $program->program_age_rating = $request->program_age_rating;
        $program->program_description = $request->program_description;
        $program->program_type = $request->program_type;
        $program->save();
        return response([
            "data" => new ProgramResource($program)
        ],Response::HTTP_CREATED);
    } 

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        return new ProgramResource($program);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        $program->update($request->all());
        return response([
            'data' => ProgramResource::collection(Program::all())
        ],Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        $program->delete();
        return response(null,Response::HTTP_NO_CONTENT); //HTTP_NO_CONTENT for null return
    }
}
