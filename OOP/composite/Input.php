<?php

class Input implements RenderableInterface
{

    public function render()
    {
        return '<input name="xxx" value="vvv">';
    }
}