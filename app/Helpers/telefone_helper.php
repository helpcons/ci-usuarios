<!-- app/Helpers/telefone_helper.php -->
<?php
if (! function_exists('format_telefone')) {
    function format_telefone(string $numero): string
    {
        // remove tudo que não for dígito
        $tel = preg_replace('/\D/', '', $numero);
        $len = strlen($tel);

        switch ($len) {
            case 11:
                // (XX) XXXXX-XXXX
                $ddd    = substr($tel, 0, 2);
                $p1     = substr($tel, 2, 5);
                $p2     = substr($tel, 7, 4);
                return "($ddd) $p1-$p2";

            case 10:
                // (XX) XXXX-XXXX
                $ddd    = substr($tel, 0, 2);
                $p1     = substr($tel, 2, 4);
                $p2     = substr($tel, 6, 4);
                return "($ddd) $p1-$p2";

            case 9:
                // XXXXX-XXXX (sem DDD)
                $p1     = substr($tel, 0, 5);
                $p2     = substr($tel, 5, 4);
                return "$p1-$p2";

            case 8:
                // XXXX-XXXX (sem DDD)
                $p1     = substr($tel, 0, 4);
                $p2     = substr($tel, 4, 4);
                return "$p1-$p2";

            default:
                // retorna original se não bater em nenhum caso
                return $numero;
        }
    }
}
