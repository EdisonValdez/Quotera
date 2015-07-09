<?php
/**
 * Created by PhpStorm.
 * User: Yerno
 * Date: 7/6/15
 * Time: 5:48 PM
 */

namespace Quotera\UserBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Quotera\UserBundle\Form\userInfoType;

class ProfileFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // add your custom field
        $builder
            ->add('companyName', new userInfoType())
            ->add('companyDescription', new userInfoType())
            ->add('products', new userInfoType())
            ->add('phone', new userInfoType());
    }

    public function getParent()
    {
        return 'fos_user_profile';
    }

    public function getName()
    {
        return 'quotera_user_profile';
    }
}