<?php

namespace App\Services\Contracts;

interface MailService
{
	public function send(array $attributes);
}