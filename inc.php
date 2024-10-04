<?php
// Инициализируем всё из ./engine

const ENGINE_PATH = 'engine/';

$files = scandir(ENGINE_PATH);

foreach($files as $file) {
    if (($file !== '.') && ($file !== '..') && !is_dir(ENGINE_PATH . $file)) {
        include_once ENGINE_PATH . $file;
        echo '[DEBUG] Инициализирован файл: '.$file.PHP_EOL;
    }
}