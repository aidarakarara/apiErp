<?php

namespace Tests\Feature;

use App\Models\Caisse;
use App\Models\Pompe;
use Tests\TestCase;
use App\Models\User;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CaisseTest extends TestCase
{
    // use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_login_and_see_caisses()
    {
        /*  \App\Models\Role::create([
            'nom'=>'pompiste'
        ]);
       
        
        $this->acting($user); */
        Sanctum::actingAs(
            User::factory()->create(),
            ['*']
        );
        //dd($this);
        $response = $this->postJson('/api/caisses', ['date_caisse' => '2021-6-8', 'user_id' => 1]);



        $response->assertStatus(200)
            ->assertSee(0);
    }
    public function test_user_login_and_update_caisses()
    {
        /*  \App\Models\Role::create([
            'nom'=>'pompiste'
        ]);
       
        
        $this->acting($user); */
        Sanctum::actingAs(
            User::factory()->create(),
            ['*']
        );
        Pompe::create([
            'numero' => '1',
            'ilot_id' => 1
        ]);

        

        $response = $this->postJson('/api/caisses',  [
            'date_caisse' => '2021-06-8',
            'user_id' => 1,
            'horaire' => 24
        ]);



        $response->assertStatus(201)
            ->assertSee(1);

        //dd($this);
        $response = $this->putJson('/api/caisses/1', ['date_caisse' => '2021-06-5', 'user_id' => 1]);



        $response->assertStatus(200)
            ->assertSee('different');
    }
}
