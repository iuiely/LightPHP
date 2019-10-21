<?php
defined('FRAME_PATH') or define('FRAME_PATH',__DIR__.DIRECTORY_SEPARATOR);

defined('LIB_PATH') or define('LIB_PATH',FRAME_PATH.'Lib'.DIRECTORY_SEPARATOR);

defined('EXT_PATH') or define('EXT_PATH', dirname(FRAME_PATH) .DIRECTORY_SEPARATOR. 'extend' . DIRECTORY_SEPARATOR);

defined('APP_CONFIG_PATH') or define('APP_CONFIG_PATH',dirname(__DIR__).DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR);

defined('LIB_CONFIG_FILE') or define('LIB_CONFIG_FILE',__DIR__.DIRECTORY_SEPARATOR.'config/set.php');

defined('LOG_PATH') or define('LOG_PATH',dirname(__DIR__).DIRECTORY_SEPARATOR.'logs'.DIRECTORY_SEPARATOR);

require_once FRAME_PATH."helper.php";

require_once FRAME_PATH."Lib/Loader.php";

\Lightphp\Loader::register();
