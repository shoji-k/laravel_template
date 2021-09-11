<?php

namespace Tests\Feature\Api;

use Tests\TestCase;

class ReportTest extends TestCase
{
    /**
     * @test
     *
     * @return void
     */
    public function api_canGetReportList()
    {
        $response = $this->get('api/reports');
        $response->assertStatus(200);
    }

    /**
     * @test
     *
     * @return void
     */
    public function api_canPostReport()
    {
        $response = $this->post('api/reports');
        $response->assertStatus(200);
    }

    /**
     * @test
     *
     * @return void
     */
    public function api_canGetReport()
    {
        $response = $this->get('api/reports/1');
        $response->assertStatus(200);
    }


    /**
     * @test
     *
     * @return void
     */
    public function api_canPutReport()
    {
        $response = $this->put('api/reports/1');
        $response->assertStatus(200);
    }

    /**
     * @test
     *
     * @return void
     */
    public function api_canDeleteReport()
    {
        $response = $this->delete('api/reports/1');
        $response->assertStatus(200);
    }
}
