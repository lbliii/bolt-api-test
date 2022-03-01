
# Address View

The address object returned in the response.

## Structure

`AddressView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | The unique Bolt ID associated with this address. | getId(): ?string | setId(?string id): void |
| `streetAddress1` | `?string` | Optional | Used for the street number and street name of the address. | getStreetAddress1(): ?string | setStreetAddress1(?string streetAddress1): void |
| `streetAddress2` | `?string` | Optional | Used for any apartment, floor, or unit details. | getStreetAddress2(): ?string | setStreetAddress2(?string streetAddress2): void |
| `streetAddress3` | `?string` | Optional | Used for region details such as state or province. | getStreetAddress3(): ?string | setStreetAddress3(?string streetAddress3): void |
| `streetAddress4` | `?string` | Optional | Used for city name details. | getStreetAddress4(): ?string | setStreetAddress4(?string streetAddress4): void |
| `locality` | `?string` | Optional | Used for city name details associated with this address. | getLocality(): ?string | setLocality(?string locality): void |
| `region` | `?string` | Optional | Used for region details such as state or province associated with this address. | getRegion(): ?string | setRegion(?string region): void |
| `postalCode` | `?string` | Optional | Used for the postal or zip code associated with this address.<br>**Constraints**: *Maximum Length*: `32` | getPostalCode(): ?string | setPostalCode(?string postalCode): void |
| `countryCode` | `?string` | Optional | Used for the 2-digit ISO 3166-1 alpha 2 country code associated with this address. | getCountryCode(): ?string | setCountryCode(?string countryCode): void |
| `country` | `?string` | Optional | Used for the name of the country associated with this address. | getCountry(): ?string | setCountry(?string country): void |
| `name` | `?string` | Optional | The given and surname of the person associated with this address. | getName(): ?string | setName(?string name): void |
| `firstName` | `?string` | Optional | The given name of the person associated with this address. | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | The surname of the person associated with this address. | getLastName(): ?string | setLastName(?string lastName): void |
| `company` | `?string` | Optional | The company name associated with this address. | getCompany(): ?string | setCompany(?string company): void |
| `phoneNumber` | `?string` | Optional | The phone number of the person associated with this address. | getPhoneNumber(): ?string | setPhoneNumber(?string phoneNumber): void |
| `emailAddress` | `?string` | Optional | The email of the person associated with this address. | getEmailAddress(): ?string | setEmailAddress(?string emailAddress): void |

## Example (as JSON)

```json
{
  "id": null,
  "street_address1": null,
  "street_address2": null,
  "street_address3": null,
  "street_address4": null,
  "locality": null,
  "region": null,
  "postal_code": null,
  "country_code": null,
  "country": null,
  "name": null,
  "first_name": null,
  "last_name": null,
  "company": null,
  "phone_number": null,
  "email_address": null
}
```

