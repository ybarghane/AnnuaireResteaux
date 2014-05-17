<?php

namespace Annuaire\RestoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RestaurantType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text',array('attr'=>array('class'=>'form-control','placeholder'=>'nom du restaurant')))
			->add('ville','choice',array('attr'=>array('class'=>'btn-primary')))
            ->add('article','textarea',array('attr'=>array('class'=>'form-control','rows'=>'3')))
            ->add('image',new ImageType() );
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Annuaire\RestoBundle\Entity\Restaurant'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'annuaire_restobundle_restaurant';
    }
}
