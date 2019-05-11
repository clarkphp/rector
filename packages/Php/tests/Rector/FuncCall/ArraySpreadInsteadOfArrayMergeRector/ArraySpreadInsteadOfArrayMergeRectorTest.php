<?php declare(strict_types=1);

namespace Rector\Php\Tests\Rector\FuncCall\ArraySpreadInsteadOfArrayMergeRector;

use Rector\Php\Rector\FuncCall\ArraySpreadInsteadOfArrayMergeRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class ArraySpreadInsteadOfArrayMergeRectorTest extends AbstractRectorTestCase
{
    public function test(): void
    {
        $this->doTestFiles([__DIR__ . '/Fixture/fixture.php.inc', __DIR__ . '/Fixture/iterator_to_array.php.inc']);
    }

    protected function getRectorClass(): string
    {
        return ArraySpreadInsteadOfArrayMergeRector::class;
    }
}
