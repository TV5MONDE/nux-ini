<?php
if ((FALSE !== ($nux_basedir = getenv('nux_basedir')) || (!empty($_SERVER['nux_basedir']) && (FALSE !== ($nux_basedir = $_SERVER['nux_basedir'])))) && file_exists($nux_basedir . 'ini.php'))
{
    require_once $nux_basedir . 'ini.php';
}
