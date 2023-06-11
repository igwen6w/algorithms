<?php

class Form implements RenderableInterface
{

    private Input $input;
    private Button $button;

    public function __construct()
    {
        $this->input = new Input();
        $this->button = new Button();
    }

    public function render()
    {
        return 
            $this->input->render().
            $this->button->render();
    }
}