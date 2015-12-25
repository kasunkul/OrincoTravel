<?php

namespace DWM\VoucherBundle\Entity;

/**
 * Voucher
 */
class Voucher
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $vouchno;

    /**
     * @var int
     */
    private $agentcode;

    /**
     * @var string
     */
    private $date;

    /**
     * @var string
     */
    private $bookingref;

    /**
     * @var string
     */
    private $remark;

    /**
     * @var string
     */
    private $officer;

    /**
     * @var float
     */
    private $fsubtotal;

    /**
     * @var float
     */
    private $yqyr;

    /**
     * @var float
     */
    private $tax;

    /**
     * @var float
     */
    private $gtotal;

    /**
     * @var float
     */
    private $lessplus;

    /**
     * @var float
     */
    private $ntotal;

    /**
     * @var string
     */
    private $approved;

    /**
     * @var string
     */
    private $pending;

    /**
     * @var string
     */
    private $flag;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set vouchno
     *
     * @param integer $vouchno
     *
     * @return Voucher
     */
    public function setVouchno($vouchno)
    {
        $this->vouchno = $vouchno;

        return $this;
    }

    /**
     * Get vouchno
     *
     * @return int
     */
    public function getVouchno()
    {
        return $this->vouchno;
    }

    /**
     * Set agentcode
     *
     * @param integer $agentcode
     *
     * @return Voucher
     */
    public function setAgentcode($agentcode)
    {
        $this->agentcode = $agentcode;

        return $this;
    }

    /**
     * Get agentcode
     *
     * @return int
     */
    public function getAgentcode()
    {
        return $this->agentcode;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Voucher
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set bookingref
     *
     * @param string $bookingref
     *
     * @return Voucher
     */
    public function setBookingref($bookingref)
    {
        $this->bookingref = $bookingref;

        return $this;
    }

    /**
     * Get bookingref
     *
     * @return string
     */
    public function getBookingref()
    {
        return $this->bookingref;
    }

    /**
     * Set remark
     *
     * @param string $remark
     *
     * @return Voucher
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

        return $this;
    }

    /**
     * Get remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Set officer
     *
     * @param string $officer
     *
     * @return Voucher
     */
    public function setOfficer($officer)
    {
        $this->officer = $officer;

        return $this;
    }

    /**
     * Get officer
     *
     * @return string
     */
    public function getOfficer()
    {
        return $this->officer;
    }

    /**
     * Set fsubtotal
     *
     * @param float $fsubtotal
     *
     * @return Voucher
     */
    public function setFsubtotal($fsubtotal)
    {
        $this->fsubtotal = $fsubtotal;

        return $this;
    }

    /**
     * Get fsubtotal
     *
     * @return float
     */
    public function getFsubtotal()
    {
        return $this->fsubtotal;
    }

    /**
     * Set yqyr
     *
     * @param float $yqyr
     *
     * @return Voucher
     */
    public function setYqyr($yqyr)
    {
        $this->yqyr = $yqyr;

        return $this;
    }

    /**
     * Get yqyr
     *
     * @return float
     */
    public function getYqyr()
    {
        return $this->yqyr;
    }

    /**
     * Set tax
     *
     * @param float $tax
     *
     * @return Voucher
     */
    public function setTax($tax)
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * Get tax
     *
     * @return float
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Set gtotal
     *
     * @param float $gtotal
     *
     * @return Voucher
     */
    public function setGtotal($gtotal)
    {
        $this->gtotal = $gtotal;

        return $this;
    }

    /**
     * Get gtotal
     *
     * @return float
     */
    public function getGtotal()
    {
        return $this->gtotal;
    }

    /**
     * Set lessplus
     *
     * @param float $lessplus
     *
     * @return Voucher
     */
    public function setLessplus($lessplus)
    {
        $this->lessplus = $lessplus;

        return $this;
    }

    /**
     * Get lessplus
     *
     * @return float
     */
    public function getLessplus()
    {
        return $this->lessplus;
    }

    /**
     * Set ntotal
     *
     * @param float $ntotal
     *
     * @return Voucher
     */
    public function setNtotal($ntotal)
    {
        $this->ntotal = $ntotal;

        return $this;
    }

    /**
     * Get ntotal
     *
     * @return float
     */
    public function getNtotal()
    {
        return $this->ntotal;
    }

    /**
     * Set approved
     *
     * @param string $approved
     *
     * @return Voucher
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;

        return $this;
    }

    /**
     * Get approved
     *
     * @return string
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * Set pending
     *
     * @param string $pending
     *
     * @return Voucher
     */
    public function setPending($pending)
    {
        $this->pending = $pending;

        return $this;
    }

    /**
     * Get pending
     *
     * @return string
     */
    public function getPending()
    {
        return $this->pending;
    }

    /**
     * Set flag
     *
     * @param string $flag
     *
     * @return Voucher
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * Get flag
     *
     * @return string
     */
    public function getFlag()
    {
        return $this->flag;
    }
}

