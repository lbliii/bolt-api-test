
# Address

The Address object is used for billing, shipping, and physical store address use cases.

## Structure

`Address`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `streetAddress1` | `string` | Required | Used for the street number and street name of the address.<br>**Constraints**: *Maximum Length*: `1024` | getStreetAddress1(): string | setStreetAddress1(string streetAddress1): void |
| `streetAddress2` | `?string` | Optional | Used for any apartment, floor, or unit details.<br>**Constraints**: *Maximum Length*: `1024` | getStreetAddress2(): ?string | setStreetAddress2(?string streetAddress2): void |
| `streetAddress3` | `?string` | Optional | Used for region details such as state or province.<br>**Constraints**: *Maximum Length*: `1024` | getStreetAddress3(): ?string | setStreetAddress3(?string streetAddress3): void |
| `streetAddress4` | `?string` | Optional | Used for city name details.<br>**Constraints**: *Maximum Length*: `1024` | getStreetAddress4(): ?string | setStreetAddress4(?string streetAddress4): void |
| `locality` | `string` | Required | Used for city name details associated with this address.<br>**Constraints**: *Maximum Length*: `1024` | getLocality(): string | setLocality(string locality): void |
| `region` | `string` | Required | Used for region details such as state or province associated with this address.<br>**Constraints**: *Maximum Length*: `1024` | getRegion(): string | setRegion(string region): void |
| `postalCode` | `string` | Required | Used for the postal or zip code associated with this address.<br>**Constraints**: *Maximum Length*: `32` | getPostalCode(): string | setPostalCode(string postalCode): void |
| `countryCode` | `?string` | Optional | Used for the 2-digit ISO 3166-1 alpha 2 country code associated with this address.<br>**Constraints**: *Maximum Length*: `2` | getCountryCode(): ?string | setCountryCode(?string countryCode): void |
| `country` | `?string` | Optional | Used for the name of the country associated with this address.<br>**Constraints**: *Maximum Length*: `1024` | getCountry(): ?string | setCountry(?string country): void |
| `name` | `?string` | Optional | The given and surname of the person associated with this address.<br>**Constraints**: *Maximum Length*: `1024` | getName(): ?string | setName(?string name): void |
| `firstName` | `?string` | Optional | The given name of the person associated with this address.<br>**Constraints**: *Maximum Length*: `1024` | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | The surname of the person associated with this address.<br>**Constraints**: *Maximum Length*: `1024` | getLastName(): ?string | setLastName(?string lastName): void |
| `company` | `?string` | Optional | The company name associated with this address.<br>**Constraints**: *Maximum Length*: `1024` | getCompany(): ?string | setCompany(?string company): void |
| `phone` | `?string` | Optional | The phone number of the person associated with this address.<br>**Constraints**: *Maximum Length*: `255` | getPhone(): ?string | setPhone(?string phone): void |
| `email` | `?string` | Optional | The email of the person associated with this address.<br>**Constraints**: *Maximum Length*: `255` | getEmail(): ?string | setEmail(?string email): void |

## Example (as JSON)

```json
{
  "street_address1": "888 main street",
  "locality": "New York",
  "region": "NY",
  "postal_code": "10044"
}
```

