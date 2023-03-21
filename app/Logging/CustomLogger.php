<?php
/*
namespace App\Logging;

use Psr\Log\LoggerInterface;


class CustomLogger implements LoggerInterface
{
    public function emergency($message, array $context = [])
    {
        // Implementação do método 'emergency'
    }

    public function alert($message, array $context = [])
    {
        // Implementação do método 'alert'
    }

    public function critical($message, array $context = [])
    {
        // Implementação do método 'critical'
    }

    public function error($message, array $context = [])
    {
        // Implementação do método 'error'
    }

    public function warning($message, array $context = [])
    {
        // Implementação do método 'warning'
    }

    public function notice($message, array $context = [])
    {
        // Implementação do método 'notice'
    }

    public function info($message, array $context = [])
    {
        // Implementação do método 'info'
    }

    public function debug($message, array $context = [])
    {
        // Implementação do método 'debug'
    }

    public function log($level, $message, array $context = [])
    {
        // Implementação do método 'log'
    }
}
*/
namespace App\Logging;

use Monolog\Logger;
use Monolog\Handler\AbstractProcessingHandler;
use Illuminate\Support\Facades\DB;

class DatabaseLogger extends AbstractProcessingHandler
{
    public function __construct($level = Logger::DEBUG, $bubble = true)
    {
        parent::__construct($level, $bubble);
    }

    protected function write(array $record): void
    {
        \DB::table('logs')->insert([
            'msg' => $record['message'],
            'contexto' => json_encode($record['context']),
            'nivel' => $record['level'],
            'nivel_nome' => $record['level_name'],
            'canal' => $record['channel'],
            'datetime' => $record['datetime']->format('Y-m-d H:i:s'),
            'extra' => json_encode($record['extra']),
        ]);

    }
}





