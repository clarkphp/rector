<?php

namespace Rector\Privatization\Tests\Rector\Property\PrivatizeLocalOnlyMethodRector\Fixture;

final class SkipChildPropertyUsage extends AbstractWithTearDown
{
    protected $value = 10;
}

abstract class AbstractWithTearDown
{
    /**
     * @api
     */
    public function run()
    {
        $this->value;
    }

    protected $value;
}
