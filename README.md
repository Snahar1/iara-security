# iara-security
## 🧜‍♀️ IaraSecurity — O Escudo das Águas

O **IaraSecurity** é o módulo de defesa do **Ecossistema Scorpion**. Ele atua como um filtro purificador para todos os dados que entram no sistema, protegendo a aplicação contra ataques comuns como XSS (Cross-Site Scripting).

---

## ✨ Funcionalidades

- **Sanitização Recursiva:** O método `filtrar()` aceita tanto strings simples quanto arrays complexos, limpando cada elemento profundamente.
- **Proteção XSS:** Remove tags HTML perigosas e escapa caracteres especiais.
- **Integração:** Utilizado pelo **BanzeiroLogs** para garantir que os registos de auditoria não contenham scripts maliciosos.

## 🛠️ Instalação via Docas

No seu `docas.json`:
```json
"require": {
    "snahar/iara-security": "1.0.0"
}
```

## 📖 Como Usar
Filtrando uma String
```
use IaraSecurity\Escudo;

$nome = Escudo::filtrar($_POST['nome']);
```

Filtrando um Array Inteiro
`$post_limpo = Escudo::filtrar($_POST);`

---

Desenvolvido por Sérgio Nahar 🦂
