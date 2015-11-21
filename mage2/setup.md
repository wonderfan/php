第一步：安装composer

- 下载地址： https://getcomposer.org/doc/00-intro.md#installation-windows
- 下载地址： https://github.com/composer/windows-setup/releases

第二步：安装git

- 根据操作系统的类型选择对应的安装
- xampp地址：http://sourceforge.net/projects/xampp/files/XAMPP%20Windows/


第三步：克隆代码

- 代码仓库地址： https://github.com/magento/magento2
- 执行命令： `git clone -b master https://github.com/magento/magento2.git`
- 配置auth.json：在window run中输入`%APPDATA%`找到composer
    {"http-basic": {"repo.magento.com": {"username": "a5002579901dcf57cd45dec9360dd481","password": "91ff859c69f80276708519f01265a0d1"}}}
  

第四部：安装依赖包

- 运行命令： `composer install`
- 浏览器安装：`http://localhost/magento2/setup`
- 命令行安装
