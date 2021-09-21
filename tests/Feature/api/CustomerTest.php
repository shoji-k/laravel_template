<?php

namespace Tests\Feature\Api;

use Tests\TestCase;

class CustomerTest extends TestCase
{
    /**
     * @test
     *
     * @return void
     */
    public function api_canGetCustomerList()
    {
        $response = $this->get('api/customers');
        $response->assertStatus(200);
        $this->assertThat($response->content(), $this->isJson());
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
