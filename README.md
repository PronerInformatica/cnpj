# CNPJ
Classe para trabalhar com CNPJ

## Exemplo
```php
<?php

//EXEMPLO
require_once "../vendor/autoload.php";

use Proner\Cnpj;

var_dump(Cnpj::validate('99.999.999/9999-99')); //RETORNA UM TRUE OU FALSE
?>
