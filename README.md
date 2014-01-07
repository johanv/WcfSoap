# Example of consuming a WCF service in PHP

## About WcfSoap

`Chiro.Example.WcfSoap.sln` is a Visual Studio project that you can run
with Visual Studio 2013 Express (Web Edition).

If you run the project from within Visual Studio, it will run a webserver
on port 49294 on localhost.  You then can connect to the web service
via http://localhost:49294/HelloService.svc.

If you run the service this way, it is only available from the
machine Visual Studio is running on. If you want a test php script on
a Linux machine to connect to the web service, the easiest way is to
setup a reverse ssh tunnel. For testing only, of course.
So from your Windows machine:

    ssh -R 49294:localhost:49294 user@linuxhost

(If you have gitextensions installed on your Windows machine, ssh is
available from the git shell. I assume a ssh server is running on your
Linux host.)

This way, all traffic to port 49294 on the Linux machine is tunneled
through ssh, and sent to port 49294 on the Windows machine.
You could test this on the Linux host:

    wget -q -O - http://localhost:49294/HelloService.svc?wsdl

This should show the wsdl from the webservice on the standard output.
(Provided that you have started the webservice of course.)

Put the example phpscript (phpclient/hello.php) somewhere on your Linux
webserver, and it will work as long the tunnel is active.

## SOAP 1.2

The code in master uses SOAP 1.1. If you want to use SOAP 1.2, check out
the soap\_1\_2 branch.

## License

Copyright 2014 Chirojeugd-Vlaanderen vzw

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or
implied.
See the License for the specific language governing permissions and
limitations under the License.
