<?php

class ValidadorCNPJ {

    public static function validadorCnpj($cnpj) {
        try {
            // Remove caracteres não numéricos
            $cnpj = preg_replace('/\D/', '', $cnpj);

            if (strlen($cnpj) != 14) {
                throw new Exception('CNPJ deve conter 14 dígitos.');
            }

            // Verifica se todos os dígitos são iguais (ex: 11111111111111)
            if (preg_match('/^(\d)\1{13}$/', $cnpj)) {
                throw new Exception('CNPJ com todos os dígitos iguais não é válido.');
            }

            $cnpjValidacao = substr($cnpj, 0, 12);
            $cnpjValidacao .= self::digitoVerificador($cnpjValidacao);
            $cnpjValidacao .= self::digitoVerificador($cnpjValidacao);

            if ($cnpj !== $cnpjValidacao) {
                throw new Exception('CNPJ inválido.');
            }

            return true;

        } catch (Throwable $e) {
            return false;
        }
    }

    private static function digitoVerificador($numero) {
        $multiplicadores = [];

        if (strlen($numero) == 12) {
            $multiplicadores = [5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];
        } else {
            $multiplicadores = [6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];
        }

        $soma = 0;

        for ($i = 0; $i < count($multiplicadores); $i++) {
            $soma += $numero[$i] * $multiplicadores[$i];
        }

        $resto = $soma % 11;

        return ($resto < 2) ? 0 : 11 - $resto;
    }
}
