基本思路：

- autoload负载类的加载；
- context的类负责整合资源；
- controller里面负责数据采集和内容输出；
- 页面输出使用smarty;
- controller's run method and content display;
- hook register, perform and mechanism;



The facets of controller:

- __construct method;
- init method;
- post process method;
- init header, content,footer methods;
- display or display ajax method;

Cart and Checkout process:

- cart class and add into context;
- use file log and bind the instance to context object;

