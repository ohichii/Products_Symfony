<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class ProductType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name_product')
                ->add('services_list', ChoiceType::class, array(
                    'choices' => array(
                        'Site' => 'Site',
                        'SEO/SEM' => 'SEO/SEM',
                        'LOGO' => 'LOGO',
                        'FOTO' => 'FOTO',
                        'VIDEO' => 'VIDEO'),
                        'multiple' => true,))
                ->add('collaborators', ChoiceType::class, array(
                    'choices' => array(
                        'Alessandro' => 'Alessandro',
                        'Hamza' => 'Hamza',
                        'Giorgio' => 'Giorgio',
                        'Ivan' => 'Ivan'),
                        'multiple' => true,))
                ->add('description_product');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Product'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_product';
    }


}
