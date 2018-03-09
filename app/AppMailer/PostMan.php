<?php

    namespace App\AppMailer;

    use Illuminate\Mail\Mailer;
    use App\User;
    class PostMan
    {
        protected $mailer;

        protected $from = '';
        protected $to;
        protected $view;
        protected $data = [];

        public function __construct(Mailer $mailer)
        {
            $this->mailer = $mailer;
        }

        public function sendEmailConfirmationTo (User $user)
        {
            $this->to = $user->email;
            $this->view = 'emails.emailVerification';
            $this->data = compact('user'); // user

            $this->deliver();
        }

        public function deliver ( )
        {
            $this->mailer->send ( $this->view, $this->data, function ( $message ) {
              $message->from ( $this->from, 'Administrator' )
                        ->to ( $this->to );
            });
        }
    }