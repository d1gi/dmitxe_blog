<?php

namespace SmartCore\Module\Widget\Form\Type;

use SmartCore\Bundle\CMSBundle\Module\AbstractNodePropertiesFormType;
use Symfony\Component\Form\FormBuilderInterface;

class NodePropertiesFormType extends AbstractNodePropertiesFormType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('node_id',    null,       ['required' => false, 'attr' => ['class' => 'input-block-level focused']])
            ->add('controller', null,       ['required' => false, 'attr' => ['class' => 'input-block-level']])
            ->add('params',     'textarea', ['required' => false, 'attr' => ['class' => 'input-block-level', 'cols' => 15, 'style' => 'height: 150px;']])
            ->add('open_tag',   'textarea', ['required' => false, 'attr' => ['class' => 'input-block-level', 'cols' => 5,  'style' => 'height: 78px;']])
            ->add('close_tag',  'textarea', ['required' => false, 'attr' => ['class' => 'input-block-level', 'cols' => 5,  'style' => 'height: 78px;']])
        ;
    }

    public function getName()
    {
        return 'smart_module_widget_node_properties';
    }
}
