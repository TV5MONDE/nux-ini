<?php

if ((false !== ($nux_basedir = getenv('nux_basedir')) || (!empty($_SERVER['nux_basedir']) && (false !== ($nux_basedir = $_SERVER['nux_basedir'])))) && file_exists($nux_basedir . 'init.php'))
{
    require_once $nux_basedir . 'init.php';
}
