<?php

namespace Kairos\ZohoInvoiceConnectorBundle\Model\Contact;

use Kairos\ZohoInvoiceConnectorBundle\Model AS BaseTrait;

/**
 * ContactConnector trait.
 *
 * Should be used inside entity, that needs to be linked to a zoho product.
 */
trait ContactConnectorSafe
{
    use ContactConnectorSafeProperties,
        ContactConnectorMethods,
        BaseTrait\Synced
        ;
}