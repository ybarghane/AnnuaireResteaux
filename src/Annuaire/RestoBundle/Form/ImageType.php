<?php

namespace Annuaire\RestoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('file','file',array('required'=>false)) ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Annuaire\RestoBundle\Entity\Image'
        ));
    }

    public function getName()
    {
        return 'test_blogbundle_imagetype';
    }
}
