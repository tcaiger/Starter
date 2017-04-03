<?php

class ContactForm extends Form {

    /**
     * ContactForm constructor.
     * @param Controller $controller
     * @param string $name
     */
    public function __construct($controller, $name) {

        $fields = FieldList::create(
            CompositeField::create(
                TextField::create('FirstName')->setAttribute('placeholder', 'First Name *'),
                TextField::create('Surname')->setAttribute('placeholder', 'Surname *')
            ),
            CompositeField::create(
                TextField::create('Phone')->setAttribute('placeholder', 'Phone *'),
                TextField::create('Email')->setAttribute('placeholder', 'Email *')
            ),
            DropdownField::create('HowDidYouHearAboutUs', 'How Did You Hear About Us?', [
                'Google'              => 'Google',
                'Other Search Engine' => 'Other Search Engine',
                'Advertisement'       => 'Advertisement',
                'Facebook'            => 'Facebook',
                'Word Of Mouth'       => 'Word Of Mouth',
                'Other'               => 'Other'
            ])->setEmptyString('How Did You Hear About Us?'),
            TextareaField::create('Message')->setAttribute('placeholder', 'Message *')->setRows(8)
        );

        $actions = new FieldList(
            FormAction::create('submitcontactform', 'Send Message')
                ->addExtraClass('c-btn--primary')
                ->setUseButtonTag(true)
        );

        $required = new RequiredFields([
            'FirstName', 'Surname', 'Email', 'Phone', 'Message'
        ]);

        parent::__construct($controller, $name, $fields, $actions, $required);


        $this->setAttribute('novalidate', 'novalidate')
            ->setRedirectToFormOnValidationError(true)
            ->addExtraClass('contact-form')
            ->enableSpamProtection();
    }

    /**
     * @param $data
     * @param $form
     * @return mixed
     */
    function submitcontactform($data, $form) {

        // Send email
        $mail = new MailController;
        $sent = $mail->ContactFormEmail($data);

        if ($sent) {
            $form->sessionMessage("Thanks for your enquiry, we'll get back to you soon.", 'good');
        } else {
            $form->sessionMessage("There was a problem with the form. Please try again.", 'bad');
        }

        $url = $this->controller->link('#hero-anchor');

        return $this->controller->redirect($url);
    }
}