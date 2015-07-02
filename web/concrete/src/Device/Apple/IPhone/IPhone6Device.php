<?php
namespace Concrete\Core\Device\Apple\IPhone;

use Concrete\Core\Device\Device;

class IPhone6Device extends Device
{

    public function getViewportHTML()
    {
        return '<div class="ccm-device-iphone6"><iframe class="ccm-display-frame"></iframe></div>';
    }

}