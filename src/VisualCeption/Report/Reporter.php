<?php

namespace Codeception\Module\VisualCeption\Report;

use Codeception\Module\ImageDeviationException;

interface Reporter
{
    public function processFailure(ImageDeviationException $exception);
    public function finish();
}
