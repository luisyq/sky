<?php
namespace Sky\UsuarioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
/**
 * Description of ComentarioType
 *
 * @author ALF
 */
class ComentarioType extends AbstractType{
    
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('contenido', 'textarea', array('label' => ' '));
    }
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => "Sky\UsuarioBundle\Entity\Comentario"
        );
    }
    public function getName()
    {
        return 'comentario';
    }
}
?>
