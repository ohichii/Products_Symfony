<?php
// src/AppBundle/Entity/Product.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 */
class Product
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name_product;

    /**
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="products")
     * @ORM\JoinColumn(name="id_client", referencedColumnName="id_client")
     */
    private $client;

    /**
     * @ORM\Column(type="json_array")
     */
    private $services_list;

    /**
     * @ORM\Column(type="json_array")
     */
    private $collaborators;

    /**
     * @ORM\Column(type="text")
     */
    private $description_product;

    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Client Id
     *
     * @return mixed
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set the value of Client Id
     *
     * @param mixed client_id
     *
     * @return self
     */
    public function setClient($client)
    {
        $this->client_id = $client;

        return $this;
    }

    /**
     * Get the value of Services List
     *
     * @return mixed
     */
    public function getServicesList()
    {
        return $this->services_list;
    }

    /**
     * Set the value of Services List
     *
     * @param mixed services_list
     *
     * @return self
     */
    public function setServicesList($services_list)
    {
        $this->services_list = $services_list;

        return $this;
    }

    /**
     * Get the value of Collaborators
     *
     * @return mixed
     */
    public function getCollaborators()
    {
        return $this->collaborators;
    }

    /**
     * Set the value of Collaborators
     *
     * @param mixed collaborators
     *
     * @return self
     */
    public function setCollaborators($collaborators)
    {
        $this->collaborators = $collaborators;

        return $this;
    }

    /**
     * Get the value of Description
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of Description
     *
     * @param mixed description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }



    /**
     * Get the value of Name Product
     *
     * @return mixed
     */
    public function getNameProduct()
    {
        return $this->name_product;
    }

    /**
     * Set the value of Name Product
     *
     * @param mixed name_product
     *
     * @return self
     */
    public function setNameProduct($name_product)
    {
        $this->name_product = $name_product;

        return $this;
    }

    /**
     * Get the value of Description Product
     *
     * @return mixed
     */
    public function getDescriptionProduct()
    {
        return $this->description_product;
    }

    /**
     * Set the value of Description Product
     *
     * @param mixed description_product
     *
     * @return self
     */
    public function setDescriptionProduct($description_product)
    {
        $this->description_product = $description_product;

        return $this;
    }

}

 ?>
