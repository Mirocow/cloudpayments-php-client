<?php

namespace CloudPayments\Model;

class Refund
{
    /**
     * @var integer
     */
    protected $id;


    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * @param $params
     * @return Transaction
     */
    public static function fromArray($params)
    {
        $transaction = new static();
        $transaction->setId($params['TransactionId']);
        return $transaction;
    }
}