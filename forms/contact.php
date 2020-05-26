<?php
  
  $receiving_email_address = 'tayabrhoan06@gmail.com';

  

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */
  $msg = 'Name : '.$_POST['name'].', Address : '.$_POST['address'].', Mobile no. : '.$_POST['mobile'].', Occupation : '.$_POST['occupation'].', monthly income: '.$_POST['income'].', Workplace: '.$_POST['workplace'].', Owned property : '.$_POST['own'].', Reason : '.$_POST['message'].', person Emerge:'.$_POST['personContact'];
  $msg = wordwrap($msg,70);
  echo mail($receiving_email_address , 'loan', $msg);
?>
