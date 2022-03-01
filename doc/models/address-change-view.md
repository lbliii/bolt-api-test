
# Address Change View

## Structure

`AddressChangeView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ticketId` | `?string` | Optional | - | getTicketId(): ?string | setTicketId(?string ticketId): void |
| `fromAddress` | [`?AddressView`](../../doc/models/address-view.md) | Optional | The address object returned in the response. | getFromAddress(): ?AddressView | setFromAddress(?AddressView fromAddress): void |
| `toAddress` | [`?AddressView`](../../doc/models/address-view.md) | Optional | The address object returned in the response. | getToAddress(): ?AddressView | setToAddress(?AddressView toAddress): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `timestamp` | `?int` | Optional | - | getTimestamp(): ?int | setTimestamp(?int timestamp): void |

## Example (as JSON)

```json
{
  "ticket_id": null,
  "from_address": null,
  "to_address": null,
  "status": null,
  "timestamp": null
}
```

