<?php
$cfg['TitleDatabase'] = '@DATABASE@ | @PHPMYADMIN@';
$cfg['TitleTable'] = '@DATABASE@ / @TABLE@ | @PHPMYADMIN@';
$cfg['TitleServer'] = '@HTTP_HOST@ / @VSERVER@ | @PHPMYADMIN@';
$cfg['TitleDefault'] = '@HTTP_HOST@ | @PHPMYADMIN@';

$sessionValidity = 60 * 60 * 24 * 365 * 1;
$cfg['LoginCookieValidity'] = $sessionValidity;
ini_set('session.gc_maxlifetime', (string)$sessionValidity);
$cfg['ShowPhpInfo'] = true;
