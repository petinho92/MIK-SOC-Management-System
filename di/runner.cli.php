<?php

use Atomino\Core\Cli\CliRunner;
use Atomino\Core\Runner\CliRunnerInterface;
use DI\Container;
use function DI\decorate;
use function DI\get;

return [
	CliRunnerInterface::class => get(CliRunner::class),
	CliRunner::class          => decorate(fn(CliRunner $runner, Container $c) => $runner
		->addCliModule($c->get(\Application\Missions\Cli\Common::class))
        ->addCliModule($c->get(\Application\Missions\Cli\EmailSender::class))
	),
];