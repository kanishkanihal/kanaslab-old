<?php

namespace Acme\AuthBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('username')
                ->add('salt')
                ->add('password')
                ->add('email')
                ->add('isActive')
                ->add('role', 'entity', array(
                    'class' => 'AcmeAuthBundle:Role',
                    'property' => 'name',
                    'multiple' => TRUE
                ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\AuthBundle\Entity\User'
        ));
    }

    public function getName()
    {
        return 'acme_authbundle_usertype';
    }

}
