<?php

class ConfigManager {
    public static function getConfig($key) {
        $config = include('config.php');
        return $config[$key] ?? null;
    }
}
