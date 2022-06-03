<?php

namespace Rorschach\UtilityBundle\Traits;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;

trait FormSubmitButtonTrait {
    public function addSubmitButton()
    {
        $this->add('submit', SubmitType::class, [
            'attr' => ['class' => 'btn btn-primary'],
            'translation_domain' => 'messages',
            'label' => 'generic.save',
        ]);
    }
}