
VERSION 4  MAJOR VERSION 4
==========================

   Version 4.3 - Add Movement
      26/07/2018 10:26  4.3.1  Add Blameable behavior
         34c5800 Fix snake case
         214e5ee Add status
         7ee3a44 Blameable behavior
         385bd33 Add shipping_status
         ef5a72d Squashed commit of the following:
         f0317ac Add __toString to ORM entities
         a4d3ab1 created and updated at = nullable
      13/07/2018 09:55  4.3.0  initial release
         5012d8a Fix Repository
         5390f1e bind++
         fed369b Rename Items
         135b164 Refactory Invoice
         f7a3511 Add Orm Movement
         7a934e6 Refactory Movement
         6777abe Fix factory decorator
         a2e0ab8 Fix indexes
         3e66307 Add start an finished
         7225fe0 Add job execution
         45a73c6 Add report info
         1a28179 Improve decorator Factory
         03150ee Improve conversion
         fbd548a Fix doctrine proxies
         6a1eee3 Add move_id
         0979922 Fix client idx
         84076e0 add expands to metadata
         34a0baa Add Payment:move_id and expands to all
         de3366a Add addExpand()

   Version 4.2 - Add Report Schema
      05/07/2018 17:04  4.2.0  initial release
         efbcd20 update dependency version
         0c004d9 Add date normalizer test
         2649a90 extend AbstractORMEntity
         204ef39 Fix deletedAt
         0410c63 fix date
         5ac770d Fix snake case dates
         beecbe8 Rename Client Item to Client Client
         8d5df06 Rename People to Person
         83ec70a To ORM feature
         05f81c8 add nullable true to strings
         fdc735c add total_payments_fee_amount
         cfc968d Refactory Client
         d5dd763 Add Payment Bridge
         071735f Add net amount to conciliation
         a935700 Add total_payments
         17cbcdd Add factory decorator, payment totals
         84e19be Refactory Provider
         461996a Remove created time
         78f48f2 Add Id to ORM Entity Abstract
         55ac704 Refactory plural names, Add Application namespace, init Collection decorator
         bf00a16 Add ORM decorator
         8ce88b5 Fix Typo
         a3d319d Rename Shippings to Shipping
         233a388 remove codeclimate
         1ebfb5d fix tests
         ebaf264 Refactory Payment
         bcedb11 Add Banking Report

   Version 4.1 - Improve associations
      26/06/2018 11:23  4.1.0  initial release
         a8bfafd add owner embed
         f031d79 Improve one to one associations
         5f0a47a Add date conversion and mariadb config
         1f42737 Add internal_id and ConverterContainerTrait
         33524e1 add test simple ORM entity
         45e1d7e change props visibility
         1dc1856 add conversion
         18fcc09 add conversion array collection to ORM
         b478cb2 Change strategy to one to many Squashed commit of the following:
         757aa46 add Converter draft
         ca736a7 Fix plural
         b5291d2 Add plural
         181fdb8 Modify association Mapping Type
         3651672 update CI config

   Version 4.0 - Major version 4
      20/06/2018 09:56  4.0.1  Add transaction_net_amount
         2b6fcd8 Add transaction_net_amount
         c7f6d00 Fix entities relationships
      14/06/2018 11:42  4.0.0  initial release
         7fe86d4 Major version 4
         1c7bd0c Fix annotation bugs and add LogModel
         1fcf2cc Release of new version 3.1.0

VERSION 3  REFACTORY TRADING NAMESPACE
======================================

   Version 3.1 - Add ORM Objects
      30/05/2018 17:28  3.1.0  initial release
         4a53357 Use Inheritance
         7c73b39 Fix OneToOne spec
         9628bbd rm tmp db
         0487164 Remove old schema
         bd94ec1 Refactory Build
         c317141 Set Attribute table name
         ca4c497 Simplify Order Payment
         0807f48 Add Comments, Feedback, invoice Entities
         497f761 Add People mapping
         7893234 Add json fixture
         99bb22e Improve Associations
         02f35b1 php-cs-fixer fix
         7ba1946 Add fixture - entity Transaction
         1a2cf6d Refactory on Payment namespace
         af8515f Add normalized key
         38a9f75 Refactory code
         0bd2b68 Remove old test
         438ba26 Add Payment ORM
         7a15d0d Add build files
         dc9af48 Add Scrutinizer config
         300fad7 Add Payment Namespace
         60c436d Refactory build to deal with namespace Array Collection
         28bf5e0 Refactory to namespace ArrayCollection
         d4dc07a Add Customer Schema
         5538d11 Add People Phone dcm
         2c3b65c Add Collection Interface
         7c7729b Add Repository
         7d18226 Add ORM namespace
         384b388 Add build file
         2b48112 set Table name
         ba14f6b add  Gpupo\CommonSchema\Thing\AbstractEntity
         0ad781c add doctrine draft
         bb0cfd0 Add doctrine;
         6e9bd27 Add var dir
         937c703 Add Doctrine Generator
         72ae403 Add Shippings
         5d95deb Add Order Object, new schema version, new model

   Version 3.0 - Refactory Trading Namespace
      23/05/2018 12:12  3.0.0  initial release
         5d7c7d7 Refactory Trading Namespace
         197facf Add Common Order
         cdf6424 Add Yaml schemas

VERSION 2  REQUIRE PHP 7
========================

   Version 2.0 - Require php 7
      11/05/2018 14:19  2.0.0  initial release
         083f931 Require php 7
         dce7b28 doc ++
         03578bb invoice, tracking
         cfe9f0b Order ++
         e8dbf17 sku
         c95bd6b TranslatorException
         7ddc4bc TranslatorDataCollection
         0450c82 factoryOutputCollection
         96a786c getter
         3a7c7cd translator
         69ed369 Product Schema
         845fc03 cs
         6f5b455 TradingInterface
         7f4b9ee travis
         08756cb doc
         4dff3e1 Customer
         5a38bd0 doc
         9c38d6a validate
         af8e4f2 order.schema.php
         1117585 Test for Order Schema
         a385cc6 Order Schema
         15367f2 CS fix
         e12be94 clean
         6f3bc97 DOC
         e00a9e6 Tests
         1fd2d4d Refactory de Namespaces
         5402832 document_slug
         05ccc2d add slugs
         dd5cb5e move availability to field
         ece165d fix readme
         80b7f1c Add GoogleSchema
         2f15258 clean requirements
         b7d45f8 init