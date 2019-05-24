<?php

namespace Bundle\AdvancedBundle;

class TestService
{
    /**
     * @var int
     */
    private $port;

    public function __construct(int $port)
    {
        $this->port = $port;
    }

    public function getPort()
    {
        return $this->port;
    }
}
