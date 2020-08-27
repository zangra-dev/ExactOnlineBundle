<?php

namespace App\Tests\Command;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Console\Tester\CommandTester;

/**
 * @internal
 * @coversNothing
 */
class ExactSyncCommandTest extends KernelTestCase
{
    public function testExecute()
    {
        $kernel = static::createKernel();
        $application = new Application($kernel);

        $command = $application->find('exact:token:refresh');
        $commandTester = new CommandTester($command);

        $commandTester->execute([
            'command' => $command->getName(),

            // pass arguments
            'country' => 'belgium',
        ]);

        // the output of the command in the console
        $output = $commandTester->getDisplay();
    }
}
