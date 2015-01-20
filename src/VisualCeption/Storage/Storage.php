<?php

namespace Codeception\Module\VisualCeption\Storage;

interface Storage {
    public function getImage($identifier);
    public function setImage(\Imagick $image, $identifier);
}
