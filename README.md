## Composer - guia prático

O Composer é uma ferramenta para gerenciamento de dependências em PHP, um verdadeiro maestro de um projeto. Ele permite que você declare pacotes (bibliotecas, frameworks, classes, etc), das quais seu projeto depende e as gerencia para você.

#### Diretórios e Arquivos

* **vendor/** -> diretório do projeto seu para todos os códigos de terceiros em um projeto.
* **vendor/autoload.php** -> informações de bibliotecas de carregamento automático. 
* **composer.json** -> descreve as dependências do projeto e outros metadados.
* **composer.lock** -> grava todas as versões e pacotes baixados.

#### Comandos básico

Instalar as dependências do projeto.

```javascript
composer install
```

Instalar as dependências do projeto como desenvolvimento.

```javascript
composer install --dev
```

A versão do composer

```javascript
composer -v
```

Lista completa de comandos

```javascript
composer --help
```

Diagnostico de permissões e atualização

```javascript
composer diagnose
```

Atulizar o composer para ultima versão

```javascript
composer self-update
```

Cria um novo projeto

```javascript
composer int
```

Atualizar automaticamente para versões mais recentes as dependências. 

```javascript
composer update
```

Atualizar dependência especifica 

```javascript
composer update vendor/ .../  ...
```

Remove pacotes do composer.json 

```javascript
composer remove vendor/ .../  ...
```

Pesquisar nos repositórios de pacotes 

```javascript
composer search 'coloque os termos'
```

Pacotes estão disponíveis e quais estão instalados

```javascript
composer show
```

Quais pacotes quais estão instalados

```javascript
composer show --installed
```

Pacotes instalados que possuem atualizações disponíveis

```javascript
composer show -lo
```

Quais pacotes dependem de outro pacote

```javascript
composer depends vendor/ ...
```

Quais pacotes dependem de outro pacote

```javascript
composer info
```

Validar o composer.json

```javascript
composer validate
```

Verificar se há alterações locais nas dependências 

```javascript
composer status
```

Utilize a documentação https://getcomposer.org/doc/

#### Repositório do composer

O Packagist é o repositório principal de pacotes do Composer e está ativado por padrão. Tudo o que é publicado no Packagist está disponível automaticamente através do Composer.

##### Packagist: https://packagist.org/

## Recursos Utilizados no Desenvolvimento do Estudo

* [VS Code](https://code.visualstudio.com)
* [Composer](https://getcomposer.org/)
* [Packagist](https://packagist.org/)
* [PHP 7.2.1](https://www.php.net/)
* [PSR-4](https://www.php-fig.org/psr/)
