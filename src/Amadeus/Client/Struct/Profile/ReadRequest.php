<?php

namespace Amadeus\Client\Struct\Profile;

class ReadRequest
{
    /**
     * @var ProfileReadRequest
     */
    public $ProfileReadRequest;

    /**
     * @param ProfileReadRequest|null $profileReadRequest
     */
    public function __construct($profileReadRequest = null)
    {
        $this->ProfileReadRequest = $profileReadRequest;
    }
}