<?php
    $soap_params = array(
      "soap_version" => SOAP_1_1,
      "trace" => 1,
    );

    // In a real app, you will probably wrap the following in
    // a wrapper function. This is just example code.

    $client = new SoapClient('http://localhost:49294/HelloService.svc?wsdl', $soap_params);

    $params = array('name' => 'World');
    $result = $client->__soapCall('Hello', array('parameters' => $params));

    echo $result->HelloResult;
?>
