<?php

namespace Sky\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Sky\UsuarioBundle\Entidad\UsuarioRepository;
use Sky\UsuarioBundle\Form\UsuarioType;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em= $this->get('doctrine')->getentityManager();
        return $this->render('SkyUsuarioBundle:estatica:index.html.twig', 
                array('last_name' => $this->get('request')->
                                      getSession()->get(SecurityContext::LAST_USERNAME), 
                       'error' => $this->get('request')->
                                        getSession()->get(SecurityContext::AUTHENTICATION_ERROR))
                            );
    }
    public function registroAction()
    {
        $em= $this->get('doctrine')->getEntityManager();
        $form=$this->get('form.factory')->create (new UsuarioType(), array());
        $request=$this->get('request');
        if($request->getMethod()=='POST')
        {
            $form->bindRequest($request);
            if($form->isValid())
            {
               
                $usuario = $form->getData();
                $usuario->setFoto('/sky/web/bundles/skyusuario/users/profile.png');
                $usuario->setSeguridad(0);
                $em->persist($usuario);
                $em->flush();
                return $this->redirect($this->generateUrl('index'));
            }
        }
        return $this->render('SkyUsuarioBundle:estatica:registro.html.twig',array('form'=> $form->createView()));
    }
    
    public function mejorarAction()
    {
        return $this->render('SkyUsuarioBundle:estatica:mejora.html.twig');
    }
    
    public function contactanosAction()
    {
        return $this->render('SkyUsuarioBundle:estatica:contactanos.html.twig');
    }
    
    public function plataformaAction()
    {
        return $this->render('SkyUsuarioBundle:estatica:plataforma.html.twig');
    }
}
?>