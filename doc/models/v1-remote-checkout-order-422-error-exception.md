
# V1 Remote Checkout Order 422 Error Exception

## Structure

`V1RemoteCheckoutOrder422ErrorException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `event` | [`?string (EventEnum)`](../../doc/models/event-enum.md) | Optional | - | getEvent(): ?string | setEvent(?string event): void |
| `status` | [`?string (Status4Enum)`](../../doc/models/status-4-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `error` | [`?Error`](../../doc/models/error.md) | Optional | - | getError(): ?Error | setError(?Error error): void |

## Example (as JSON)

```json
{
  "event": null,
  "status": null,
  "error": null
}
```

