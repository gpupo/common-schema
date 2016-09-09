


## customer

Party placing the order
Extends [Person](https://developers.google.com/schemas/reference/types/Person)

Name | Type | Description
-----|---------|------------------------------------------------------
.name |Text|
.document|Text|
.birthDate|Date|Date of birth.
.email |Text|	Email address.
.gender|Text|Gender of the person.
.telephone|Text|The telephone number.
.cellphone|Text|The cellphone number.

## billingAddress

The billing address for the order
Extends [PostalAddress](https://developers.google.com/schemas/reference/types/PostalAddress)


Name | Type | Description
-----|---------|------------------------------------------------------
.name |Text|	Name of the PostalAddress.
.streetAddress |Text|	The street address. For example, 1600 Amphitheatre Pkwy.
.addressLocality |Text|	The locality. For example, Mountain View.
.addressRegion |Text|	The region. For example, CA.
.addressCountry |Text| or Country	The country. For example, USA. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
.postalCode |Text|	The postal code. For example, 94043.
.postOfficeBoxNumber |Text|	The post office box number for PO box addresses.
.addressComplement |Text|
.addressNumber |Text|
.addressNeighborhood|Text|
.addressReference|Text|


# product

brand	Text	The brand(s) associated with a product or service, or the brand(s) maintained by an organization
productID	Text	The product identifier

Name | Type | Description
-----|---------|------------------------------------------------------
.productId |Text|
.productType |Text|
.department |Text|
.category |Text|
.brand |Text|
.skus |List|
.media |List|
.attributes |List|Collection of attributes


## asset
Name | Type | Description
-----|---------|------------------------------------------------------
.name |Text|	Name of the item
.url |Text|	Full remote url


## attribute
Name | Type | Description
-----|---------|------------------------------------------------------
.name |Text| Name of the item
.value |Text|


## media
Name | Type | Description
-----|---------|------------------------------------------------------
.images |List|	Collection of assets
.videos |List|	Collection of assets


## sku
 color	Text	The color of the product.
 gtin	Text	The GTIN-13 code of the product
 depth	Distance or QuantitativeValue	The depth of the item.
 weight	QuantitativeValue	The weight of the product or person.
 width	Distance or QuantitativeValue	The width of the item.
 
