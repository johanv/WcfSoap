<?php

// Copyright 2014 Chirojeugd-Vlaanderen vzw
// 
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
// 
//     http://www.apache.org/licenses/LICENSE-2.0
// 
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

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
