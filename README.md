# Cadastro de Visitantes

Sistema para cadastro e gerenciamento de visitantes em ambientes controlados.

## Descrição

Este projeto permite:
- Cadastrar visitantes e crachás
- Exibir a sala de destino do visitante
- Gerar relatórios dos visitantes em PDF e Excel
- Autenticação de usuários para acesso ao sistema

## Tecnologias Utilizadas

- **Backend:** Laravel (PHP)
- **Frontend:** HTML, CSS, JavaScript, Bootstrap
- **Banco de Dados:** MySQL

## Requisitos

- PHP 8.0 ou superior
- Composer
- MySQL 5.7 ou superior
- Node.js e NPM (para compilação de assets)

## Instalação

1. Clone este repositório:
   ```bash
   git clone https://github.com/seu-usuario/cadastro-de-visitantes.git
   cd cadastro-de-visitantes
   ```

2. Instale as dependências do PHP com o Composer:
   ```bash
   composer install
   ```

3. Copie o arquivo de ambiente e configure-o:
   ```bash
   cp .env.example .env
   ```

4. Configure o arquivo `.env` com as informações do seu banco de dados e outras variáveis de ambiente.

5. Gere a chave da aplicação Laravel:
   ```bash
   php artisan key:generate
   ```

6. Execute as migrações para criar as tabelas do banco:
   ```bash
   php artisan migrate
   ```

7. (Opcional) Execute os seeders para popular o banco com dados iniciais:
   ```bash
   php artisan db:seed
   ```

8. Inicie o servidor de desenvolvimento:
   ```bash
   php artisan serve
   ```

## Como Usar

Acesse `http://localhost:8000` no seu navegador após iniciar o servidor.

Credenciais padrão para acesso:
- Email: admin@example.com
- Senha: password

## Estrutura de Pastas

- `/app` - Código principal da aplicação Laravel
- `/public` - Arquivos públicos (assets, index.php)
- `/resources/views` - Templates HTML (Blade)
- `/database` - Migrações e seeds do banco de dados
- `/routes` - Definição de rotas da aplicação

## Funcionalidades

- **Cadastro de Visitantes**: Registro completo com foto e documentos
- **Controle de Crachás**: Gerenciamento de crachás disponíveis e em uso
- **Relatórios**: Exportação de dados em PDF e Excel
- **Dashboard**: Visualização rápida de estatísticas e visitantes ativos

## Contribuição

1. Faça um fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/nova-funcionalidade`)
3. Commit suas mudanças (`git commit -m 'Adiciona nova funcionalidade'`)
4. Push para a branch (`git push origin feature/nova-funcionalidade`)
5. Abra um Pull Request

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).
