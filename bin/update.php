#!/usr/bin/env php
<?php

require_once(dirname(dirname(dirname(dirname(__FILE__)))) . '/lib/_autoload.php');

$name = basename($argv[0]);

if ($argc < 2) {
    fprintf(STDERR, "$name: Missing id of aggregator.\n");
    exit(1);
}

$id = $argv[1];

$aggregator = \SimpleSAML\Module\aggregator2\Aggregator::getAggregator($id);
$aggregator->updateCache();
