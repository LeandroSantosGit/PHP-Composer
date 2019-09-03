______
/ ____/___  ____ ___  ____  ____  ________  _____
/ /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
/ /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
\____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
/_/

O Composer é uma ferramenta para gerenciamento de dependências em PHP. Ele permite que você declare pacotes (bibliotecas, frameworks, classes, etc), das quais seu projeto depende e as gerencia para você.


#### Diretórios e Arquivos

* vendor/ -> diretório do projeto seu para todos os códigos de terceiros em um projeto.
* vendor/autoload.php -> informações de bibliotecas de carregamento automático. 
* composer.json -> descreve as dependências do projeto e outros metadados.
* composer.lock -> grava todas as versões e pacotes baixados.
* 



#### Comandos básico

Instalar as dependências do projeto.
* composer install
Instalar as dependências do projeto como desenvolvimento.
* composer install --dev
A versão do composer
* composer -v
Lista completa de comandos
* composer --help
Diagnostico de permissões e atualização
* composer diagnose
Atulizar o composer para ultima versão
* composer self-update
Cria um novo projeto
* composer int
Atualizar automaticamente para versões mais recentes as dependências. 
* composer update
Atualizar dependência especifica 
* composer update vendor/ .../  ...
Remove pacotes do composer.json 
* composer remove vendor/ .../  ...
Pesquisar nos repositórios de pacotes 
* composer search 'coloque os termos'
Pacotes estão disponíveis e quais estão instalados
* composer show
Quais pacotes quais estão instalados
* composer show --installed
Pacotes instalados que possuem atualizações disponíveis
* composer show -lo
Quais pacotes dependem de outro pacote
* composer depends vendor/ ...
Quais pacotes dependem de outro pacote
* composer info
Validar o composer.json
* composer validate
Verificar se há alterações locais nas dependências 
* composer status




Outros comando utilize a documentação.


#### Repositório do composer
