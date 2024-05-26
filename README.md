# Sobre o projeto: Pequenos Passos 👣👶

Este projeto foi desenvolvido como parte do Projeto Integrador I da Univesp (Universidade Virtual do Estado de São Paulo), no curso de Bacharelado em Ciência de Dados, com o tema norteador: <i>'Desenvolvimento de um software com framework web que utilize noções de banco de dados, praticando controle de versão.'</i>

## Objetivos do projeto
**Pequenos Passos** é um software web desenvolvido para informatizar o processo de registro pedagógico das fichas de observação de desenvolvimento na Educação Infantil. 🚸📚

O principal objetivo do projeto é substituir os registros manuais, que resultavam em informações descentralizadas e processos lentos para a coleta de dados, por uma solução digital eficiente e centralizada. 💻📈

O software foi concebido e desenvolvido atendendo às necessidades diárias da escola de Educação Infantil Pequena Semente, onde cada professor pode registrar, acompanhar e analisar o desenvolvimento individual dos alunos de forma mais organizada e acessível. 🎓✨

## Funcionalidades principais:
- **Cadastros principais:** No usuário do diretor, é possível realizar os cadastros de uso geral do sistema, como: professor, turma, critérios de avaliação, período letivo e aluno.
- **Registro diário de observações:** Permite que professores registrem observações detalhadas sobre o desenvolvimento de cada aluno, que são agrupados conforme a data do registro dentro do bimestre (que é cadastrado pelo diretor no período letivo)
- **Acompanhamento individualizado:** Facilita a monitorização do progresso individual de cada criança, ajudando os educadores a identificar pontos fortes e áreas que precisam de atenção.
- **Acesso centralizado:** Todos os registros são armazenados de forma centralizada, garantindo que informações essenciais estejam facilmente acessíveis para intervenções pedagógicas rápidas e precisas.

## Funcionalidades pendentes e futuras melhorias:
- **Galeria de fotos:** Planejada para incluir fotos das crianças e atividades, enriquecendo os registros diários com suporte visual.
- **CRUD:** Funções de criar, ler, atualizar e deletar registros para facilitar a gestão de informações.
- **Filtro de pesquisa:** Funcionalidade para buscar informações específicas nas fichas, como critérios de avaliação (comunicação, brincadeiras, etc.).
- **Bug na foto de perfil de aluno:** Houve um bug na renderização de foto de perfil do aluno a ser corrigido.

## Impacto e adaptação:
Pequenos Passos pode ser facilmente adaptado para outras escolas de Educação Infantil, melhorando a qualidade dos registros pedagógicos em diversos contextos. Além de auxiliar professores, o software também é útil para psicólogos e terapeutas que necessitam de informações precisas e rápidas para diagnósticos e acompanhamento de crianças com TEA, TDAH, entre outros.

# Instalação
Clone o repositório:
```sh
git clone https://github.com/camila-br/pequenos-passos.git
#no terminal, entrar no diretório:
cd pequenos-passos-serverside
```
 Instale as dependências do PHP:
```
composer install
```

### Crie um arquivo .env a partir do exemplo:

cp .env.example .env
Configure suas variáveis de ambiente no arquivo .env:
Atualize as configurações de banco de dados e outras variáveis conforme necessário. Exemplo:
```env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```
Gere a chave da aplicação:
```
php artisan key:generate
```
Execute as migrações do banco de dados:
```bash
php artisan migrate 
```

## Executando o Servidor
Inicie o servidor de desenvolvimento:

```bash
php artisan serve
```
O servidor será iniciado em 
```
http://localhost:8000.
```
Acesse a aplicação no navegador:

Abra o navegador e acesse: http://localhost:8000.
