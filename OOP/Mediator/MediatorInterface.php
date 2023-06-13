<?php

interface MediatorInterface
{

    public function sendResponse($content);
    public function makeRequest();
    public function queryDb();

}