<?php

namespace Acme\AuthBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('username')
                ->add('salt')
                ->add('password')
                ->add('email','email')
                ->add('isActive')
                ->add('birthDate', 'birthday', array(
                    'widget' => 'choice',
                    'format' => 'yyyy-MMMM-dd',
                    'years' => range(1977,date('Y')),
                    
                ))
                ->add('role', 'entity', array(
                    'class' => 'AcmeAuthBundle:Role',
                    'property' => 'name',
                    'multiple' => TRUE
                ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\AuthBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acme_authbundle_usertype';
    }

}
