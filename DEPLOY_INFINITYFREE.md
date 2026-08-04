# Guia: Deploy no InfinityFree

## Passo 1: Criar Conta
1. Acesse **infinityfree.com**.
2. Clique em "Sign Up" e crie conta (email + senha).
3. Confirme o email.

## Passo 2: Criar Domínio (ou Subdomínio)
1. No painel, clique em "Create Website".
2. Escolha nome do domínio (ex: `meusite.rf.gd` - gratuito).
3. Anote o domínio (vais usar depois).

## Passo 3: Acessar Gerenciador de Arquivos
1. No painel principal, procure "File Manager" ou "File Manager".
2. Entra em `/htdocs` ou `/public_html` (pasta pública).
3. Deixe vazio ou apague tudo que lá houver.

## Passo 4: Subir Arquivos do Projeto
1. **Do seu PC**, na pasta do projeto, seleciona:
   - Tudo **EXCETO**:
     - `.git`
     - `.env` (não sube arquivo com senhas!)
     - `node_modules`
     - `public/uploads` (opcional, crias depois)

2. **Upload no File Manager**:
   - Abre `htdocs`.
   - Clica em "Upload" (ou arrasta os arquivos).
   - Sobe a pasta inteira do projeto (ex: `Bravatta_Roleplay/`).
   - **Ou** sobe o conteúdo diretamente em `htdocs` (sem pasta raiz).

   **Estrutura esperada em `/htdocs`:**
   ```
   htdocs/
   ├── public/
   │   ├── index.php
   │   ├── css/
   │   ├── js/
   │   └── uploads/
   ├── app/
   ├── vendor/
   ├── composer.json
   └── .env.example
   ```

## Passo 5: Criar Banco MySQL
1. No painel InfinityFree, procure "MySQL Databases".
2. Cria novo banco (ex: `bravatta_db`).
3. Cria novo usuário MySQL (ex: `bravatta_user`, senha: escolhe algo seguro).
4. Associa usuário ao banco.
5. **Anota:**
   - Host: `localhost` (InfinityFree sempre usa localhost)
   - Database: nome que criaste
   - User: nome do usuário
   - Password: a senha que escolheste

## Passo 6: Importar Schema (Tabelas)
1. No painel, procure **phpMyAdmin**.
2. Entra com as credenciais do banco MySQL.
3. Seleciona o banco (`bravatta_db`).
4. Clica em "Import" (ou "Importar").
5. Sobe os arquivos SQL nesta ordem:
   - `app/database/migrations/create_admins_table.sql`
   - `app/database/migrations/add_role_column_to_admin_table.sql`
   - `app/database/migrations/create_news_table.sql`
   - `app/database/migrations/change_published_at_column_type.sql`
6. Clica "Go" ou "Execute" para cada um.

## Passo 7: Criar Arquivo `.env` no Servidor
1. No File Manager, entra em `/htdocs`.
2. Cria novo arquivo: `.env`.
3. Copia o conteúdo do `.env.example` e **altera com os dados do InfinityFree**:
   ```
   DB_HOST=localhost
   DB_PORT=3306
   DB_NAME=bravatta_db
   DB_USER=bravatta_user
   DB_PASS=sua_senha_aqui
   DB_SSL_MODE=

   MAIL_HOST=smtp.gmail.com
   MAIL_PORT=587
   MAIL_USERNAME=seu_email@gmail.com
   MAIL_PASSWORD=sua_senha_app_gmail
   MAIL_ENCRYPTION=tls
   MAIL_TO=seu_email@gmail.com
   ```
4. Salva.

## Passo 8: Configurar `.htaccess` (Roteamento)
1. No File Manager, entra em `/htdocs/public`.
2. Cria novo arquivo: `.htaccess`.
3. Coloca isto:
   ```apache
   <IfModule mod_rewrite.c>
       RewriteEngine On
       RewriteCond %{REQUEST_FILENAME} !-f
       RewriteCond %{REQUEST_FILENAME} !-d
       RewriteRule ^ index.php [QSA,L]
   </IfModule>
   ```
4. Salva.

## Passo 9: Apontar Documentroot para `/public`
1. No painel InfinityFree, procure "Domains".
2. Seleciona seu domínio.
3. Na opção "Document Root" ou "Public Folder", alteras para apontar para `/public` (relativo a `/htdocs`).
   - Exemplo: se subiste tudo em `/htdocs/Bravatta_Roleplay`, aponta para `/Bravatta_Roleplay/public`.
   - Se subiste direto em `/htdocs`, aponta para `/public`.
4. Salva.

## Passo 10: Testar
1. Abre o domínio no navegador (ex: `https://meusite.rf.gd`).
2. Deverá carregar a home do site.
3. Testa login, formulário de contacto, publicação de notícias.
4. Se der erro, verifica:
   - Credenciais do `.env` (corretas?).
   - Schema importado corretamente (tabelas no phpMyAdmin).
   - `.htaccess` criado em `/public`.
   - Documentroot apontando para `/public`.

## Passo 11: Pasta de Uploads (Opcional)
1. No File Manager, em `/public/uploads`, muda permissões para **755** ou **777** (dir properties).
2. Testa upload de avatar/imagem na admin.

---

## Troubleshooting

**Erro: "PDO Connection Refused"**
- Host está errado (deve ser `localhost`).
- User/pass não confere (confirma no phpMyAdmin).

**Erro: "Page not found" em rotas (ex: `/noticias`)**
- `.htaccess` não está em `/public`.
- Documentroot não aponta para `/public`.

**Banco vazio (sem tabelas)**
- Esqueceste de importar os `.sql`.
- Confere no phpMyAdmin se as tabelas estão lá.

**SMTP/Email não funciona**
- Credenciais do Gmail erradas (gera app password: myaccount.google.com/apppasswords).
- Verifica se MAIL_* estão corretos em `.env`.

---

**Pronto! Seu site está em produção.**
