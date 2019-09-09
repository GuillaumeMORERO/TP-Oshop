<?php

class Type {
    private $id;
    private $name;
    private $footer_order;
    private $updated_at;
    private $created_at;


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */ 
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get the value of footerOrder
     */ 
    public function getFooterOrder()
    {
        return $this->footerOrder;
    }

    /**
     * Set the value of footerOrder
     */ 
    public function setFooterOrder($footerOrder)
    {
        $this->footerOrder = $footerOrder;
    }

    /**
     * Get the value of updatedAt
     */ 
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set the value of updatedAt
     */ 
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Get the value of createdAt
     */ 
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     */ 
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
}