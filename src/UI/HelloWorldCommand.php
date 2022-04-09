<?php

namespace App\UI;

use App\Application\ServiceInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorldCommand extends Command
{
    private ServiceInterface $service;

    public function __construct(ServiceInterface $implService)
    {
        $this->service = $implService;
        parent::__construct('hello-world');
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Hello world!');

        $this->service->think();

        return Command::SUCCESS;
    }
}