<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SalesProductConnector\Communication\Plugin\Sales;

use Generated\Shared\Transfer\OrderTransfer;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\Sales\Dependency\Plugin\HydrateOrderPluginInterface;

/**
 * @deprecated Use {@link \Spryker\Zed\SalesProductConnector\Communication\Plugin\Sales\MetadataOrderItemExpanderPlugin} instead.
 *
 * @method \Spryker\Zed\SalesProductConnector\Business\SalesProductConnectorFacadeInterface getFacade()
 * @method \Spryker\Zed\SalesProductConnector\Persistence\SalesProductConnectorQueryContainerInterface getQueryContainer()
 * @method \Spryker\Zed\SalesProductConnector\SalesProductConnectorConfig getConfig()
 */
class ItemMetadataHydratorPlugin extends AbstractPlugin implements HydrateOrderPluginInterface
{
    /**
     * {@inheritDoc}
     * Specification:
     *   - Its a plugin which hydrates OrderTransfer when order read is persistence,
     *   - Can be used to add additional data to OrderTransfer
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\OrderTransfer $orderTransfer
     *
     * @return \Generated\Shared\Transfer\OrderTransfer
     */
    public function hydrate(OrderTransfer $orderTransfer)
    {
        return $this->getFacade()->hydrateItemMetadata($orderTransfer);
    }
}
