<?php

require_once __DIR__ . '/vendor/autoload.php';

$slack = new \Devorto\Logger\Slack(
	'https://hooks.slack.com/services/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',
	'My Test App',
	'https://test.example.com'
);

$slack->critical(new Exception('Test'));
