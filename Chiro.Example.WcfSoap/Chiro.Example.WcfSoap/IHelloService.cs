using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.Serialization;
using System.ServiceModel;
using System.ServiceModel.Web;
using System.Text;

namespace Chiro.Example.WcfSoap
{
    [ServiceContract]
    public interface IHelloService
    {
        /// <summary>
        /// Say hello to person with given <paramref name="name"/>.
        /// </summary>
        /// <param name="name">Name of person to say hello to.</param>
        /// <returns>Hello-message</returns>
        [OperationContract]
        string Hello(string name);
    }
}
