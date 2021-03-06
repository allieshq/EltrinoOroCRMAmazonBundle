<?php
/*
 * Copyright (c) 2014 Eltrino LLC (http://eltrino.com)
 *
 * Licensed under the Open Software License (OSL 3.0).
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://opensource.org/licenses/osl-3.0.php
 *
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@eltrino.com so we can send you a copy immediately.
 */
namespace Eltrino\OroCrmAmazonBundle\Model\OrderItem;

class ItemCodFeeInfo
{
    /**
     * @var string
     */
    private $codFeeCurrencyId;

    /**
     * @var string
     */
    private $codFeeAmount;

    /**
     * @var string
     */
    private $codFeeDiscountCurrencyId;

    /**
     * @var string
     */
    private $codFeeDiscountAmount;

    public function __construct($codFeeCurrencyId, $codFeeAmount, $codFeeDiscountCurrencyId,
                                $codFeeDiscountAmount)
    {
        $this->codFeeCurrencyId           = $codFeeCurrencyId;
        $this->codFeeAmount               = empty($codFeeAmount) ? null : $codFeeAmount;
        $this->codFeeDiscountCurrencyId   = $codFeeDiscountCurrencyId;
        $this->codFeeDiscountAmount       = empty($codFeeDiscountAmount) ? null : $codFeeDiscountAmount;
    }

    /**
     * @return string
     */
    public function getCodFeeCurrencyId()
    {
        return $this->codFeeCurrencyId;
    }

    /**
     * @return string
     */
    public function getCodFeeAmount()
    {
        return $this->codFeeAmount;
    }

    /**
     * @return string
     */
    public function getCodFeeDiscountCurrencyId()
    {
        return $this->codFeeDiscountCurrencyId;
    }

    /**
     * @return string
     */
    public function getCodFeeDiscountAmount()
    {
        return $this->codFeeDiscountAmount;
    }
} 