<?php
namespace Sky\UsuarioBundle\Entity;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of grupo
 *
 * @author ALF
 */
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Table(name="grupo")
 * @ORM\Entity
 */
class Grupo {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string") 
     */
    protected $nombre;
    
    /**
     * @ORM\ManyToMany(targetEntity="Usuario", inversedBy="grupo")
     */
    protected $usuario;
    public function __construct()
    {
        $this->usuario = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Add usuario
     *
     * @param Sky\UsuarioBundle\Entity\Usuario $usuario
     */
    public function addUsuario(\Sky\UsuarioBundle\Entity\Usuario $usuario)
    {
        $this->usuario[] = $usuario;
    }

    /**
     * Get usuario
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}