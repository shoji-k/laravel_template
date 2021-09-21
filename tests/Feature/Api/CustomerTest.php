<?php

namespace Tests\Feature\Api;

use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CustomerTest extends TestCase
{

    use RefreshDatabase;

    protected function setUp():void
    {
        parent::setUp();
        $this->artisan('db:seed', ['--class' => 'TestDataSeeder']);
    }

    /**
     * @test
     *
     * @return void
     */
    public function api_canGetCustomerList()
    {
        $response = $this->get('api/customers');
        $response->assertStatus(200);
        $response->assertJsonCount(2);

        $json = $response->json();
        $this->assertThat($response->content(), $this->isJson());
        $this->assertSame(['id', 'name'], array_keys($json[0]));
    }

    /**
     * @test
     *
     * @return void
     */
    public function api_canPostCustomer()
    {
        $response = $this->post('api/customers');
        $response->assertStatus(200);
    }

    /**
     * @test
     *
     * @return void
     */
    public function api_canGetCustomer()
    {
        $response = $this->get('api/customers/1');
        $response->assertStatus(200);
    }


    /**
     * @test
     *
     * @return void
     */
    public function api_canPutCustomer()
    {
        $response = $this->put('api/customers/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     *
     * @return void
     */
    public function api_canDeleteCustomer()
    {
        $response = $this->delete('api/customers/1');
        $response->assertStatus(200);
    }
}
