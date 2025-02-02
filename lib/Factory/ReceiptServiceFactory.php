<?php

namespace Busuu\IosReceiptsApi\Factory;


use Busuu\IosReceiptsApi\AppleClient;
use Busuu\IosReceiptsApi\ReceiptService;
use Busuu\IosReceiptsApi\ValidatorService;

class ReceiptServiceFactory
{
    /**
     * Create an instance of ReceiptService
     *
     * @param $password
     * @param string $environment
     * @return ReceiptService
     */
    public static function createReceiptService($password, string $environment = ReceiptService::PRODUCTION_ENVIRONMENT): ReceiptService
    {
        $appleClient = new AppleClient($password);
        $validatorService = new ValidatorService();

        return new ReceiptService($appleClient, $validatorService, $environment);
    }
}