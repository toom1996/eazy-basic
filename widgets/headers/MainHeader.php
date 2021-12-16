<?php

namespace app\widgets\headers;

use eazy\http\Widget;

class MainHeader extends Widget
{
    public function run()
    {
        echo $this->renderFile('@app/widgets/headers/views/mainHeader', [
            'username' => 'noooooooooooooooooooooob'
        ]);
    }
}