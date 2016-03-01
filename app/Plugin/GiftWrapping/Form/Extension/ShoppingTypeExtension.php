<?php
/**
 * Created by PhpStorm.
 * User: ryo_endo
 * Date: 2016/01/12
 * Time: 17:48
 */

namespace Plugin\GiftWrapping\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;

class ShoppingTypeExtension extends AbstractTypeExtension
{
    /**
     * @var \Eccube\Application
     */
    private $app;

    /**
     * ShoppingTypeExtension constructor.
     * @param \Eccube\Application $app
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gift_wrapping', 'choice', array(
                'choices' => array(
                    '1' => 'のしのようなもの',
                    '2' => 'リボン',
                    '3' => '紙包み',
                ),
                'expanded' => false,
                'multiple' => false,
                'required' => false,
                'empty_value' => 'ラッピングなし',
                'mapped' => false,
            ));
    }

    /**
     * Returns the name of the type being extended.
     *
     * @return string The name of the type being extended
     */
    public function getExtendedType()
    {
        return 'shopping';
    }
}