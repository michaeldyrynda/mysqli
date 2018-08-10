<?php

namespace Dyrynda\Database;

use MySQLi as BaseMySQLi;

class MySQLi extends BaseMySQLi
{
    public function quote($binding)
    {
        return $this->real_escape_string($binding);
    }
}
