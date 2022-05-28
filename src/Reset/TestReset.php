<?php declare(strict_types=1);

namespace App\Reset;

use Symfony\Contracts\Service\ResetInterface;

final class TestReset implements ResetInterface
{
	public function reset ()
	{
		dd("RESET");
	}
}
