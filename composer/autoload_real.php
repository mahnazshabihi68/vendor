<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit12fe5db5d9e1db3a72e5f1e6dbf7635c
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit12fe5db5d9e1db3a72e5f1e6dbf7635c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit12fe5db5d9e1db3a72e5f1e6dbf7635c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit12fe5db5d9e1db3a72e5f1e6dbf7635c::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit12fe5db5d9e1db3a72e5f1e6dbf7635c::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire12fe5db5d9e1db3a72e5f1e6dbf7635c($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire12fe5db5d9e1db3a72e5f1e6dbf7635c($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
