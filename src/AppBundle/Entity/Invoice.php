<?php

namespace AppBundle\Entity;

/**
 * Invoices
 */
class Invoice
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $invoiceNumber;

    /**
     * @var \DateTime
     */
    private $dateOfInvoice = 'now()';

    /**
     * @var \DateTime
     */
    private $sellDate = 'now()';

    /**
     * @var \DateTime
     */
    private $maturityDate = 'now()';

    /**
     * @var string
     */
    private $additionalInfo;

    /**
     * @var string
     */
    private $sellerVatNumber;

    /**
     * @var string
     */
    private $sellerName;

    /**
     * @var string
     */
    private $sellerAddress;

    /**
     * @var string
     */
    private $buyerVatNumber;

    /**
     * @var string
     */
    private $buyerName;

    /**
     * @var string
     */
    private $buyerAddress;

    /**
     * @var string
     */
    private $totalPrice;

    /**
     * @var \AppBundle\Entity\User
     */
    private $user;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set invoiceNumber
     *
     * @param string $invoiceNumber
     *
     * @return Invoice
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }

    /**
     * Get invoiceNumber
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * Set dateOfInvoice
     *
     * @param \DateTime $dateOfInvoice
     *
     * @return Invoice
     */
    public function setDateOfInvoice($dateOfInvoice)
    {
        $this->dateOfInvoice = $dateOfInvoice;

        return $this;
    }

    /**
     * Get dateOfInvoice
     *
     * @return \DateTime
     */
    public function getDateOfInvoice()
    {
        return $this->dateOfInvoice;
    }

    /**
     * Set sellDate
     *
     * @param \DateTime $sellDate
     *
     * @return Invoice
     */
    public function setSellDate($sellDate)
    {
        $this->sellDate = $sellDate;

        return $this;
    }

    /**
     * Get sellDate
     *
     * @return \DateTime
     */
    public function getSellDate()
    {
        return $this->sellDate;
    }

    /**
     * Set maturityDate
     *
     * @param \DateTime $maturityDate
     *
     * @return Invoice
     */
    public function setMaturityDate($maturityDate)
    {
        $this->maturityDate = $maturityDate;

        return $this;
    }

    /**
     * Get maturityDate
     *
     * @return \DateTime
     */
    public function getMaturityDate()
    {
        return $this->maturityDate;
    }

    /**
     * Set additionalInfo
     *
     * @param string $additionalInfo
     *
     * @return Invoice
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }

    /**
     * Get additionalInfo
     *
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * Set sellerVatNumber
     *
     * @param string $sellerVatNumber
     *
     * @return Invoice
     */
    public function setSellerVatNumber($sellerVatNumber)
    {
        $this->sellerVatNumber = $sellerVatNumber;

        return $this;
    }

    /**
     * Get sellerVatNumber
     *
     * @return string
     */
    public function getSellerVatNumber()
    {
        return $this->sellerVatNumber;
    }

    /**
     * Set sellerName
     *
     * @param string $sellerName
     *
     * @return Invoice
     */
    public function setSellerName($sellerName)
    {
        $this->sellerName = $sellerName;

        return $this;
    }

    /**
     * Get sellerName
     *
     * @return string
     */
    public function getSellerName()
    {
        return $this->sellerName;
    }

    /**
     * Set sellerAddress
     *
     * @param string $sellerAddress
     *
     * @return Invoice
     */
    public function setSellerAddress($sellerAddress)
    {
        $this->sellerAddress = $sellerAddress;

        return $this;
    }

    /**
     * Get sellerAddress
     *
     * @return string
     */
    public function getSellerAddress()
    {
        return $this->sellerAddress;
    }

    /**
     * Set buyerVatNumber
     *
     * @param string $buyerVatNumber
     *
     * @return Invoice
     */
    public function setBuyerVatNumber($buyerVatNumber)
    {
        $this->buyerVatNumber = $buyerVatNumber;

        return $this;
    }

    /**
     * Get buyerVatNumber
     *
     * @return string
     */
    public function getBuyerVatNumber()
    {
        return $this->buyerVatNumber;
    }

    /**
     * Set buyerName
     *
     * @param string $buyerName
     *
     * @return Invoice
     */
    public function setBuyerName($buyerName)
    {
        $this->buyerName = $buyerName;

        return $this;
    }

    /**
     * Get buyerName
     *
     * @return string
     */
    public function getBuyerName()
    {
        return $this->buyerName;
    }

    /**
     * Set buyerAddress
     *
     * @param string $buyerAddress
     *
     * @return Invoice
     */
    public function setBuyerAddress($buyerAddress)
    {
        $this->buyerAddress = $buyerAddress;

        return $this;
    }

    /**
     * Get buyerAddress
     *
     * @return string
     */
    public function getBuyerAddress()
    {
        return $this->buyerAddress;
    }

    /**
     * Set totalPrice
     *
     * @param string $totalPrice
     *
     * @return Invoice
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * Get totalPrice
     *
     * @return string
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Invoice
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}

