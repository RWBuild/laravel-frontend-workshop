<?php

namespace Tests\Feature\Person;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PersonTest extends TestCase
{

    use RefreshDatabase;

    /**
     * Assess that the user can see our homepage
     */
    public function test_show_people_index_page()
    {

        $response = $this->get('/people');

        $this->assertGuest();

        $response->assertViewHas('people');

        $response->assertStatus(200);
    }


    /**
     * Assess that a guest user can add a new person to the database
     *
     * @return void
     */
    public function test_guest_user_can_add_a_new_person()
    {
        $response = $this->post('/people', [
            'first_name' => 'Vainqueur',
            'last_name' => 'Bihame',
            'dob' => '1990-09-19',
            ''
        ]);

        $response->assertStatus(200);
    }
}
