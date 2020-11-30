<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\CommonSchema\ArrayCollection\Organization;

use Gpupo\CommonSchema\ArrayCollection\Thing\AbstractPhone;

final class AlternativePhone extends AbstractPhone
{
    protected $tableName = 'organization_company_alternative_phone';
}
