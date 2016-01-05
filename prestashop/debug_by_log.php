<?php

$logger = new FileLogger(0); //0 == debug level, logDebug() won’t work without this.
$logger->setFilename(_PS_ROOT_DIR_.”/log/debug.log”);
$logger->logDebug(“message 1″);
$logger->logDebug(“message 2″);
