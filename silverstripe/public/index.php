<?php

// Hello /serverless/NIGHTS - Auckland

use SilverStripe\Control\HTTPApplication;
use SilverStripe\Control\HTTPRequestBuilder;
use SilverStripe\Core\CoreKernel;
use SilverStripe\Core\Startup\ErrorControlChainMiddleware;

require __DIR__ . '/vendor/autoload.php';

// Build request and detect flush
$request = HTTPRequestBuilder::createFromEnvironment();

// Default application
$kernel = new CoreKernel(BASE_PATH);
$app = new HTTPApplication($kernel);
$app->addMiddleware(new ErrorControlChainMiddleware($app));
$response = $app->handle($request);
$response->output();

//phpinfo();