<?php

namespace Amadeus\Client\RequestOptions;

class ProfileReadProfileOptions extends Base
{
    public $Version;
    public $UniqueID;

    /**
     * @var \Amadeus\Client\Struct\Profile\ReadRequests
     */
    public $ReadRequests;

}