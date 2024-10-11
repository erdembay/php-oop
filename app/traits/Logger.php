<?php
namespace app\traits;
trait Logger {
    public function log(string $message): void {
        echo $message . '<br />';
    }
}