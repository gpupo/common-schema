#common-schema

[![Build Status](https://secure.travis-ci.org/gpupo/common-schema.png?branch=main)](http://travis-ci.org/gpupo/common-schema)
[![Actions Status](https://github.com/gpupo/common-schema/workflows/CI/badge.svg)](https://github.com/gpupo/common-schema/actions)

## Install

    composer require gpupo/common-schema
    composer require gpupo/common-sdk

## Requisitos para uso

* PHP *>=8.0*
* [Composer Dependency Manager](http://getcomposer.org)

Este componente **não é uma aplicação Stand Alone** e seu objetivo é ser utilizado como biblioteca.
Sua implantação deve ser feita por desenvolvedores experientes.

**Isto não é um Plugin!**

As opções que funcionam no modo de comando apenas servem para depuração em modo de
desenvolvimento.

A documentação mais importante está nos testes unitários. Se você não consegue ler os testes unitários, eu recomendo que não utilize esta biblioteca.

<!-- license -->

## Direitos autorais e de licença

This project is licensed under the terms of the MIT license.

Este componente está sob a [licença MIT](https://github.com/gpupo/common-sdk/blob/master/LICENSE)

Para a informação dos direitos autorais e de licença você deve ler o arquivo
de [licença](https://github.com/gpupo/common-sdk/blob/master/LICENSE) que é distribuído com este código-fonte.

### Resumo da licença

Exigido:

- Aviso de licença e direitos autorais

Permitido:

- Uso comercial
- Modificação
- Distribuição
- Sublicenciamento

Proibido:

- Responsabilidade Assegurada

## Links

* [Composer Package](https://packagist.org/packages/gpupo/common-schema/) on packagist.org

## Desenvolvimento

Preparando o banco de dados

    docker-compose up -d  mariadb;
    vendor/bin/doctrine orm:schema-tool:update --force

Rodando os testes localmente

	APP_ENV=test bin/common-schema raise:build -vv
	source .env.test.local && make phpunit



Rebuild database

	vendor/bin/doctrine orm:schema-tool:drop --force --full-database
    vendor/bin/doctrine orm:schema-tool:create
