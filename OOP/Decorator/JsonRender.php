<?php

class JsonRender extends Decorator
{

    public function renderData()
    {
        return json_encode($this->wrapped->renderData());
    }
}