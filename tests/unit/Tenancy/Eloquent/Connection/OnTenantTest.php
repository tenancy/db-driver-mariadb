<?php declare(strict_types=1);

/*
 * This file is part of the tenancy/tenancy package.
 *
 * (c) Daniël Klabbers <daniel@klabbers.email>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see http://laravel-tenancy.com
 * @see https://github.com/tenancy
 */

namespace Tenancy\Tests\Eloquent\Connection;

use Tenancy\Environment;
use Tenancy\Testing\Mocks\OnTenantModel;
use Tenancy\Testing\TestCase;

class OnTenantTest extends TestCase
{
    /**
     * @test
     */
    public function uses_system_connection()
    {
        $this->assertEquals(
            Environment::getTenantConnectionName(),
            (new OnTenantModel())->getConnectionName()
        );
    }
}
