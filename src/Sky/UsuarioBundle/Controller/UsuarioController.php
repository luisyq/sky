<?php

namespace Sky\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sky\UsuarioBundle\Form\ComentarioType;
use Sky\UsuarioBundle\Entidad\UsuarioRepository;
use Doctrine\ORM\EntityRepository;

/**
 * Description of UsuarioController
 *
 * @author ALF
 */
class UsuarioController extends Controller {

    public function indexAction() {
       $em = $this->get('doctrine')->getEntityManager();
       $form= $this->get('form.factory')->create(new UsuarioType(), array());
       $request=$this->get('request');
       if ($request->getMethod() == 'POST') 
            {
            $form->bindRequest($request);
            if ($form->isValid()) {
                $usuario = $form->getData();
                $em->persist($usuario);
                $em->flush();
            }
        }
        $comentario = $em->getRepository('yoquieroblogBundle:Comentario')->todos_comentarios();
        return $this->render('yoquieroblogBundle:Default:index.html.twig'
                ,array('form'=> $form->createView(),
                       'comentario' => $comentario));
    }

    public function homeAction() {
        if (false == $this->get('security.context')->isGranted('ROLE_USER')) {
            throw new AccessDeniedException();
        } else {
            $user = $this->get('security.context')->getToken()->getUser();
            $em = $this->get('doctrine')->getEntityManager();
            $form = $this->get('form.factory')->create(new ComentarioType(), array());
            $request = $this->get('request');
            if ($request->getMethod() == 'POST') {
                $form->bindRequest($request);
                if ($form->isValid()) {
                    $comentario = $form->getData();
                    $comentario->setUsuario($user);
                    $comentario->setPara($user->getId());
                    $comentario->setFecha(new \DateTime('now'));
                    $em->persist($comentario);
                    $user->addComentarios($comentario);
                    $em->flush();
                    return $this->redirect($this->generateUrl('home'));
                }
            }
            $contactos = $em->getRepository('SkyUsuarioBundle:Usuario')->todos_usuarios();
            $comentarios= $em->getRepository('SkyUsuarioBundle:Comentario')->todos_comentarios($user->getId());
            return $this->render('SkyUsuarioBundle:usuario:home.html.twig', array('usuario' => $user,
                        'form' => $form->createView(),
                        'comentarios' => $comentarios,
                        'contactos' => $contactos));
        }
    }

    public function configAction() {
        return $this->render('SkyUsuarioBundle:usuario:config.html.twig');
    }

    public function perfilAction() {
        return $this->render('SkyUsuarioBundle:usuario:perfil.html.twig');
    }

    public function gruposAction() {
        return $this->render('SkyUsuarioBundle:usuario:grupos.html.twig');
    }

    public function agendaAction() {
        return $this->render('SkyUsuarioBundle:usuario:agenda.html.twig');
    }

    public function lugaresAction() {
        return $this->render('SkyUsuarioBundle:usuario:lugares.html.twig');
    }

}

?>
