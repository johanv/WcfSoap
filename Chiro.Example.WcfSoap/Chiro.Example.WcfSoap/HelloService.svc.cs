using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.Serialization;
using System.ServiceModel;
using System.ServiceModel.Web;
using System.Text;

namespace Chiro.Example.WcfSoap
{
    public class HelloService : IHelloService
    {
        public string Hello(string name)
        {
            return string.Format("Hello {0}!", name);
        }
    }
}
