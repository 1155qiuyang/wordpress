# MyFirstTheme

一个最小可安装的 WordPress 经典主题，使用 WordPress Loop 显示文章标题和内容，支持动态页面标题、特色图片、订阅链接和 HTML5 标记。

## 安装

需要已安装的 WordPress 6.0 或更高版本，以及 PHP 7.4 或更高版本。生产环境请使用仍受安全支持的 WordPress 和 PHP 版本。

1. 将整个 `my-first-theme/` 文件夹复制到 WordPress 的 `wp-content/themes/` 目录。
2. 登录 WordPress 后台，进入 **外观 → 主题**。
3. 找到 **MyFirstTheme**，点击 **启用**。
4. 创建或打开一篇文章，访问站点查看标题和正文。

也可以将 `my-first-theme/` 文件夹打包成 ZIP（ZIP 根目录包含该文件夹），在 **外观 → 主题 → 安装主题 → 上传主题** 中上传并启用。不要将整个仓库打包上传。

本仓库仅提供主题，不包含 WordPress 核心或数据库，也不需要修改 WordPress 核心文件。

## 文件

- `my-first-theme/style.css`：主题识别信息和基础样式。
- `my-first-theme/index.php`：页面结构、文章循环及分页。
- `my-first-theme/functions.php`：主题功能注册和样式加载。

## PHP 语法检查

在仓库根目录运行（需要 PHP CLI）：

```sh
php -l my-first-theme/index.php
php -l my-first-theme/functions.php
```

语法检查不能替代在 WordPress 中安装、启用和浏览页面的功能验证。
