<?php

declare(strict_types=1);

namespace AliSaleem\Smtp2GoMailer;

use Illuminate\Support\ServiceProvider;

class MailHogMailerServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        config()->set('mail.mailers.mailhog', require __DIR__.'/../config/mailhog.php');
    }
}
