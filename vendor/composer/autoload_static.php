<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7ca39963cf290101962bc899eba67983
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
        'C' => 
        array (
            'Composer\\CaBundle\\' => 18,
        ),
        'A' => 
        array (
            'Abraham\\TwitterOAuth\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
        'Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/ca-bundle/src',
        ),
        'Abraham\\TwitterOAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/abraham/twitteroauth/src',
        ),
    );

    public static $classMap = array (
        'Abraham\\TwitterOAuth\\Config' => __DIR__ . '/..' . '/abraham/twitteroauth/src/Config.php',
        'Abraham\\TwitterOAuth\\Consumer' => __DIR__ . '/..' . '/abraham/twitteroauth/src/Consumer.php',
        'Abraham\\TwitterOAuth\\HmacSha1' => __DIR__ . '/..' . '/abraham/twitteroauth/src/HmacSha1.php',
        'Abraham\\TwitterOAuth\\Request' => __DIR__ . '/..' . '/abraham/twitteroauth/src/Request.php',
        'Abraham\\TwitterOAuth\\Response' => __DIR__ . '/..' . '/abraham/twitteroauth/src/Response.php',
        'Abraham\\TwitterOAuth\\SignatureMethod' => __DIR__ . '/..' . '/abraham/twitteroauth/src/SignatureMethod.php',
        'Abraham\\TwitterOAuth\\Token' => __DIR__ . '/..' . '/abraham/twitteroauth/src/Token.php',
        'Abraham\\TwitterOAuth\\TwitterOAuth' => __DIR__ . '/..' . '/abraham/twitteroauth/src/TwitterOAuth.php',
        'Abraham\\TwitterOAuth\\TwitterOAuthException' => __DIR__ . '/..' . '/abraham/twitteroauth/src/TwitterOAuthException.php',
        'Abraham\\TwitterOAuth\\Util' => __DIR__ . '/..' . '/abraham/twitteroauth/src/Util.php',
        'Abraham\\TwitterOAuth\\Util\\JsonDecoder' => __DIR__ . '/..' . '/abraham/twitteroauth/src/Util/JsonDecoder.php',
        'Composer\\CaBundle\\CaBundle' => __DIR__ . '/..' . '/composer/ca-bundle/src/CaBundle.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Kirby\\ComposerInstaller\\CmsInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/CmsInstaller.php',
        'Kirby\\ComposerInstaller\\Installer' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Installer.php',
        'Kirby\\ComposerInstaller\\Plugin' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Plugin.php',
        'Kirby\\ComposerInstaller\\PluginInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/PluginInstaller.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7ca39963cf290101962bc899eba67983::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7ca39963cf290101962bc899eba67983::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7ca39963cf290101962bc899eba67983::$classMap;

        }, null, ClassLoader::class);
    }
}
