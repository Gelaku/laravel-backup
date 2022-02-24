<h1 align="center"> laravel-backup </h1>

<p align="center"> 数据库备份或还原.</p>

## 翻译：tp5er
[地址](https://github.com/tp5er/tp5-databackup)

## Installing

```shell
composer require gelaku/laravel-backup -vvv
```

## 使用
Laravel 配置写在 config/database.php 中：
```php
.
.
.
// 数据库备份
'backup'=>[
    // 数据库备份路径
    'path' => './backup/',
    // 数据库备份卷大小
    'part' => 20971520,
    // 数据库备份文件是否启用压缩 0不压缩 1 压缩
    'compress' => 0,
    // 数据库备份文件压缩级别 1普通 4 一般  9最高
    'level' => 9,
],
```
```php
use Gelaku\LaravelBackup\Backup;
$backup = new Backup();

// 数据类表列表
$data = $backup->dataList();
// 备份文件列表
$data = $backup->fileList();
// 备份数据库表单
$data = $backup->backup($table);
// 导入表
$time = $request->input('time');
$file  = $backup->getFile('timeverif',$time);
$data = $backup->setFile($file)->import(0,$time);
// 修复表
$data = $backup->repair($tables);
// 优化表
$data = $backup->optimize($tables);
// 下载
$data = $backup->downloadFile($time);
```
## 
## Usage

TODO

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/gelaku/laravel-backup/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/gelaku/laravel-backup/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT
