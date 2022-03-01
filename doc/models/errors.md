
# Errors

Error object containing custom error information

## Structure

`Errors`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `?int` | Optional | Custom defined bolt error code. This can be used to programmatically react to specific errors. | getCode(): ?int | setCode(?int code): void |
| `message` | `?string` | Optional | Human readable description of the error for developers. These shouldn't be shown to users and is not localized. | getMessage(): ?string | setMessage(?string message): void |

## Example (as JSON)

```json
{
  "code": null,
  "message": null
}
```

