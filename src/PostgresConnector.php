<?php

namespace Braumye\LaravelVercelPostgres;

use Illuminate\Database\Connectors\PostgresConnector as Base;

class PostgresConnector extends Base
{
    protected function getDsn(array $config)
    {
        $dsn = parent::getDsn($config);
        if (isset($config['host'])) {
            $dsn .= ';options=endpoint='.head(explode('.', $config['host']));
        }

        return $dsn;
    }
}
