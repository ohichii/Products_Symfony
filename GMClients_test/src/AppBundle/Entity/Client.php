<?php
// src/AppBundle/Entity/Product.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validation\Constraints AS Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="client")
 */
class Client
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_client;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name_client;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $email_client;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $phone_client;

    /**
     * @ORM\Column(type="text")
     */
    private $description_client;

    /**
     * @ORM\OneToMany(targetEntity="Product", mappedBy="client")
     */
    private $products;

    /**
     * Get the value of Id Client
     *
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->id_client;
    }

    /**
     * Set the value of Id Client
     *
     * @param mixed id_client
     *
     * @return self
     */
    public function setIdClient($id_client)
    {
        $this->id_client = $id_client;

        return $this;
    }

    /**
     * Get the value of Name Client
     *
     * @return mixed
     */
    public function getNameClient()
    {
        return $this->name_client;
    }

    /**
     * Set the value of Name Client
     *
     * @param mixed name_client
     *
     * @return self
     */
    public function setNameClient($name_client)
    {
        $this->name_client = $name_client;

        return $this;
    }

    /**
     * Get the value of Email Client
     *
     * @return string
     */
    public function getEmailClient()
    {
        return $this->email_client;
    }

    /**
     * Set the value of Email Client
     *
     * @param string email_client
     *
     * @return self
     */
    public function setEmailClient($email_client)
    {
        $this->email_client = $email_client;

        return $this;
    }

    /**
     * Get the value of Phone Client
     *
     * @return mixed
     */
    public function getPhoneClient()
    {
        return $this->phone_client;
    }

    /**
     * Set the value of Phone Client
     *
     * @param mixed phone_client
     *
     * @return self
     */
    public function setPhoneClient($phone_client)
    {
        $this->phone_client = $phone_client;

        return $this;
    }

    /**
     * Get the value of Description Client
     *
     * @return mixed
     */
    public function getDescriptionClient()
    {
        return $this->description_client;
    }

    /**
     * Set the value of Description Client
     *
     * @param mixed description_client
     *
     * @return self
     */
    public function setDescriptionClient($description_client)
    {
        $this->description_client = $description_client;

        return $this;
    }

}

 ?>
