<?php

namespace app\Controllers;

use MailchimpMarketing\ApiClient;
use MailchimpMarketing\ApiException;
use GuzzleHttp\Exception\ClientException;

class NewsletterController
{

    private $mailchimp;

    private $newletterBody = [     
        "email_address" => "",
        "status" => "subscribed",
        "merge_fields" => [
            "FNAME" => "",
        ]
    ];

    public function __construct()
    {
        $this->mailchimp = new ApiClient();

        $this->mailchimp->setConfig([
            'apiKey' => API_KEY,
            'server' => SERVER_PREFIX
        ]);
    }

    private function addContactToList($data)
    {
        try {

            $this->newletterBody["email_address"] = $data["newsletter_email"];
            $this->newletterBody["merge_fields"]["FNAME"] = $data["newsletter_name"];

            $response = $this->mailchimp->lists->addListMember(LIST_ID, $this->newletterBody);

            return $response->unique_email_id;

        }catch (ClientException $e) {
            echo $e->getMessage();
        }catch (ApiException $e) {
            echo $e->getMessage();
        }
        
        return false;
    }

    public function addToNewsletter(){

        $data = json_decode(file_get_contents("php://input"),true);

        $data = filter_var_array($data,["newsletter_name"=>FILTER_SANITIZE_STRING,
                                        "newsletter_email"=>FILTER_VALIDATE_EMAIL]);

        $response = ["success"=>false];

        if($data){
            if($this->addContactToList($data)){
               $response = ["success"=>true];
            }
        }

        echo json_encode($response);
        
    }

}
