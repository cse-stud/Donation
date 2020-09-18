<?php
$name=$_POST['dName'];
$email=$_POST['demail'];
$phone=$_POST['dphnum'];
$amount=$_POST['damount'];
//$authType="instamojo/Instamojo.php";
    include 'instamojo/Instamojo.php';
    
    $api = new  Instamojo\Instamojo('test_6365afbddcf06e820edcd9ba0af','test_7cc05261e245a2c01c91a84bd4e','https://test.instamojo.com/api/1.1/');
    try {
    $response = $api->PaymentRequestCreate(array(
        "purpose" => "Donate The needy" ,
        "amount" => $amount,
        "send_email" => true,
        "email" => $email,
        "donor_name"=>$name,
        "phone"=>$phone,
        "send_sms"=>true,
        "allow_repeated_payments"=>false,
        "redirect_url" => "http://localhost/donation/thankyou.php"
       //"webhook"=>"http://localhost/donation/webhook.php";
        ));
    //print_r($response);
    $pay_url=$response['longurl'];
    header("location:$pay_url");
    }
    catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }
?>