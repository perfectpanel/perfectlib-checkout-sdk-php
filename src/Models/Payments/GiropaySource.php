<?php

/**
 * Checkout.com
 * Authorised and regulated as an electronic money institution
 * by the UK Financial Conduct Authority (FCA) under number 900816.
 *
 * PHP version 7
 *
 * @category  SDK
 * @package   Checkout.com
 * @author    Platforms Development Team <platforms@checkout.com>
 * @copyright 2010-2019 Checkout.com
 * @license   https://opensource.org/licenses/mit-license.html MIT License
 * @link      https://docs.checkout.com/
 */

namespace Perfectpanel\Checkout\Models\Payments;

/**
 * Payment method GiroPay.
 *
 * @category SDK
 * @package  Checkout.com
 * @author   Platforms Development Team <platforms@checkout.com>
 * @license  https://opensource.org/licenses/mit-license.html MIT License
 * @link     https://docs.checkout.com/
 */
class GiropaySource extends IdSource
{

    /**
     * Qualified name of the class.
     *
     * @var string
     */
    const QUALIFIED_NAME = __CLASS__;

    /**
     * Name of the model.
     *
     * @var string
     */
    const MODEL_NAME = 'giropay';
    
    /**
     * API Request banks URL.
     *
     * @var string
     */
    const MODEL_REQUEST_BANKS_URL = 'giropay/banks';


    /**
     * Magic Methods
     */

    /**
     * Initialise giropay.
     *
     * @param string   $purpose
     * @param int      $bic
     */
    public function __construct($purpose, $bic)
    {
        $this->type = static::MODEL_NAME;
        $this->purpose = $purpose;
        $this->bic = $bic;
    }
}
