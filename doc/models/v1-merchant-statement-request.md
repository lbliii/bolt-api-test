
# V1 Merchant Statement Request

## Structure

`V1MerchantStatementRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`string (Type9Enum)`](../../doc/models/type-9-enum.md) | Required | The type of statement. The type is prepended with a prefix containing the frequency of the statement. The prefix will be either daily or monthly. Transaction statements will contain all transactional event entries. Funding statements contain only funding transactional event entries. | getType(): string | setType(string type): void |
| `fileType` | `string` | Required, Constant | This is the type of the file. Currently, Bolt only supports CSV statements.<br>**Default**: `'csv'` | getFileType(): string | setFileType(string fileType): void |
| `date` | `int` | Required | This is the date of the statement, in milliseconds since the Unix epoch time. | getDate(): int | setDate(int date): void |

## Example (as JSON)

```json
{
  "type": "daily_transaction",
  "file_type": "csv",
  "date": 1586480400000
}
```

