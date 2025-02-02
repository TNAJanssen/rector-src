<?php

declare(strict_types=1);

use Rector\RemovingStatic\Rector\Class_\PHPUnitStaticToKernelTestCaseGetRector;
use Rector\Tests\RemovingStatic\Rector\Class_\PHPUnitStaticToKernelTestCaseGetRector\Source\ClassWithStaticMethods;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(PHPUnitStaticToKernelTestCaseGetRector::class)
        ->call('configure', [[
            PHPUnitStaticToKernelTestCaseGetRector::STATIC_CLASS_TYPES => [ClassWithStaticMethods::class],
        ]]);
};
