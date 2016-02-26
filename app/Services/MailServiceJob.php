<?php

namespace App\Services;

use App\Services\Contracts\MailService;
use App\Jobs\Mail\Send;

class MailServiceJob extends AbstractServiceJob implements MailService
{
	public function send(array $attributes)
	{
		return $this->dispatch(new Send($attributes));
	}
}
