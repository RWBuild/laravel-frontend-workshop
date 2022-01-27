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
            'first_name' => 'John',
            'last_name' => 'Doe',
            'dob' => '1990-09-19',
            'email' => 'johndoe@gmail.com'
        ]);

        $response->assertRedirect('/people');
    }

    /**
     *
     * @return void
     */
    public function test_cannot_create_an_account_without_required_fields()
    {
        $response = $this->post('/people', ['first_name' => 'John']);

        $response->assertSessionHasErrors(['email', 'dob', 'last_name']);

        $response->assertStatus(302);
    }
}
