<?php

namespace App\Controller;

use App\Render;
use App\Model\Contact;

class ContactController {

    public function index() {
      $render = new Render();
      $render->render('contact');
    }
  
    public function send() {
      if(isset($_POST['submit'])) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        
        $contact = new Contact($name, $email, $message);
        
        $contact->send();
        
        $render = new Render();
        $render->render('contact', ['success' => true]);
      } else {
        $render = new Render();
        $render->render('contact');
      }
    }
  }
  