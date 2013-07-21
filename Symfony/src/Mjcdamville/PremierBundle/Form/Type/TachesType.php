<?php

namespace Mjcdamville\PremierBundle\Form\Type;

use Propel\PropelBundle\Form\BaseAbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TachesType extends BaseAbstractType
{
    protected $options = array(
        'data_class' => 'Acme\DemoBundle\Model\Taches',
        'name'       => 'taches',
    );

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('description');
        $builder->add('realisee');
    }
}
