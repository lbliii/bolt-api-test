
# I Authorize Result View

## Structure

`IAuthorizeResultView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transaction` | [`?TransactionView`](../../doc/models/transaction-view.md) | Optional | - | getTransaction(): ?TransactionView | setTransaction(?TransactionView transaction): void |
| `externalOutputs` | [`?AuthorizeExternalOutputs`](../../doc/models/authorize-external-outputs.md) | Optional | - | getExternalOutputs(): ?AuthorizeExternalOutputs | setExternalOutputs(?AuthorizeExternalOutputs externalOutputs): void |
| `isVerifiedDeviceSaved` | `?bool` | Optional | - | getIsVerifiedDeviceSaved(): ?bool | setIsVerifiedDeviceSaved(?bool isVerifiedDeviceSaved): void |
| `redirectUrl` | `?string` | Optional | - | getRedirectUrl(): ?string | setRedirectUrl(?string redirectUrl): void |

## Example (as JSON)

```json
{
  "transaction": null,
  "external_outputs": null,
  "is_verified_device_saved": null,
  "redirect_url": null
}
```

