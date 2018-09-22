<?php

namespace App\Service;

use Psr\Log\LoggerInterface;

class Greeting
{

    private $logger;

    /**
     * Greeting constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param string $name
     * @return string
     */
    public function greet(string $name): string
    {
        $this->logger->info( "Greeted $name");
        return "Hello $name";
    }
}