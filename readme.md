# Introduction

I use this component for send emails in several proyects.

# Installation

* Copy SendmailComponent.php to your **app/Controller/Component/** folder
* Make sure to use the component in the controller by adding:
```php
public $components = array('Sendmail');
```

# Usage

Use this code as template

**email.php code:**

```php
public $smtp = array(
	'transport' => 'Smtp',
	'host' => 'HOSTNAME',
	'port' => 25,
	'timeout' => 30,
	'username' => 'USERNAME',
	'password' => 'PASSWORD',
	'client' => false,
	'log' => false,
	'charset' => 'utf-8',
	'headerCharset' => 'utf-8',
);
```

**Controller code:**

```php
$test_email = array(
	'config' => 'config_name',
	'to' => array('address1@address.cl', 'address2@address.cl'),
	'cc' => $cc1,
	'subject' => 'This is a test subject',
	'template' => 'template_name',
	'layout' => 'default',
	'viewvars' => array(
		'var1' => 'Value 1', 
		'var2' => 'Value 2', 
		'var3' => 'Value 3', 
		'varn' => 'Value N'
	)
);
```

```php
if($this->Sendmail->sendMail($test_email)){
	//Do something...
}
```