<?php 
	namespace App\Core;
	class App {
		protected static $registery = [];
		public static function bind($key, $value) {
			static::$registery[$key] = $value;
		}
		public static function get($key) {
			if (!array_key_exists($key, static::$registery)) {
				throw new Exception("Error Processing Request. No {$key} is bound to the container.");
			}
			return static::$registery[$key];
		}
	}