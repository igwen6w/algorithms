<?php
/**
 * description:
 * author: igwen6w@gmail.com
 * date: 2023/6/12
 */

$service = new WebService('Hello World');
$new_service = new JsonRender($service);
echo $new_service->renderData();


