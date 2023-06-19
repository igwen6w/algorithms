<?php

$observer = new \Observer\UserObserver();

$user = new \Observer\User();

$user->attach($observer);

$user->sayHello();

$users = $observer->getUpdatedUsers();

print_r($users);
