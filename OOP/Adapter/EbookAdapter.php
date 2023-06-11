<?php

// 适配器

class EbookAdapter implements BookInterface
{
    public EbookInterface $ebook;

    public function open()
    {
        return $this->ebook->unlock();
    }

    public function turnPage()
    {
        return $this->ebook->glideUp();
    }

    public function getPage()
    {
        return $this->ebook->showPage();
    }
}