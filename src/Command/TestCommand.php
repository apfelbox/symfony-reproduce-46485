<?php declare(strict_types=1);

namespace App\Command;

use App\Message\TestMessage;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Messenger\MessageBusInterface;

#[AsCommand("test")]
final class TestCommand extends Command
{
	public function __construct (
		private MessageBusInterface $messageBus,
	)
	{
		parent::__construct();
	}

	protected function execute (InputInterface $input, OutputInterface $output) : int
	{
		$this->messageBus->dispatch(new TestMessage());
		$this->messageBus->dispatch(new TestMessage());
		return 0;
	}

}
