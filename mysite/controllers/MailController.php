<?php

class MailController extends Controller {

    public $adminEmail = 'caigertom@gmail.com';
    public $bccEmail = 'tom@swordfox.nz';

    public Function init() {
        parent::init();
    }



    // -------------------------
    // METHODS
    // -------------------------

    public function SendEmail($body) {


        $from = new SendGrid\Email(null, $this->adminEmail);
        $subject = "A1 Labour Website Update";
        $to = new SendGrid\Email(null, $this->adminEmail);
        $content = new SendGrid\Content("text/html", $body);
        $mail = new SendGrid\Mail($from, $subject, $to, $content);

        // BCC Swordfox
        $bcc = new SendGrid\Email(null, $this->bccEmail);
        $mail->personalization[0]->addBcc($bcc);

        $sg = new \SendGrid('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');
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
            <p>Hi A1 Labour Administrator,<br><br>Someone has submitted an enquiry from the Contact Page of the website.<br></p>
        ";

        foreach ($data as $name => $value) {
            if (
                $name != 'url' &&
                $name != 'HiddenCaptcha' &&
                $name != 'g-recaptcha-response' &&
                $name != 'SecurityID' &&
                $name != 'action_SubmitContactForm' &&
                $name != 'action_SubmitBookingForm'
            ) {
                $body = $body . "<p><strong>$name:</strong> $value</p>";
            }
        }

        $this->SendEmail($body);

        return true;
    }


    /**
     * @param $data
     * @return bool
     */
    public function NewApplicationEmail($employee, $listing) {

        $body = "
            <p>Hi A1 Labour Administrator,<br><br>Someone has submitted a new application on the website. Please login to the CMS to review the application.<br></p>
             <p><strong>Employee: </strong>$employee->FirstName $employee->Surname</p>
             <p><strong>Listing: </strong>$listing->Title</p>
        ";

        $this->SendEmail($body);

        return true;
    }


    /**
     * @param $data
     * @return bool
     */
    public function NewListingEmail($employer, $listing) {

        $body = "
            <p>Hi A1 Labour Administrator,<br><br>Someone has submitted a new listing on the website. Please login to the CMS to review the listing.<br></p>
            <p><strong>Employer: </strong>$employer->FirstName $employer->Surname</p>
             <p><strong>Listing: </strong>$listing->Title</p>
        ";

        $this->SendEmail($body);

        return true;
    }


    /**
     * @param $data
     * @return bool
     */
    public function NewMemberEmail($member) {

        $body = "
            <p>Hi A1 Labour Hire Administrator,<br><br>A new user has registered to be a member on the website. Please login to the CMS to review the application.<br></p>
             <p><strong>Name: </strong>$member->FirstName $member->Surname</p>"

            . "end of email";

        $this->SendEmail($body);

        return true;
    }

    /**
     * @param $employee
     * @return bool
     */
    public function EmployeeUpdateEmail($employee) {

        $body = "
            <p>Hi A1 Labour Hire Administrator,<br><br>A new employee has updated their member details. Please login to the CMS to review the updates.<br></p>
             <p><strong>Name: </strong>$employee->FirstName $employee->Surname</p>"

            . "end of email";

        $this->SendEmail($body);

        return true;
    }


    /**
     * @param $id
     * @return bool
     */
    public function RequestEmail($id) {

        $employer = Member::currentUser();
        $employee = Member::get()->byID($id);

        $body =
            "<p>Hi A1 Labour Hire Administrator,<br><br>An employer has requested one of you employees through the website.<br></p>" .
            "<p><strong>Employer name: </strong>" . $employer->FirstName . " " . $employer->Surname . "</p>" .
            "<p><strong>Employee name: </strong>" . $employee->FirstName . " " . $employee->Surname . "</p>"

            . "end of email";


        $this->SendEmail($body);

        return true;
    }


}