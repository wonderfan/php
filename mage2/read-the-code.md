The main code flow in the index.php:

1. require the bootstrap.php;
2. create the bootstrap object;
3. use the bootstrap object to create application object;
4. use the bootstrap to run the application;

The main roles of the Boostrap object:

1. create one object manager via factory pattern;
2. use the object manager to get the front controller;
3. use the front controller to do the dispatch work;
4. construct the response object and send it to browser.

The main content of the ObjectManager class:

1. The namespace is Magent\Framework\App
2. The class name is ObjectManager and its parent class is \Magento\Framework\ObjectManager\ObjectManager
3. It has the dependency with config interface. That is to say, it needs to know where to find through the configuration;

The class ObjectManager in the namespace Magento\Framework\ObjectManager

1. Three parameters in the constructor function: factory, configuration and shared instances;
2. The create method makes use the create method of factory with the help of the configuration;
3. The get method is just utility tool of getting the instance from the shareed instance pool;
4. It also provides one configure method which can be used to change the configuration.

The class Magento\Framework\App\EnvironmentFactory:

1. There are two modes: developer and compiled;
2. Each environment has one concrete class: `Magento\Framework\App\ObjectManager\Environment\Compiled` and `Magento\Framework\App\ObjectManager\Environment\Developer`



