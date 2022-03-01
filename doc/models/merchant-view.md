
# Merchant View

## Structure

`MerchantView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `createdAt` | `?string` | Optional | - | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `processor` | [`?string (Processor1Enum)`](../../doc/models/processor-1-enum.md) | Optional | - | getProcessor(): ?string | setProcessor(?string processor): void |
| `operationalProcessors` | [`?(OperationalProcessor[])`](../../doc/models/operational-processor.md) | Optional | - | getOperationalProcessors(): ?array | setOperationalProcessors(?array operationalProcessors): void |
| `publicId` | `?string` | Optional | - | getPublicId(): ?string | setPublicId(?string publicId): void |
| `timeZone` | `?string` | Optional | - | getTimeZone(): ?string | setTimeZone(?string timeZone): void |
| `onboardingStatus` | [`?string (OnboardingStatusEnum)`](../../doc/models/onboarding-status-enum.md) | Optional | - | getOnboardingStatus(): ?string | setOnboardingStatus(?string onboardingStatus): void |

## Example (as JSON)

```json
{
  "created_at": null,
  "description": null,
  "processor": null,
  "operational_processors": null,
  "public_id": null,
  "time_zone": null,
  "onboarding_status": null
}
```

