<?php

error_reporting(E_ERROR | E_STRICT);
ini_set(“display_errors”, 1 );

?>

<!--Esconder e mostrar somente alguns erros
	Lista dos erros:
	E_ERROR: Estes indicam erros que não podem ser recuperados, como problemas de alocação de memória. A execução do script é interrompida.
    E_WARNING: Avisos em tempo de execução (erros não fatais). A execução do script não é interrompida.
    E_PARSE: Erro em tempo de compilação. Erros gerados pelo interpretador.
    E_NOTICE: Indica que o script encontrou alguma coisa que pode indicar um erro, mas que também possa acontecer durante a execução normal do script.
    E_STRICT: Permite ao PHP sugerir mudanças ao seu código as quais irão assegurar melhor interoperabilidade e compatibilidade futura do seu código.
    E_ALL: Todos erros e avisos, como suportado, exceto de nível E_STRICT -->