


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
billingAddress.name |Text|	Name of the PostalAddress.
billingAddress.streetAddress |Text|	The street address. For example, 1600 Amphitheatre Pkwy.
billingAddress.addressLocality |Text|	The locality. For example, Mountain View.
billingAddress.addressRegion |Text|	The region. For example, CA.
billingAddress.addressCountry |Text| or Country	The country. For example, USA. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
billingAddress.postalCode |Text|	The postal code. For example, 94043.
billingAddress.postOfficeBoxNumber |Text|	The post office box number for PO box addresses.
billingAddress.addressComplement |Text|
billingAddress.addressNumber |Text|
billingAddress.addressNeighborhood|Text|
billingAddress.addressReference|Text|
