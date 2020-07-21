<?php
declare(strict_types=1);

namespace App\Classes\Database;

use Illuminate\Database\Schema\Blueprint as BaseBlueprint;

class Blueprint extends BaseBlueprint
{
    public function dropTimestamps()
    {
        $this->dropColumn('created_at', 'updated_at');
    }

    public function timestamps($precision = 0)
    {
        $this->timestamp('created', $precision)->nullable();

        $this->timestamp('updated', $precision)->nullable();
    }
}
