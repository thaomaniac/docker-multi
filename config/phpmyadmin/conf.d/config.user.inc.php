<?php
$cfg['TitleDatabase'] = '@DATABASE@';
$cfg['TitleTable'] = '@DATABASE@ / @TABLE@';
$cfg['TitleServer'] = '@HTTP_HOST@ / @VSERVER@ | @PHPMYADMIN@';
$cfg['TitleDefault'] = '@HTTP_HOST@ | @PHPMYADMIN@';
$cfg['LoginCookieValidity'] = 10;
$sessionValidity = 60 * 60 * 24 * 365 * 1;
$cfg['LoginCookieValidity'] = $sessionValidity;
ini_set('session.gc_maxlifetime', (string)$sessionValidity);