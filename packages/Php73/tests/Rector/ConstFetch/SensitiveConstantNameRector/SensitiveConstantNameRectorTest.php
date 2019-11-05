<?php

declare(strict_types=1);

namespace Rector\Php73\Tests\Rector\ConstFetch\SensitiveConstantNameRector;

use Iterator;
use Rector\Php73\Rector\ConstFetch\SensitiveConstantNameRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class SensitiveConstantNameRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideDataForTest()
     */
    public function test(string $file): void
    {
        $this->doTestFile($file);
    }

    public function provideDataForTest(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorClass(): string
    {
        return SensitiveConstantNameRector::class;
    }
}
