<?php

    $Name=$_POST['name'];
    $Email=$_POST['email'];
	$Amount=$_POST['amount'];
	$Phone=$_POST['phone'];
    $purpose=$_POST['scheme'];
    
    include 'instamojo/Instamojo.php';
    $api = new Instamojo\Instamojo('test_3edcca6ee59ef17be0a9bf7a429', 'test_db8ac4325456e220cbd50e240bf', 'https://test.instamojo.com/api/1.1/');


    try {
        $response = $api->paymentRequestCreate(array(
            "purpose" => $purpose,
            "amount" => $Amount,
            "send_email" => true,
            "email" => $Email,
            "buyer_name" =>$Name,
			"phone"=>$Phone,
            "send_sms" => true,
            "allow_repeated_payments" =>false,
            "redirect_url" => "https://logo-donation.000webhostapp.com/thankyou.php"
            )
        );
        $pay_url=$response['longurl'];
        header("location:$pay_url");
    	}
    	catch (Exception $e) {
    	    print('Error: ' . $e->getMessage());
    	}
		
?>