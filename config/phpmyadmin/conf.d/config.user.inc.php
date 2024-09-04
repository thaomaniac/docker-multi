<?php
//https://docs.phpmyadmin.net/en/latest/config.html
$cfg['TitleDatabase'] = '@DATABASE@ | @PHPMYADMIN@';
$cfg['TitleTable'] = '@DATABASE@ / @TABLE@ | @PHPMYADMIN@';
$cfg['TitleServer'] = '@HTTP_HOST@ / @VSERVER@ | @PHPMYADMIN@';
$cfg['TitleDefault'] = '@HTTP_HOST@ | @PHPMYADMIN@';

$cfg['NavigationTreeEnableGrouping'] = false;

$sessionValidity = 60 * 60 * 24 * 365;
$cfg['LoginCookieValidity'] = $sessionValidity;
ini_set('session.gc_maxlifetime', (string)$sessionValidity);
$cfg['ShowPhpInfo'] = true;
