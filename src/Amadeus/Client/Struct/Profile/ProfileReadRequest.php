<?php
namespace Amadeus\Client\Struct\Profile;

class ProfileReadRequest
{
    /**
     * @var string
     */
    public $ProfileType;

    /**
     * @param string|null $profileType
     */
    public function __construct($profileType = null)
    {
        $this->ProfileType = $profileType;
    }
}