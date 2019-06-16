 <?php
  

function send_LINE($msg){
 $access_token = 'nvBk57IaYwF1g+GpL6RDQCifvB0Blirn9lUv0gRgG1E8NOeXAjkfI+L01p7AXHX31vs4TORz+BknJmbcDawFRUGkq3bw03cRi45XVnPjhM84416VoUjMGXmMlGEi4bCtEYn2o5tcSL/9ZpSJkb7j4QdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/broadcast';
      $data = [

        'to' => 'U15ddb8750c5577d813220f35acb70a0c',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
