<?php

namespace Rorschach\UtilityBundle\Traits;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormTypeInterface;

trait FormSubmitButtonTrait {
    public function addSubmitButton(FormTypeInterface $formType): FormTypeInterface
    {
        return $formType->add('submit', SubmitType::class, [
            'attr' => ['class' => 'btn btn-primary'],
            'translation_domain' => 'messages',
            'label' => 'generic.save',
        ]);
    }
}