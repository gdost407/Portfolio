<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function thankyouhtml()
    {
        $_POST['name'] = 'Aniket';
        $this->data['post'] = $_POST;
        return view('thankyouhtml', $this->data);
    }

    public function sendEmail()
    {
        $name       = $this->request->getPost('name');
        $email      = $this->request->getPost('email');
        $subject    = $this->request->getPost('subject');
        $message    = $this->request->getPost('message');
        $postData   = $this->request->getPost();

        $sendEmail = \Config\Services::email();
        $sendEmail->setFrom('gdost407@gmail.com', 'Aniket Golhar');
        $sendEmail->setTo($email);
        $sendEmail->setSubject('Thank you for visit ASG portfolio');
        $sendEmail->setMessage(view('thankyouhtml', $postData));

        if($sendEmail->send()){
            echo 'send';
        }else{
            echo $sendEmail->printDebugger(['headers']);
        }

        $sendEmail1 = \Config\Services::email();
        $sendEmail1->setFrom($email, $name);
        $sendEmail1->setTo('gdost407@gmail.com');
        $sendEmail1->setSubject($subject);
        $sendEmail1->setMessage($message);

        $sendEmail1->send();
    }
}
