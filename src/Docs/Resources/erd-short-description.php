<?php declare(strict_types=1);

return [
    Shopware\Core\Framework\Log\LogEntryDefinition::class => 'Logs',
    Shopware\Core\Framework\Api\Acl\Role\AclRoleDefinition::class => 'Acl role',
    Shopware\Core\Framework\Api\Acl\Role\AclUserRoleDefinition::class => 'M:N Mapping',
    Shopware\Core\System\CustomField\CustomFieldDefinition::class => 'CustomField configuration',
    Shopware\Core\System\CustomField\Aggregate\CustomFieldSet\CustomFieldSetDefinition::class => 'CustomField set/group',
    Shopware\Core\System\CustomField\Aggregate\CustomFieldSetRelation\CustomFieldSetRelationDefinition::class => 'Set to entity relation',
    Shopware\Core\Framework\Event\EventAction\EventActionDefinition::class => 'Configurable event handling',
    Shopware\Core\Framework\MessageQueue\DeadMessage\DeadMessageDefinition::class => 'Failing messages',
    Shopware\Core\Framework\MessageQueue\MessageQueueStatsDefinition::class => 'Stats',
    Shopware\Core\Framework\Plugin\PluginDefinition::class => 'Plugin',
    Shopware\Core\Framework\Plugin\Aggregate\PluginTranslation\PluginTranslationDefinition::class => 'Translations',
    Shopware\Core\Framework\MessageQueue\ScheduledTask\ScheduledTaskDefinition::class => 'Cron job',
    Shopware\Core\System\Language\LanguageDefinition::class => 'Language',
    Shopware\Core\Content\Seo\SeoUrl\SeoUrlDefinition::class => 'Seo urls',
    Shopware\Core\Content\Seo\SeoUrlTemplate\SeoUrlTemplateDefinition::class => 'Template',
    Shopware\Core\Content\Seo\MainCategory\MainCategoryDefinition::class => 'Seo main category',
    Shopware\Core\System\SalesChannel\SalesChannelDefinition::class => 'Sales Channel',
    Shopware\Core\System\SalesChannel\Aggregate\SalesChannelTranslation\SalesChannelTranslationDefinition::class => 'Translations',
    Shopware\Core\System\SalesChannel\Aggregate\SalesChannelCountry\SalesChannelCountryDefinition::class => 'M:N Mapping',
    Shopware\Core\System\SalesChannel\Aggregate\SalesChannelCurrency\SalesChannelCurrencyDefinition::class => 'M:N Mapping',
    Shopware\Core\System\SalesChannel\Aggregate\SalesChannelDomain\SalesChannelDomainDefinition::class => 'Domain names of a sales',
    Shopware\Core\System\SalesChannel\Aggregate\SalesChannelLanguage\SalesChannelLanguageDefinition::class => 'M:N Mapping',
    Shopware\Core\System\SalesChannel\Aggregate\SalesChannelPaymentMethod\SalesChannelPaymentMethodDefinition::class => 'M:N Mapping',
    Shopware\Core\System\SalesChannel\Aggregate\SalesChannelShippingMethod\SalesChannelShippingMethodDefinition::class => 'M:N Mapping',
    Shopware\Core\System\SalesChannel\Aggregate\SalesChannelType\SalesChannelTypeDefinition::class => 'Type',
    Shopware\Core\System\SalesChannel\Aggregate\SalesChannelTypeTranslation\SalesChannelTypeTranslationDefinition::class => 'Translations',
    Shopware\Core\System\SalesChannel\Aggregate\SalesChannelAnalytics\SalesChannelAnalyticsDefinition::class => 'Sales channel analytics',
    Shopware\Core\System\Country\CountryDefinition::class => 'Country',
    Shopware\Core\System\Country\Aggregate\CountryState\CountryStateDefinition::class => 'Country state',
    Shopware\Core\System\Country\Aggregate\CountryStateTranslation\CountryStateTranslationDefinition::class => 'Translations',
    Shopware\Core\System\Country\Aggregate\CountryTranslation\CountryTranslationDefinition::class => 'Translations',
    Shopware\Core\System\Currency\CurrencyDefinition::class => 'Currency',
    Shopware\Core\System\Currency\Aggregate\CurrencyTranslation\CurrencyTranslationDefinition::class => 'Translations',
    Shopware\Core\System\Locale\LocaleDefinition::class => 'A locale',
    Shopware\Core\System\Locale\Aggregate\LocaleTranslation\LocaleTranslationDefinition::class => 'Translations',
    Shopware\Core\System\Snippet\Aggregate\SnippetSet\SnippetSetDefinition::class => 'Sets of snippets',
    Shopware\Core\System\Snippet\SnippetDefinition::class => 'Translation Strings',
    Shopware\Core\System\Salutation\SalutationDefinition::class => 'Salutation configuration',
    Shopware\Core\System\Salutation\Aggregate\SalutationTranslation\SalutationTranslationDefinition::class => 'Translations',
    Shopware\Core\System\Tax\TaxDefinition::class => 'Available tax settings',
    Shopware\Core\System\Tax\Aggregate\TaxRule\TaxRuleDefinition::class => 'Tax rules',
    Shopware\Core\System\Tax\Aggregate\TaxRuleType\TaxRuleTypeDefinition::class => 'Tax rule types',
    Shopware\Core\System\Tax\Aggregate\TaxRuleTypeTranslation\TaxRuleTypeTranslationDefinition::class => 'Translations',
    Shopware\Core\System\Unit\UnitDefinition::class => 'Measuring unit',
    Shopware\Core\System\Unit\Aggregate\UnitTranslation\UnitTranslationDefinition::class => 'Translations',
    Shopware\Core\System\User\UserDefinition::class => 'Administration/ Management Account user',
    Shopware\Core\System\User\Aggregate\UserAccessKey\UserAccessKeyDefinition::class => 'oAuth access key',
    Shopware\Core\System\User\Aggregate\UserRecovery\UserRecoveryDefinition::class => 'User / Account recovery process',
    Shopware\Core\System\Integration\IntegrationDefinition::class => 'O-Auth integration',
    Shopware\Core\System\StateMachine\StateMachineDefinition::class => 'State machine',
    Shopware\Core\System\StateMachine\StateMachineTranslationDefinition::class => 'Translations',
    Shopware\Core\System\StateMachine\Aggregation\StateMachineState\StateMachineStateDefinition::class => 'State',
    Shopware\Core\System\StateMachine\Aggregation\StateMachineState\StateMachineStateTranslationDefinition::class => 'Translations',
    Shopware\Core\System\StateMachine\Aggregation\StateMachineTransition\StateMachineTransitionDefinition::class => 'State transition',
    Shopware\Core\System\StateMachine\Aggregation\StateMachineHistory\StateMachineHistoryDefinition::class => 'State transition history',
    Shopware\Core\System\SystemConfig\SystemConfigDefinition::class => 'System configuration',
    Shopware\Core\System\NumberRange\NumberRangeDefinition::class => 'Number range',
    Shopware\Core\System\NumberRange\Aggregate\NumberRangeSalesChannel\NumberRangeSalesChannelDefinition::class => 'M:N Mapping',
    Shopware\Core\System\NumberRange\Aggregate\NumberRangeState\NumberRangeStateDefinition::class => 'Current number range max value',
    Shopware\Core\System\NumberRange\Aggregate\NumberRangeType\NumberRangeTypeDefinition::class => 'Type',
    Shopware\Core\System\NumberRange\Aggregate\NumberRangeTypeTranslation\NumberRangeTypeTranslationDefinition::class => 'Translations',
    Shopware\Core\System\NumberRange\Aggregate\NumberRangeTranslation\NumberRangeTranslationDefinition::class => 'Translations',
    Shopware\Core\System\Tag\TagDefinition::class => 'Taxonomy',
    Shopware\Core\Content\Category\CategoryDefinition::class => 'Category tree',
    Shopware\Core\Content\Category\Aggregate\CategoryTranslation\CategoryTranslationDefinition::class => 'Translations',
    Shopware\Core\Content\Category\Aggregate\CategoryTag\CategoryTagDefinition::class => 'M:N Mapping',
    Shopware\Core\Content\Media\MediaDefinition::class => 'Media / Files',
    Shopware\Core\Content\Media\Aggregate\MediaDefaultFolder\MediaDefaultFolderDefinition::class => 'Default folders',
    Shopware\Core\Content\Media\Aggregate\MediaThumbnail\MediaThumbnailDefinition::class => 'Generated Thumbnail',
    Shopware\Core\Content\Media\Aggregate\MediaTranslation\MediaTranslationDefinition::class => 'Translations',
    Shopware\Core\Content\Media\Aggregate\MediaFolder\MediaFolderDefinition::class => 'Folder structure',
    Shopware\Core\Content\Media\Aggregate\MediaThumbnailSize\MediaThumbnailSizeDefinition::class => 'Generated Thumbnails',
    Shopware\Core\Content\Media\Aggregate\MediaFolderConfiguration\MediaFolderConfigurationDefinition::class => 'Configuration',
    Shopware\Core\Content\Media\Aggregate\MediaFolderConfigurationMediaThumbnailSize\MediaFolderConfigurationMediaThumbnailSizeDefinition::class => 'M:N Mapping',
    Shopware\Core\Content\Media\Aggregate\MediaTag\MediaTagDefinition::class => 'M:N Mapping',
    Shopware\Core\Content\Product\ProductDefinition::class => 'Product',
    Shopware\Core\Content\Product\Aggregate\ProductCategory\ProductCategoryDefinition::class => 'M:N Mapping',
    Shopware\Core\Content\Product\Aggregate\ProductCustomFieldSet\ProductCustomFieldSetDefinition::class => 'M:N Mapping',
    Shopware\Core\Content\Product\Aggregate\ProductTag\ProductTagDefinition::class => 'M:N Mapping',
    Shopware\Core\Content\Product\Aggregate\ProductConfiguratorSetting\ProductConfiguratorSettingDefinition::class => 'The root product configurator.',
    Shopware\Core\Content\Product\Aggregate\ProductPrice\ProductPriceDefinition::class => 'Staggered pricing',
    Shopware\Core\Content\Product\Aggregate\ProductProperty\ProductPropertyDefinition::class => 'M:N Mapping',
    Shopware\Core\Content\Product\Aggregate\ProductSearchKeyword\ProductSearchKeywordDefinition::class => 'Search keywords',
    Shopware\Core\Content\Product\Aggregate\ProductKeywordDictionary\ProductKeywordDictionaryDefinition::class => 'Search dictionary',
    Shopware\Core\Content\Product\Aggregate\ProductReview\ProductReviewDefinition::class => 'Product reviews',
    Shopware\Core\Content\Product\Aggregate\ProductManufacturer\ProductManufacturerDefinition::class => 'Manufacturer',
    Shopware\Core\Content\Product\Aggregate\ProductManufacturerTranslation\ProductManufacturerTranslationDefinition::class => 'Translations',
    Shopware\Core\Content\Product\Aggregate\ProductMedia\ProductMediaDefinition::class => 'Product media/images',
    Shopware\Core\Content\Product\Aggregate\ProductTranslation\ProductTranslationDefinition::class => 'Translations',
    Shopware\Core\Content\Product\Aggregate\ProductOption\ProductOptionDefinition::class => 'M:N Mapping',
    Shopware\Core\Content\Product\Aggregate\ProductCategoryTree\ProductCategoryTreeDefinition::class => 'M:N Mapping',
    Shopware\Core\Content\Product\Aggregate\ProductCrossSelling\ProductCrossSellingDefinition::class => 'Cross selling products',
    Shopware\Core\Content\Product\Aggregate\ProductCrossSellingTranslation\ProductCrossSellingTranslationDefinition::class => 'Translations',
    Shopware\Core\Content\Product\Aggregate\ProductCrossSellingAssignedProducts\ProductCrossSellingAssignedProductsDefinition::class => 'Assigned Cross selling products',
    Shopware\Core\Content\Product\Aggregate\ProductFeatureSet\ProductFeatureSetDefinition::class => 'Product feature sets',
    Shopware\Core\Content\Product\Aggregate\ProductFeatureSetTranslation\ProductFeatureSetTranslationDefinition::class => 'Translations',
    Shopware\Core\Content\Product\Aggregate\ProductVisibility\ProductVisibilityDefinition::class => 'Visibility in sales channels',
    Shopware\Core\System\DeliveryTime\DeliveryTimeDefinition::class => 'Delivery time',
    Shopware\Core\Content\Newsletter\Aggregate\NewsletterRecipient\NewsletterRecipientDefinition::class => 'Newsletter recipient',
    Shopware\Core\Content\Newsletter\Aggregate\NewsletterRecipientTag\NewsletterRecipientTagDefinition::class => 'M:N Mapping',
    Shopware\Core\Content\Rule\RuleDefinition::class => 'Rule',
    Shopware\Core\Content\Rule\Aggregate\RuleCondition\RuleConditionDefinition::class => 'Rule condition',
    Shopware\Core\Content\ProductStream\ProductStreamDefinition::class => 'Product streams',
    Shopware\Core\Content\ProductStream\Aggregate\ProductStreamTranslation\ProductStreamTranslationDefinition::class => 'Translations',
    Shopware\Core\Content\ProductStream\Aggregate\ProductStreamFilter\ProductStreamFilterDefinition::class => 'A Product stream filter term',
    Shopware\Core\Content\ProductExport\ProductExportDefinition::class => 'Product exports',
    Shopware\Core\Content\Property\PropertyGroupDefinition::class => 'Property Group',
    Shopware\Core\Content\Property\Aggregate\PropertyGroupOption\PropertyGroupOptionDefinition::class => 'Property option',
    Shopware\Core\Content\Property\Aggregate\PropertyGroupOptionTranslation\PropertyGroupOptionTranslationDefinition::class => 'Translations',
    Shopware\Core\Content\Property\Aggregate\PropertyGroupTranslation\PropertyGroupTranslationDefinition::class => 'Translations',
    Shopware\Core\Content\Cms\CmsPageDefinition::class => 'Content Page',
    Shopware\Core\Content\Cms\Aggregate\CmsPageTranslation\CmsPageTranslationDefinition::class => 'Translations',
    Shopware\Core\Content\Cms\Aggregate\CmsSection\CmsSectionDefinition::class => 'Content Section',
    Shopware\Core\Content\Cms\Aggregate\CmsBlock\CmsBlockDefinition::class => 'Content Block',
    Shopware\Core\Content\Cms\Aggregate\CmsSlot\CmsSlotDefinition::class => 'Content Slot',
    Shopware\Core\Content\Cms\Aggregate\CmsSlotTranslation\CmsSlotTranslationDefinition::class => 'Translations',
    Shopware\Core\Content\MailTemplate\MailTemplateDefinition::class => 'Mail Template',
    Shopware\Core\Content\MailTemplate\Aggregate\MailTemplateTranslation\MailTemplateTranslationDefinition::class => 'Translations',
    Shopware\Core\Content\MailTemplate\Aggregate\MailTemplateType\MailTemplateTypeDefinition::class => 'Type',
    Shopware\Core\Content\MailTemplate\Aggregate\MailTemplateTypeTranslation\MailTemplateTypeTranslationDefinition::class => 'Translations',
    Shopware\Core\Content\MailTemplate\Aggregate\MailTemplateMedia\MailTemplateMediaDefinition::class => 'M:N Mapping',
    Shopware\Core\Content\MailTemplate\Aggregate\MailHeaderFooter\MailHeaderFooterDefinition::class => 'Header/Footer content',
    Shopware\Core\Content\MailTemplate\Aggregate\MailHeaderFooterTranslation\MailHeaderFooterTranslationDefinition::class => 'Translations',
    Shopware\Core\System\DeliveryTime\Aggregate\DeliveryTimeTranslation\DeliveryTimeTranslationDefinition::class => 'Translations',
    Shopware\Core\Content\ImportExport\ImportExportProfileDefinition::class => 'File profile definition',
    Shopware\Core\Content\ImportExport\Aggregate\ImportExportLog\ImportExportLogDefinition::class => 'Change log',
    Shopware\Core\Content\ImportExport\Aggregate\ImportExportFile\ImportExportFileDefinition::class => 'Import/Export file',
    Shopware\Core\Content\ImportExport\ImportExportProfileTranslationDefinition::class => 'Translations',
    Shopware\Core\Checkout\Customer\CustomerDefinition::class => 'The sales channel customer',
    Shopware\Core\Checkout\Customer\Aggregate\CustomerGroupTranslation\CustomerGroupTranslationDefinition::class => 'Translations',
    Shopware\Core\Checkout\Customer\Aggregate\CustomerAddress\CustomerAddressDefinition::class => 'The customer addresses.',
    Shopware\Core\Checkout\Customer\Aggregate\CustomerRecovery\CustomerRecoveryDefinition::class => 'Customer recovery process',
    Shopware\Core\Checkout\Customer\Aggregate\CustomerGroup\CustomerGroupDefinition::class => 'Customer groups',
    Shopware\Core\Checkout\Customer\Aggregate\CustomerGroupRegistrationSalesChannel\CustomerGroupRegistrationSalesChannelDefinition::class => 'M:N Mapping',
    Shopware\Core\Checkout\Customer\Aggregate\CustomerTag\CustomerTagDefinition::class => 'M:N Mapping',
    Shopware\Core\Checkout\Document\DocumentDefinition::class => 'Document',
    Shopware\Core\Checkout\Document\Aggregate\DocumentType\DocumentTypeDefinition::class => 'Type',
    Shopware\Core\Checkout\Document\Aggregate\DocumentTypeTranslation\DocumentTypeTranslationDefinition::class => 'Translations',
    Shopware\Core\Checkout\Document\Aggregate\DocumentBaseConfig\DocumentBaseConfigDefinition::class => 'Configuration',
    Shopware\Core\Checkout\Document\Aggregate\DocumentBaseConfigSalesChannel\DocumentBaseConfigSalesChannelDefinition::class => 'SalesChannel Configuration',
    Shopware\Core\Checkout\Order\OrderDefinition::class => 'Order root table',
    Shopware\Core\Checkout\Order\Aggregate\OrderAddress\OrderAddressDefinition::class => 'Order address',
    Shopware\Core\Checkout\Order\Aggregate\OrderCustomer\OrderCustomerDefinition::class => 'Order customer',
    Shopware\Core\Checkout\Order\Aggregate\OrderDelivery\OrderDeliveryDefinition::class => 'Delivery',
    Shopware\Core\Checkout\Order\Aggregate\OrderDeliveryPosition\OrderDeliveryPositionDefinition::class => 'Delivery position',
    Shopware\Core\Checkout\Order\Aggregate\OrderLineItem\OrderLineItemDefinition::class => 'Order line item',
    Shopware\Core\Checkout\Order\Aggregate\OrderTag\OrderTagDefinition::class => 'M:N Mapping',
    Shopware\Core\Checkout\Order\Aggregate\OrderTransaction\OrderTransactionDefinition::class => 'Order transaction',
    Shopware\Core\Checkout\Payment\PaymentMethodDefinition::class => 'Payment method',
    Shopware\Core\Checkout\Payment\Aggregate\PaymentMethodTranslation\PaymentMethodTranslationDefinition::class => 'Translations',
    Shopware\Core\Checkout\Promotion\PromotionDefinition::class => 'Discounts with settings',
    Shopware\Core\Checkout\Promotion\Aggregate\PromotionSalesChannel\PromotionSalesChannelDefinition::class => 'Promotion configuration',
    Shopware\Core\Checkout\Promotion\Aggregate\PromotionIndividualCode\PromotionIndividualCodeDefinition::class => 'Individual promotion codes',
    Shopware\Core\Checkout\Promotion\Aggregate\PromotionDiscount\PromotionDiscountDefinition::class => 'Discounts',
    Shopware\Core\Checkout\Promotion\Aggregate\PromotionDiscountRule\PromotionDiscountRuleDefinition::class => 'M:N Mapping',
    Shopware\Core\Checkout\Promotion\Aggregate\PromotionSetGroup\PromotionSetGroupDefinition::class => 'Promotion set groups',
    Shopware\Core\Checkout\Promotion\Aggregate\PromotionSetGroupRule\PromotionSetGroupRuleDefinition::class => 'M:N Mapping',
    Shopware\Core\Checkout\Promotion\Aggregate\PromotionOrderRule\PromotionOrderRuleDefinition::class => 'M:N Mapping',
    Shopware\Core\Checkout\Promotion\Aggregate\PromotionPersonaCustomer\PromotionPersonaCustomerDefinition::class => 'M:N Mapping',
    Shopware\Core\Checkout\Promotion\Aggregate\PromotionPersonaRule\PromotionPersonaRuleDefinition::class => 'M:N Mapping',
    Shopware\Core\Checkout\Promotion\Aggregate\PromotionCartRule\PromotionCartRuleDefinition::class => 'M:N Mapping',
    Shopware\Core\Checkout\Promotion\Aggregate\PromotionTranslation\PromotionTranslationDefinition::class => 'Translations',
    Shopware\Core\Checkout\Promotion\Aggregate\PromotionDiscountPrice\PromotionDiscountPriceDefinition::class => 'Promotion discounts',
    Shopware\Core\Checkout\Shipping\ShippingMethodDefinition::class => 'Shipping method',
    Shopware\Core\Checkout\Shipping\Aggregate\ShippingMethodTag\ShippingMethodTagDefinition::class => 'M:N Mapping',
    Shopware\Core\Checkout\Shipping\Aggregate\ShippingMethodPrice\ShippingMethodPriceDefinition::class => 'Prices of a shipping method',
    Shopware\Core\Checkout\Shipping\Aggregate\ShippingMethodTranslation\ShippingMethodTranslationDefinition::class => 'Translations',
    Shopware\Storefront\Theme\ThemeDefinition::class => 'Storefront themes',
    Shopware\Storefront\Theme\Aggregate\ThemeTranslationDefinition::class => 'Translations',
    Shopware\Storefront\Theme\Aggregate\ThemeSalesChannelDefinition::class => 'M:N Mapping',
    Shopware\Storefront\Theme\Aggregate\ThemeMediaDefinition::class => 'M:N Mapping',
    'Shopware\\Core\\Framework\\Log' => 'Logs',
    'Shopware\\Core\\Framework\\Api' => 'Rest-API',
    'Shopware\\Core\\System\\CustomField' => 'Custom Fields/EAV',
    'Shopware\\Core\\Framework\\Event' => 'Business events',
    'Shopware\\Core\\Framework\\MessageQueue' => 'Asynchronous messaging',
    Shopware\Core\Framework\Plugin::class => 'Plugins',
    'Shopware\\Core\\System\\Language' => 'Languages',
    'Shopware\\Core\\Content\\Seo' => 'Seo',
    'Shopware\\Core\\System\\SalesChannel' => 'Sales channels',
    'Shopware\\Core\\System\\Country' => 'Countries',
    'Shopware\\Core\\System\\Currency' => 'Currencies',
    'Shopware\\Core\\System\\Locale' => 'Locales',
    'Shopware\\Core\\System\\Snippet' => 'Custom placeholder translations',
    'Shopware\\Core\\System\\Salutation' => 'Salutations',
    'Shopware\\Core\\System\\Tax' => 'Taxes',
    'Shopware\\Core\\System\\Unit' => 'Units',
    'Shopware\\Core\\System\\User' => 'Admin Accounts',
    'Shopware\\Core\\System\\Integration' => 'O-Auth integrations',
    'Shopware\\Core\\System\\StateMachine' => 'State machine',
    'Shopware\\Core\\System\\SystemConfig' => 'System configuration',
    'Shopware\\Core\\System\\NumberRange' => 'Number ranges',
    'Shopware\\Core\\System\\Tag' => 'Tags',
    'Shopware\\Core\\Content\\Category' => 'Categories',
    'Shopware\\Core\\Content\\Media' => 'Media/File management',
    'Shopware\\Core\\Content\\Product' => 'Products',
    'Shopware\\Core\\System\\DeliveryTime' => 'Delivery time',
    'Shopware\\Core\\Content\\Newsletter' => 'Newsletter',
    'Shopware\\Core\\Content\\Rule' => 'Rules',
    'Shopware\\Core\\Content\\ProductStream' => 'Product streams',
    'Shopware\\Core\\Content\\ProductExport' => 'Product export',
    'Shopware\\Core\\Content\\Property' => 'Property',
    'Shopware\\Core\\Content\\Cms' => 'Content Management',
    'Shopware\\Core\\Content\\MailTemplate' => 'Mailing',
    'Shopware\\Core\\Content\\ImportExport' => 'Import/Export',
    'Shopware\\Core\\Checkout\\Customer' => 'Customer',
    'Shopware\\Core\\Checkout\\Document' => 'Printed works',
    'Shopware\\Core\\Checkout\\Order' => 'Orders',
    'Shopware\\Core\\Checkout\\Payment' => 'Payments',
    'Shopware\\Core\\Checkout\\Promotion' => 'Promotions',
    'Shopware\\Core\\Checkout\\Shipping' => 'Shipping',
    'Shopware\\Storefront' => 'Storefront',
    Shopware\Core\Content\Product\SalesChannel\Sorting\ProductSortingDefinition::class => 'Product sorting',
    Shopware\Core\Content\Product\SalesChannel\Sorting\ProductSortingTranslationDefinition::class => 'Translations',
    Shopware\Core\Framework\Event\EventAction\Aggregate\EventActionRule\EventActionRuleDefinition::class => 'M:N Mapping',
    Shopware\Core\Framework\Event\EventAction\Aggregate\EventActionSalesChannel\EventActionSalesChannelDefinition::class => 'M:N Mapping',
    Shopware\Core\System\Integration\Aggregate\IntegrationRole\IntegrationRoleDefinition::class => 'M:N Mapping',
    Shopware\Core\System\Currency\Aggregate\CurrencyCountryRounding\CurrencyCountryRoundingDefinition::class => '__EMPTY__',
    Shopware\Core\Framework\App\AppDefinition::class => '__EMPTY__',
    Shopware\Core\Framework\App\Aggregate\AppTranslation\AppTranslationDefinition::class => 'Translations',
    Shopware\Core\Framework\App\Aggregate\ActionButton\ActionButtonDefinition::class => '__EMPTY__',
    Shopware\Core\Framework\App\Aggregate\ActionButtonTranslation\ActionButtonTranslationDefinition::class => 'Translations',
    Shopware\Core\Framework\App\Template\TemplateDefinition::class => '__EMPTY__',
    Shopware\Core\Framework\Webhook\WebhookDefinition::class => '__EMPTY__',
    'Shopware\\Core\\Framework\\App' => '__EMPTY__',
    'Shopware\\Core\\Framework\\Webhook' => '__EMPTY__',
    Shopware\Core\Checkout\Customer\Aggregate\CustomerWishlist\CustomerWishlistDefinition::class => '__EMPTY__',
    Shopware\Core\Checkout\Customer\Aggregate\CustomerWishlistProduct\CustomerWishlistProductDefinition::class => '__EMPTY__',
    Shopware\Core\System\User\Aggregate\UserConfig\UserConfigDefinition::class => 'User Config',
    Shopware\Core\Content\Product\Aggregate\ProductSearchConfig\ProductSearchConfigDefinition::class => '__EMPTY__',
    Shopware\Core\Content\Product\Aggregate\ProductSearchConfigField\ProductSearchConfigFieldDefinition::class => '__EMPTY__',
];
