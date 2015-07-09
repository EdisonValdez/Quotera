<?php

namespace Quotera\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class userInfoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('companyName')
            ->add('companyDescription')
            ->add('products')
            ->add('category')
            ->add('email')
            ->add('phone')
            ->add('address')
            ->add('cp')
            ->add('country', 'country')
            ->add('city')
            ->add('owner')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Quotera\UserBundle\Entity\userInfo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'quotera_userbundle_userinfo';
    }


}
