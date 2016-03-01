<?php

/**
 * Created by PhpStorm.
 * User: ryo_endo
 * Date: 2016/01/12
 * Time: 19:13
 */

namespace Plugin\GiftWrapping\Entity;

use Eccube\Entity\AbstractEntity;

class Wrapping extends AbstractEntity
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $user_id;

    /**
     * @var string
     */
    private $user_password;

    /**
     * @var boolean
     */
    private $is_wrapping;

    /**
     * @param integer $id
     * @return Wrapping
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param integer $user_id
     * @return Wrapping
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserPassword()
    {
        return $this->user_password;
    }

    /**
     * @param string $user_password
     * @return Wrapping
     */
    public function setUserPassword($user_password)
    {
        $this->user_password = $user_password;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsWrapping()
    {
        return $this->is_wrapping;
    }

    /**
     * @param boolean $is_wrapping
     * @return Wrapping
     */
    public function setIsWrapping($is_wrapping)
    {
        $this->is_wrapping = $is_wrapping;

        return $this;
    }
}