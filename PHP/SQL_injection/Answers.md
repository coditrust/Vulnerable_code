
## Level 1

**Vulnerability:** SQL injection

**Exploit :** `/Vulnerable_code/PHP/SQL_injection/level1.php?name='e' or '1'='1'`

**Impact:** Execute arbitrary SQL injection.



## Level 2

**Vulnerability:** SQL injection

**Exploit :** `/Vulnerable_code/PHP/SQL_injection/level2.php?username='e' or '1'='1'`

**Impact:** Execute arbitrary SQL injection. The prepared statement is not used properly. You should add this before calling execute():
```php
$stmt->bind_param("s", $_GET['first_name']);
```


