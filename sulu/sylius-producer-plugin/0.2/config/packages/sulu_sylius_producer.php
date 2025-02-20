<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(__DIR__.'/@SuluSyliusProducerPlugin/Resources/config/app/config.php');

    $containerConfigurator->extension('framework', [
        'messenger' => [
            'transports' => [
                'sulu_sylius_transport' => '%env(SULU_SYLIUS_MESSENGER_TRANSPORT_DSN)%',
            ],
        ],
    ]);
};
