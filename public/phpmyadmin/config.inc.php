<?php
$i = 0;
$i++;
$cfg['Servers'][$i]['auth_type'] = 'config';
$cfg['Servers'][$i]['host'] = 'sqlite:' . database_path('database.sqlite');
$cfg['Servers'][$i]['AllowNoPassword'] = true;
$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['extension'] = 'sqlite';
$cfg['Servers'][$i]['user'] = '';
$cfg['Servers'][$i]['password'] = '';
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';