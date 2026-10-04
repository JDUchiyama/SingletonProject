<?php

declare(strict_types=1);

require_once __DIR__ . '/src/AufPortalConfig.php';

use App\AufPortalConfig;

$enrollmentModule = AufPortalConfig::getInstance();
$gradesModule = AufPortalConfig::getInstance();

echo "Same instance? " . ($enrollmentModule === $gradesModule ? 'Yes' : 'No') . PHP_EOL;

$enrollmentModule->set('school_year', '2027-2028');
echo "School year seen by grades module: " . $gradesModule->get('school_year') . PHP_EOL;