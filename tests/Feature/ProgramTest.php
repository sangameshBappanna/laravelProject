<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
use App\Model\Program;

class ProgramTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // use RefreshDatabase;
    public $header = [
        'Accept' => "application/json",
        "Content-Type" => "application/json",
        'Authorization' => "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiMTkyNTA2YjU3NmI4Y2FmYzQ1YTJkMDBiNDk2NzkwMWMxY2VlYjI1YjYwODU4NTg3MjM4MzhjNTZkOTkzMDQ3YjUwNGQ0ZGYyYWM5MjJlNjkiLCJpYXQiOjE2MjM5MDk5NTQsIm5iZiI6MTYyMzkwOTk1NCwiZXhwIjoxNjU1NDQ1OTU0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.MstiujQ-yNoIkVXW0zEzjIumbprwc4X822LKV4CKGC8SP7Tly-2ul36Z0-5moQBseV-g5ffM9Did817wGO3JkQyDzpF_PMxHRWSS5gNzn53Lr9_Ovf6jYloeXQ6VcKR1OYze4fpa_Wxi_ku8j2lFGuzuzRC1M-dAu0ZaY5QFVIyIQVGtNRXZOekphdYmIVg5UqgM-qaHNPDStnU-k0X7-GtuvsC1o_w9FhdbUAbf_m09oBHqrEf085axpsE2meILDJqrlhYW4v95ogSUvDsK7NykbgMg5EOfmKUl4sGZN9qNau4nzou_oI7i4-bTXsBi81S_E8-ghSsAiPnVuWaA18k8JAak7eQNPU4vXOh4dHKUrrlfkRO0Kvo3EloPOtv0SpBuUUDWkTWWjPvTZr6DH8gfI2RIHq3IlkoAGKAl7sc1ZnK-4acJAE-wpzvW9_TaSz4A55FeOdzJ91W4HlH7xtt078o2dLBbq3CS1spN-GZNJuFK4xMabxvUk6NY_IgNRDQ1j_Kt0DXkk-c5w01hdiWXgeNyDEt4giOfdg7IkE2sf750t-xGQL52KAM-aqrtS5L-5FaRHuVlXICdH4SJZKs5GBjVUWbeYCM_U5DMk0s0BqkkBq7yfSxipyOzVtNqMUBJfAagaCA4rBpkN2yUVyXJ3mvR7tLjqYMLIdh1hl8"
    ];
    public function test_create_a_program_data(){
        $this->withoutExceptionHandling();
        $formdata=[
            'program_id'=>102,
            'program_title'=>"vvvv",
            "program_age_rating"=>"A",
            "program_description"=>"testing",
            "program_type"=>"News"
        ];
        $expectedData = [
            "program"=> $formdata['program_title'],
            "program_age_rating"=> $formdata['program_age_rating'],
            "program_description"=> $formdata['program_description'],
            "program_type"=> $formdata['program_type']
        ];
        
        $this->json('POST',route('programs.store'),$formdata ,$this->header)
            ->assertStatus(201)
            ->assertJson(['data'=>$expectedData]);
       }
}
