<?php

declare(strict_types=1);

namespace AliSaleem\MailHogMailer;

use Illuminate\Support\ServiceProvider;

class MailHogMailerServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/mailhog.php', 'mail.mailers.mailhog');
    }
}
