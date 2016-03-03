<?php

/*
 * This file is part of the PluginGenerator
 *
 * Copyright (C) 2016 Cule Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\PluginGenerator\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class PluginGeneratorConfigType extends AbstractType
{
    protected $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
            ))
            ->add('code', 'text', array(
                'constraints' => array(
                    new Assert\NotBlank(),
                    new Assert\Regex(array('pattern' => '/^[A-Z][0-9a-zA-Z]*$/')),
                ),
            ))
            ->add('version', 'text', array(
                'constraints' => array(
                    new Assert\NotBlank(),
                    new Assert\Regex(array('pattern' => '/^\d+.\d+.\d+$/')),
                ),
            ))
            ->add('author', 'text', array(
                'constraints' => array(
                    new Assert\NotBlank(),
                ),
            ))
            ;
    }


    public function getName()
    {
        return 'plugingenerator_config';
    }
}
