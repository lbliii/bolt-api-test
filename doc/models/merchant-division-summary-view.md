
# Merchant Division Summary View

## Structure

`MerchantDivisionSummaryView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `merchantId` | `?string` | Optional | - | getMerchantId(): ?string | setMerchantId(?string merchantId): void |
| `publicId` | `?string` | Optional | - | getPublicId(): ?string | setPublicId(?string publicId): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `displayName` | `?string` | Optional | - | getDisplayName(): ?string | setDisplayName(?string displayName): void |
| `logo` | [`?MerchantDivisionLogoView`](../../doc/models/merchant-division-logo-view.md) | Optional | - | getLogo(): ?MerchantDivisionLogoView | setLogo(?MerchantDivisionLogoView logo): void |
| `logoDashboard` | [`?MerchantDivisionLogoView`](../../doc/models/merchant-division-logo-view.md) | Optional | - | getLogoDashboard(): ?MerchantDivisionLogoView | setLogoDashboard(?MerchantDivisionLogoView logoDashboard): void |
| `platform` | `?string` | Optional | - | getPlatform(): ?string | setPlatform(?string platform): void |
| `hookUrl` | `?string` | Optional | - | getHookUrl(): ?string | setHookUrl(?string hookUrl): void |
| `hookType` | [`?int (HookTypeEnum)`](../../doc/models/hook-type-enum.md) | Optional | - | getHookType(): ?int | setHookType(?int hookType): void |
| `isUniversalMerchantApi` | `?bool` | Optional | - | getIsUniversalMerchantApi(): ?bool | setIsUniversalMerchantApi(?bool isUniversalMerchantApi): void |
| `isWebhooksV2` | `?bool` | Optional | - | getIsWebhooksV2(): ?bool | setIsWebhooksV2(?bool isWebhooksV2): void |
| `webhookUrls` | `?(string[])` | Optional | - | getWebhookUrls(): ?array | setWebhookUrls(?array webhookUrls): void |
| `supportPageUrl` | `?string` | Optional | - | getSupportPageUrl(): ?string | setSupportPageUrl(?string supportPageUrl): void |
| `shippingAndTaxUrl` | `?string` | Optional | - | getShippingAndTaxUrl(): ?string | setShippingAndTaxUrl(?string shippingAndTaxUrl): void |
| `universalMerchantApiUrl` | `?string` | Optional | - | getUniversalMerchantApiUrl(): ?string | setUniversalMerchantApiUrl(?string universalMerchantApiUrl): void |
| `accountPageUrl` | `?string` | Optional | - | getAccountPageUrl(): ?string | setAccountPageUrl(?string accountPageUrl): void |
| `oauthRedirectUrl` | `?string` | Optional | - | getOauthRedirectUrl(): ?string | setOauthRedirectUrl(?string oauthRedirectUrl): void |
| `mobileAppDomainUrl` | `?string` | Optional | - | getMobileAppDomainUrl(): ?string | setMobileAppDomainUrl(?string mobileAppDomainUrl): void |
| `oauthLogoutUrl` | `?string` | Optional | - | getOauthLogoutUrl(): ?string | setOauthLogoutUrl(?string oauthLogoutUrl): void |
| `getAccountUrl` | `?string` | Optional | - | getGetAccountUrl(): ?string | setGetAccountUrl(?string getAccountUrl): void |
| `validateAdditionalAccountDataUrl` | `?string` | Optional | - | getValidateAdditionalAccountDataUrl(): ?string | setValidateAdditionalAccountDataUrl(?string validateAdditionalAccountDataUrl): void |
| `termsOfServiceUrl` | `?string` | Optional | - | getTermsOfServiceUrl(): ?string | setTermsOfServiceUrl(?string termsOfServiceUrl): void |
| `privacyPolicyUrl` | `?string` | Optional | - | getPrivacyPolicyUrl(): ?string | setPrivacyPolicyUrl(?string privacyPolicyUrl): void |
| `productInfoUrl` | `?string` | Optional | - | getProductInfoUrl(): ?string | setProductInfoUrl(?string productInfoUrl): void |
| `merchantSmsNumber` | `?string` | Optional | - | getMerchantSmsNumber(): ?string | setMerchantSmsNumber(?string merchantSmsNumber): void |
| `merchantSmsAutoreply` | `?string` | Optional | - | getMerchantSmsAutoreply(): ?string | setMerchantSmsAutoreply(?string merchantSmsAutoreply): void |
| `isProvisioned` | `?bool` | Optional | - | getIsProvisioned(): ?bool | setIsProvisioned(?bool isProvisioned): void |
| `iosAppName` | `?string` | Optional | - | getIosAppName(): ?string | setIosAppName(?string iosAppName): void |
| `shippingUrl` | `?string` | Optional | - | getShippingUrl(): ?string | setShippingUrl(?string shippingUrl): void |
| `taxUrl` | `?string` | Optional | - | getTaxUrl(): ?string | setTaxUrl(?string taxUrl): void |
| `updateCartUrl` | `?string` | Optional | - | getUpdateCartUrl(): ?string | setUpdateCartUrl(?string updateCartUrl): void |
| `debugUrl` | `?string` | Optional | - | getDebugUrl(): ?string | setDebugUrl(?string debugUrl): void |
| `sfccSiteId` | `?string` | Optional | - | getSfccSiteId(): ?string | setSfccSiteId(?string sfccSiteId): void |

## Example (as JSON)

```json
{
  "id": null,
  "merchant_id": null,
  "public_id": null,
  "description": null,
  "display_name": null,
  "logo": null,
  "logo_dashboard": null,
  "platform": null,
  "hook_url": null,
  "hook_type": null,
  "is_universal_merchant_api": null,
  "is_webhooks_v2": null,
  "webhook_urls": null,
  "support_page_url": null,
  "shipping_and_tax_url": null,
  "universal_merchant_api_url": null,
  "account_page_url": null,
  "oauth_redirect_url": null,
  "mobile_app_domain_url": null,
  "oauth_logout_url": null,
  "get_account_url": null,
  "validate_additional_account_data_url": null,
  "terms_of_service_url": null,
  "privacy_policy_url": null,
  "product_info_url": null,
  "merchant_sms_number": null,
  "merchant_sms_autoreply": null,
  "is_provisioned": null,
  "ios_app_name": null,
  "shipping_url": null,
  "tax_url": null,
  "update_cart_url": null,
  "debug_url": null,
  "sfcc_site_id": null
}
```

