<?php

declare(strict_types=1);

namespace Rector\ZendToSymfony\Tests\Rector\Include_\RemoveAutoloadingIncludeRector;

use Iterator;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;
use Rector\ZendToSymfony\Rector\Include_\RemoveAutoloadingIncludeRector;

final class RemoveAutoloadingIncludeRectorTest extends AbstractRectorTestCase
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
        return RemoveAutoloadingIncludeRector::class;
    }
}
