<?php

namespace App\Controller;

use Bundle\AdvancedBundle\TestService;
use Symfony\Component\HttpFoundation\Response;

class TestController
{
    /**
     * @var TestService
     */
    private $testService;

    public function __construct(TestService $testService)
    {
        $this->testService = $testService;
    }

    public function index(): Response
    {
        return new Response($this->testService->getPort());
    }
}
