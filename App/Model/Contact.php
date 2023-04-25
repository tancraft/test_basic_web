<?php

namespace App\Model;

class Contact {
    private $name;
    private $email;
    private $message;

    public function __construct($name, $email, $message) {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    public function send() {
        $to = $this->email;
        $subject = 'Votre demande de contact a été reçue';
        $message = 'Bonjour ' . $this->name . ',<br><br>Votre message suivant a bien été reçu :<br><br>' . $this->message . '<br><br>Notre équipe vous répondra dans les plus brefs délais.<br><br>Merci de votre confiance !<br><br>L\'équipe de notre site';

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $headers .= 'From: contact@monsite.com' . "\r\n";

        mail($to, $subject, $message, $headers);

        $to_admin = 'admin@monsite.com';
        $subject_admin = 'Nouvelle demande de contact sur le site';
        $message_admin = 'Bonjour,<br><br>Une nouvelle demande de contact a été reçue sur le site :<br><br>Nom : ' . $this->name . '<br>Email : ' . $this->email . '<br>Message : ' . $this->message;

        $headers_admin = 'MIME-Version: 1.0' . "\r\n";
        $headers_admin .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $headers_admin .= 'From: contact@monsite.com' . "\r\n";

        mail($to_admin, $subject_admin, $message_admin, $headers_admin);
    }
}

