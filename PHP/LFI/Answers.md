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

**Impact:** Display the content of any PHP file on hard disk drive with the privileges of HTTP server. 


