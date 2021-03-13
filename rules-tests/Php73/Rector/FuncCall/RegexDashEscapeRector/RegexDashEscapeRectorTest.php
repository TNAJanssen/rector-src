<?php

declare(strict_types=1);

namespace Rector\Tests\Php73\Rector\FuncCall\RegexDashEscapeRector;

use Iterator;
use Rector\Php73\Rector\FuncCall\RegexDashEscapeRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;
use Symplify\SmartFileSystem\SmartFileInfo;

final class RegexDashEscapeRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(SmartFileInfo $fileInfo): void
    {
        $this->doTestFileInfo($fileInfo);
    }

    /**
     * @return Iterator<mixed, SmartFileInfo>
     */
    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorClass(): string
    {
        return RegexDashEscapeRector::class;
    }
}
