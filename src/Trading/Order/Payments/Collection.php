<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/common-schema
 * Created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file
 * LICENSE which is distributed with this source code.
 * Para a informação dos direitos autorais e de licença você deve ler o arquivo
 * LICENSE que é distribuído com este código-fonte.
 * Para obtener la información de los derechos de autor y la licencia debe leer
 * el archivo LICENSE que se distribuye con el código fuente.
 * For more information, see <https://opensource.gpupo.com/>.
 *
 */

namespace Gpupo\CommonSchema\Trading\Order\Payments;

<<<<<<< HEAD
use Gpupo\Common\Entity\CollectionInterface;
use Gpupo\CommonSdk\Entity\CollectionAbstract;
use Gpupo\CommonSdk\Entity\CollectionContainerInterface;
use Gpupo\CommonSchema\Trading\Payment\Payment;
=======
use Gpupo\CommonSchema\Thing\AbstractCollection;
>>>>>>> 2c3b65c911569879f9907760eb3bc6ccf873a570

class Collection extends AbstractCollection
{
    public function factoryElement($data)
    {
        return new Payment($data);
    }
}
