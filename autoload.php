<?php
class AutoLoader {

	static $composerClasses = [];

	public static function register() {
		self::$composerClasses = require('./vendor/composer/autoload_classmap.php');
		spl_autoload_register(array('\\AutoLoader', 'loadClass'));
	}


	public static function loadClass($class) {
		// Replace the \ and the _ with /
		$className = ltrim($class, '\\');
		$path      = str_replace('\\', DIRECTORY_SEPARATOR, str_replace('_', DIRECTORY_SEPARATOR, $className)) . '.php';

		//Try using classes in vendor folder first
		if (isset(self::$composerClasses[$class])) {
			require(self::$composerClasses[$class]);
			return true;
		}

		// Require the file
		require $path;

		return true;
	}
}

AutoLoader::register();
