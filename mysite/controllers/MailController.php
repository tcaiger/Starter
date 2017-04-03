<?php

class MailController extends Controller {

    private $testEmail = 'tom@swordfox.nz';
    private $adminEmail = 'tom@swordfox.nz';
    private $bccEmail = 'alerts@swordfox.nz';
    private $sendGridKey = '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';

    public Function init() {
        parent::init();
    }


    // -------------------------
    // METHODS
    // -------------------------

    public function SendEmail($body) {

        $recipient = Director::isLive() ? $this->adminEmail : $this->testEmail;

        $from = new SendGrid\Email(null, $recipient);
        $subject = "Website Contact Form";
        $to = new SendGrid\Email(null, $recipient);
        $content = new SendGrid\Content("text/html", $body);
        $mail = new SendGrid\Mail($from, $subject, $to, $content);

        // BCC Swordfox
        $bcc = new SendGrid\Email(null, $this->bccEmail);
        $mail->personalization[0]->addBcc($bcc);

        $sg = new \SendGrid($this->sendGridKey);

        $sg->client->mail()->send()->post($mail);

        return true;
    }



    // -------------------------
    // EMAILS
    // -------------------------

    /**
     * @param $data
     * @return bool
     */
    public function ContactFormEmail($data) {

        $data = Convert::raw2xml($data);

        $body = "
            <p>Hi ...,<br><br>Someone has submitted an enquiry from the Contact Page of the website.<br><br></p>
        ";

        foreach ($data as $name => $value) {
            if (
                $name != 'url' &&
                $name != 'HiddenCaptcha' &&
                $name != 'g-recaptcha-response' &&
                $name != 'SecurityID' &&
                $name != 'action_SubmitContactForm'
            ) {
                $body = $body . "<p><strong>$name:</strong> $value</p>";
            }
        }

        $this->SendEmail($body);

        return true;
    }


}