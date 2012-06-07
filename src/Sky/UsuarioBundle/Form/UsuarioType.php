<?php
namespace Sky\UsuarioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
/**
 * Description of UsuarioType
 *
 * @author ALF
 */
class UsuarioType extends AbstractType{
    
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('nombre', 'text', array())
                ->add('email', 'email')
                ->add('password', 'password')
                ->add('sexo')
                ->add('nick')
                ->add('fecha_nacimiento')
                ->add('ciudad');
    }
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => "Sky\UsuarioBundle\Entity\Usuario"
        );
    }
    public function getName()
    {
        return 'hey';
    }
}

?>
