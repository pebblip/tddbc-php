# TDDBC PHPUnit 環境

## 動作環境

* PHP 5.6 以上

## セットアップ

### PHPのインストール
* インストールされていない場合は、[XAMP](https://www.apachefriends.org/jp/index.html) が簡単。

### composer のインストール
* Windowsの場合は、[インストーラ](https://getcomposer.org/download/)が簡単。

### composer の実行

```
$ composer install
```

### サンプルテストの確認
PHPUnitを実行する。

```
$ vendor/bin/phpunit
```

こんな感じで出たらOK。
```
$ vendor/bin/phpunit
PHPUnit 5.7.21 by Sebastian Bergmann and contributors.

Runtime:       PHP 7.1.6
Configuration: C:\src\php\tddbc-php\phpunit.xml

.                                                                   1 / 1 (100%)

Time: 298 ms, Memory: 4.00MB

OK (1 test, 1 assertion)
```


