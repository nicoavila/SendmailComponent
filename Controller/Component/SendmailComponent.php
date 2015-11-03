<?php

App::uses('Component', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class SendmailComponent extends Component {

    /**
     * Sends an email
     * @param  array  $email_data   Email data
     * @param  array $attachments   Attachments data
     * @return boolean              Success of operation
     */
	public function sendMail($email_data = array(), $attachments = null){
		$Email = new CakeEmail();
        $Email->config($email_data['config']);
        $Email->to($email_data['to']);
        if(!is_null($email_data['cc'])){
           $Email->cc($email_data['cc']); 
        } 
        $Email->subject($email_data['subject']);
        $Email->emailFormat('html');
        $Email->template($email_data['template'], $email_data['layout']);
        $Email->viewvars($email_data['viewvars']);
        if(!is_null($attachments)){
            $Email->attachments($attachments); 
        }
        if($Email->send()){
            return true;    
        }
	}
}