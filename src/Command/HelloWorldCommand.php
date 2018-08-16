<?php
declare(strict_types=1);

namespace Irihit\Console\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class HelloWorldCommand
 */
final class HelloWorldCommand extends Command
{
    /** @var string command name */
    protected $command = 'hello-world';

    /** @var string command description */
    protected $description = 'Congrats! You did it!!';

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function action(InputInterface $input, OutputInterface $output): void
    {
        echo "Hi there :)\n";
    }
}
