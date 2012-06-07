<?php

namespace Sky\UsuarioBundle\Entity;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuario
 *
 * @author ALF
 */
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Sky\UsuarioBundle\Entity\UsuarioRepository")
 */
class Usuario implements UserInterface{

    public function getUsername() {
        return $this->email;
    }
    public function eraseCredentials() {
        return array();
    }
    public function getSalt() {
        return false;
    }
    public function getRoles() {
        return array('ROLE_USER');
    }
    public function equals(UserInterface $user) {
        return $this->getUsername()==$user->getUsername();
    }
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\Column(type="string") 
     */
    protected $nick;

    /**
     * @ORM\Column(type="string") 
     */
    protected $nombre;

    /**
     * @ORM\Column(type="string") 
     */
    protected $email;

    /**
     * @ORM\Column(type="string") 
     */
    protected $password;

    /**
     * @ORM\Column(type="string", length="1") 
     */
    protected $sexo;

    /**
     * @ORM\Column(type="date") 
     */
    protected $fecha_nacimiento;

    /**
     * @ORM\Column(type="string") 
     */
    protected $ciudad;

    /**
     * @ORM\Column(type="integer") 
     */
    protected $seguridad;

    /**
     * @ORM\Column(type="string")
     */
    protected $foto;

    /**
     * @ORM\ManyToMany(targetEntity="Grupo", inversedBy="usuario")
     * @ORM\JoinTable(name="usuarios_grupos",
     * joinColumns={@ORM\JoinColumn(name="usuario_id", referencedColumnName="id")},
     * inverseJoinColumns={@ORM\JoinColumn(name="grupo_id", referencedColumnName="id")}
     * )
     */
    protected $grupo;

    /**
     * @ORM\OneToMany(targetEntity="Comentario", mappedBy="usuario")
     */
    protected $comentarios;
    public function __construct()
    {
        $this->grupo = new \Doctrine\Common\Collections\ArrayCollection();
        $this->comentarios = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nick
     *
     * @param string $nick
     */
    public function setNick($nick)
    {
        $this->nick = $nick;
    }

    /**
     * Get nick
     *
     * @return string 
     */
    public function getNick()
    {
        return $this->nick;
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
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set fecha_nacimiento
     *
     * @param date $fechaNacimiento
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fecha_nacimiento = $fechaNacimiento;
    }

    /**
     * Get fecha_nacimiento
     *
     * @return date 
     */
    public function getFechaNacimiento()
    {
        return $this->fecha_nacimiento;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set seguridad
     *
     * @param integer $seguridad
     */
    public function setSeguridad($seguridad)
    {
        $this->seguridad = $seguridad;
    }

    /**
     * Get seguridad
     *
     * @return integer 
     */
    public function getSeguridad()
    {
        return $this->seguridad;
    }

    /**
     * Set foto
     *
     * @param string $foto
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Add grupo
     *
     * @param Sky\UsuarioBundle\Entity\Grupo $grupo
     */
    public function addGrupo(\Sky\UsuarioBundle\Entity\Grupo $grupo)
    {
        $this->grupo[] = $grupo;
    }

    /**
     * Get grupo
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Add comentarios
     *
     * @param Sky\UsuarioBundle\Entity\Comentario $comentarios
     */
    public function addComentarios(\Sky\UsuarioBundle\Entity\Comentario $comentarios)
    {
        $this->comentarios[] = $comentarios;
    }

    /**
     * Get comentarios
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }
}