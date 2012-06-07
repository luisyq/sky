<?php
namespace Sky\UsuarioBundle\Entity;
use Doctrine\ORM\EntityRepository;
/**
 * Description of UsuarioRepository
 *
 * @author ALF
 */
class UsuarioRepository extends EntityRepository
{
    public function todos_usuarios()
    {
        return $this->getEntityManager()->createQuery('select u from Sky\UsuarioBundle\Entity\Usuario u ORDER BY u.nombre ASC')->getResult();
    }
    public function todos_comentarios()
    {
        return $this->getEntityManager()->createQuery('select c from Sky\UsuarioBundle\Entity\Usuario u Sky\UsuarioBundle\Entity\Comentario where u.id=c.id');
    }
}

?>
