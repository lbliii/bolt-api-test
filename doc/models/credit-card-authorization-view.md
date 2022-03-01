
# Credit Card Authorization View

## Structure

`CreditCardAuthorizationView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `auth` | `?string` | Optional | - | getAuth(): ?string | setAuth(?string auth): void |
| `avsResponse` | [`?string (AvsResponseEnum)`](../../doc/models/avs-response-enum.md) | Optional | - | getAvsResponse(): ?string | setAvsResponse(?string avsResponse): void |
| `cvvResponse` | [`?string (CvvResponseEnum)`](../../doc/models/cvv-response-enum.md) | Optional | - | getCvvResponse(): ?string | setCvvResponse(?string cvvResponse): void |
| `metadata` | `?array<string,string>` | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `processor` | [`?string (Processor1Enum)`](../../doc/models/processor-1-enum.md) | Optional | - | getProcessor(): ?string | setProcessor(?string processor): void |
| `reason` | `?string` | Optional | - | getReason(): ?string | setReason(?string reason): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "auth": null,
  "avs_response": null,
  "cvv_response": null,
  "metadata": null,
  "processor": null,
  "reason": null,
  "status": null
}
```

