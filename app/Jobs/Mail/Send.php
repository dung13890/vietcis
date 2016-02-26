<?php

namespace App\Jobs\Mail;

use App\Jobs\Job;
use App\Repositories\Contracts\ConfigRepository;
use Mail;

class Send extends Job
{
    protected $attributes;

    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
    }

    public function handle(ConfigRepository $repository)
    {
        $contact = $this->attributes;
        Mail::send('frontend.mail.contact', ['contact' => $contact], function ($m) use ($repository) {
            $m->from('info@vietcis.vn', '[vietcis] Có thông tin liên hệ mới');

            $m->to($repository->all()->first()->email,'Vietcis')->subject('Your Reminder!');
        });
    }
}
