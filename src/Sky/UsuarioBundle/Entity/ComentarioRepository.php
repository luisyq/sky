<?php

namespace Sky\UsuarioBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Description of UsuarioRepository
 *
 * @author ALF
 */
class ComentarioRepository extends EntityRepository {

    public function todos_comentarios($id) {

        $consulta = $this->getEntityManager()
        ->createQuery('
        SELECT c.contenido, u.foto, u.nick FROM Sky\UsuarioBundle\Entity\comentario c
        JOIN  c.usuario u
        WHERE u.id = :id'
        )->setParameter('id', $id);
        try {
            return $consulta->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
        /* $em = $this->getEntityManager();
          $query = $em->createQueryBuilder()
          ->select('c')
          ->from('Sky\UsuarioBundle\Entity\Comentario', 'c')
          ->where('c.usuario = :usuario')
          ->setParameter('usuario', $id)
          ->getQuery();
          return $query->getResult(); */
    }

}

?>