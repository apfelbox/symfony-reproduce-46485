<?php declare(strict_types=1);

namespace App\Message;

use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
final class TestMessageHandler
{
	public function __invoke (TestMessage $message)
	{
		$output = new SymfonyStyle(new ArgvInput(), new ConsoleOutput());
		$output->comment("Test Message Handler called");
	}
}
