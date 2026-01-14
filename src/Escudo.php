<?php

namespace IaraSecurity;

/**
 * 🧜‍♀️ SCORPION: IaraSecurity - O Escudo de Proteção
 * --------------------------------------------------------------------------
 * @author Sérgio Nahar <sergio.ac.nahar@gmail.com>
 * @package IaraSecurity
 * 📜 @description Filtros de segurança e sanitização de dados.
 * --------------------------------------------------------------------------
 */
class Escudo
{
    /**
     * ⚓ ICOARACI: filtrar()
     * 📝 @description Limpa strings para evitar XSS e caracteres maliciosos.
     * 📥 @param mixed $dados Texto ou Array a ser limpo
     * 📤 @return mixed
     */
    public static function filtrar($dados)
    {
        if (is_array($dados)) {
            foreach ($dados as $chave => $valor) {
                $dados[$chave] = self::filtrar($valor);
            }
            return $dados;
        }

        // Remove tags HTML e converte caracteres especiais
        $limpo = trim($dados);
        $limpo = strip_tags($limpo);
        $limpo = htmlspecialchars($limpo, ENT_QUOTES, 'UTF-8');

        return $limpo;
    }
}
