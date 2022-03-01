
# V1 Merchant Statement Response

## Structure

`V1MerchantStatementResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `url` | `string` | Required | This is the pre-signed URL of the requested statement. The URL has an expiration period of 5 minutes.<br>Sharing the URL implies sharing the statement and its contents, please be careful. | getUrl(): string | setUrl(string url): void |

## Example (as JSON)

```json
{
  "url": "https://bolt-statements-production.s3.us-west-2.amazonaws.com/00_daily_transaction_20200410.csv"
}
```

