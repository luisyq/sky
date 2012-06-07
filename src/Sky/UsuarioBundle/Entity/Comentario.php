<?php
namespace Sky\UsuarioBundle\Entity;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of comentario
 *
 * @author ALF
 */
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="comentario")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Sky\UsuarioBundle\Entity\ComentarioRepository")
 */
class Comentario {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="integer") 
     */
    protected $para;
    
    /**
     * @ORM\Column(type="string") 
     */
    protected $contenido;
    
    /**
     * @ORM\Column(type="date") 
     */
    protected $fecha;

    /**
     * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="comentarios")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    protected $usuario;

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
     * Set para
     *
     * @param integer $para
     */
    public function setPara($para)
    {
        $this->para = $para;
    }

    /**
     * Get para
     *
     * @return integer 
     */
    public function getPara()
    {
        return $this->para;
    }

    /**
     * Set contenido
     *
     * @param string $contenido
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    }

    /**
     * Get contenido
     *
     * @return string 
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set fecha
     *
     * @param date $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * Get fecha
     *
     * @return date 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set usuario
     *
     * @param Sky\UsuarioBundle\Entity\Usuario $usuario
     */
    public function setUsuario(\Sky\UsuarioBundle\Entity\Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * Get usuario
     *
     * @return Sky\UsuarioBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}