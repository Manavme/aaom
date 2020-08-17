<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class CachedCiviContainer extends Container
{
    private $parameters = [];
    private $targetDirs = [];

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = [];
        $this->normalizedIds = [
            'cache.contacttypes' => 'cache.contactTypes',
            'cache.customdata' => 'cache.customData',
            'cache.prevnextcache' => 'cache.prevNextCache',
            'civi.case.statictriggers' => 'civi.case.staticTriggers',
            'civi_api4_event_subscriber_activityprecreationsubscriber' => 'Civi_Api4_Event_Subscriber_ActivityPreCreationSubscriber',
            'civi_api4_event_subscriber_activityschemamapsubscriber' => 'Civi_Api4_Event_Subscriber_ActivitySchemaMapSubscriber',
            'civi_api4_event_subscriber_contactpresavesubscriber' => 'Civi_Api4_Event_Subscriber_ContactPreSaveSubscriber',
            'civi_api4_event_subscriber_contributionpresavesubscriber' => 'Civi_Api4_Event_Subscriber_ContributionPreSaveSubscriber',
            'civi_api4_event_subscriber_customfieldpresavesubscriber' => 'Civi_Api4_Event_Subscriber_CustomFieldPreSaveSubscriber',
            'civi_api4_event_subscriber_customgroupprecreationsubscriber' => 'Civi_Api4_Event_Subscriber_CustomGroupPreCreationSubscriber',
            'civi_api4_event_subscriber_iscurrentsubscriber' => 'Civi_Api4_Event_Subscriber_IsCurrentSubscriber',
            'civi_api4_event_subscriber_optionvalueprecreationsubscriber' => 'Civi_Api4_Event_Subscriber_OptionValuePreCreationSubscriber',
            'civi_api4_event_subscriber_permissionchecksubscriber' => 'Civi_Api4_Event_Subscriber_PermissionCheckSubscriber',
            'civi_api4_event_subscriber_validatefieldssubscriber' => 'Civi_Api4_Event_Subscriber_ValidateFieldsSubscriber',
            'civi_api4_service_spec_provider_aclcreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_ACLCreationSpecProvider',
            'civi_api4_service_spec_provider_actionschedulecreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_ActionScheduleCreationSpecProvider',
            'civi_api4_service_spec_provider_activitycreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_ActivityCreationSpecProvider',
            'civi_api4_service_spec_provider_addresscreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_AddressCreationSpecProvider',
            'civi_api4_service_spec_provider_campaigncreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_CampaignCreationSpecProvider',
            'civi_api4_service_spec_provider_contactcreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_ContactCreationSpecProvider',
            'civi_api4_service_spec_provider_contacttypecreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_ContactTypeCreationSpecProvider',
            'civi_api4_service_spec_provider_contributioncreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_ContributionCreationSpecProvider',
            'civi_api4_service_spec_provider_contributionrecurcreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_ContributionRecurCreationSpecProvider',
            'civi_api4_service_spec_provider_customfieldcreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_CustomFieldCreationSpecProvider',
            'civi_api4_service_spec_provider_customgroupcreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_CustomGroupCreationSpecProvider',
            'civi_api4_service_spec_provider_customvaluespecprovider' => 'Civi_Api4_Service_Spec_Provider_CustomValueSpecProvider',
            'civi_api4_service_spec_provider_defaultlocationtypeprovider' => 'Civi_Api4_Service_Spec_Provider_DefaultLocationTypeProvider',
            'civi_api4_service_spec_provider_domaincreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_DomainCreationSpecProvider',
            'civi_api4_service_spec_provider_emailcreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_EmailCreationSpecProvider',
            'civi_api4_service_spec_provider_entitytagcreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_EntityTagCreationSpecProvider',
            'civi_api4_service_spec_provider_eventcreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_EventCreationSpecProvider',
            'civi_api4_service_spec_provider_fielddomainidspecprovider' => 'Civi_Api4_Service_Spec_Provider_FieldDomainIdSpecProvider',
            'civi_api4_service_spec_provider_getactiondefaultsprovider' => 'Civi_Api4_Service_Spec_Provider_GetActionDefaultsProvider',
            'civi_api4_service_spec_provider_groupcreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_GroupCreationSpecProvider',
            'civi_api4_service_spec_provider_mappingcreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_MappingCreationSpecProvider',
            'civi_api4_service_spec_provider_navigationspecprovider' => 'Civi_Api4_Service_Spec_Provider_NavigationSpecProvider',
            'civi_api4_service_spec_provider_notecreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_NoteCreationSpecProvider',
            'civi_api4_service_spec_provider_optionvaluecreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_OptionValueCreationSpecProvider',
            'civi_api4_service_spec_provider_paymentprocessorcreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_PaymentProcessorCreationSpecProvider',
            'civi_api4_service_spec_provider_paymentprocessortypecreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_PaymentProcessorTypeCreationSpecProvider',
            'civi_api4_service_spec_provider_phonecreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_PhoneCreationSpecProvider',
            'civi_api4_service_spec_provider_pricefieldvaluecreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_PriceFieldValueCreationSpecProvider',
            'civi_api4_service_spec_provider_relationshiptypecreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_RelationshipTypeCreationSpecProvider',
            'civi_api4_service_spec_provider_tagcreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_TagCreationSpecProvider',
            'civi_api4_service_spec_provider_uffieldcreationspecprovider' => 'Civi_Api4_Service_Spec_Provider_UFFieldCreationSpecProvider',
            'httpclient' => 'httpClient',
            'lockmanager' => 'lockManager',
            'userpermissionclass' => 'userPermissionClass',
            'usersystem' => 'userSystem',
        ];
        $this->syntheticIds = [
            'cache.settings' => true,
            'lockManager' => true,
            'paths' => true,
            'runtime' => true,
            'settings_manager' => true,
            'userPermissionClass' => true,
            'userSystem' => true,
        ];
        $this->methodMap = [
            'Civi_Api4_Event_Subscriber_ActivityPreCreationSubscriber' => 'getCiviApi4EventSubscriberActivityPreCreationSubscriberService',
            'Civi_Api4_Event_Subscriber_ActivitySchemaMapSubscriber' => 'getCiviApi4EventSubscriberActivitySchemaMapSubscriberService',
            'Civi_Api4_Event_Subscriber_ContactPreSaveSubscriber' => 'getCiviApi4EventSubscriberContactPreSaveSubscriberService',
            'Civi_Api4_Event_Subscriber_ContributionPreSaveSubscriber' => 'getCiviApi4EventSubscriberContributionPreSaveSubscriberService',
            'Civi_Api4_Event_Subscriber_CustomFieldPreSaveSubscriber' => 'getCiviApi4EventSubscriberCustomFieldPreSaveSubscriberService',
            'Civi_Api4_Event_Subscriber_CustomGroupPreCreationSubscriber' => 'getCiviApi4EventSubscriberCustomGroupPreCreationSubscriberService',
            'Civi_Api4_Event_Subscriber_IsCurrentSubscriber' => 'getCiviApi4EventSubscriberIsCurrentSubscriberService',
            'Civi_Api4_Event_Subscriber_OptionValuePreCreationSubscriber' => 'getCiviApi4EventSubscriberOptionValuePreCreationSubscriberService',
            'Civi_Api4_Event_Subscriber_PermissionCheckSubscriber' => 'getCiviApi4EventSubscriberPermissionCheckSubscriberService',
            'Civi_Api4_Event_Subscriber_ValidateFieldsSubscriber' => 'getCiviApi4EventSubscriberValidateFieldsSubscriberService',
            'Civi_Api4_Service_Spec_Provider_ACLCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderACLCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_ActionScheduleCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderActionScheduleCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_ActivityCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderActivityCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_AddressCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderAddressCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_CampaignCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderCampaignCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_ContactCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderContactCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_ContactTypeCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderContactTypeCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_ContributionCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderContributionCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_ContributionRecurCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderContributionRecurCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_CustomFieldCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderCustomFieldCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_CustomGroupCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderCustomGroupCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_CustomValueSpecProvider' => 'getCiviApi4ServiceSpecProviderCustomValueSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_DefaultLocationTypeProvider' => 'getCiviApi4ServiceSpecProviderDefaultLocationTypeProviderService',
            'Civi_Api4_Service_Spec_Provider_DomainCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderDomainCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_EmailCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderEmailCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_EntityTagCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderEntityTagCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_EventCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderEventCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_FieldDomainIdSpecProvider' => 'getCiviApi4ServiceSpecProviderFieldDomainIdSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_GetActionDefaultsProvider' => 'getCiviApi4ServiceSpecProviderGetActionDefaultsProviderService',
            'Civi_Api4_Service_Spec_Provider_GroupCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderGroupCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_MappingCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderMappingCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_NavigationSpecProvider' => 'getCiviApi4ServiceSpecProviderNavigationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_NoteCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderNoteCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_OptionValueCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderOptionValueCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_PaymentProcessorCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderPaymentProcessorCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_PaymentProcessorTypeCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderPaymentProcessorTypeCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_PhoneCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderPhoneCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_PriceFieldValueCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderPriceFieldValueCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_RelationshipTypeCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderRelationshipTypeCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_TagCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderTagCreationSpecProviderService',
            'Civi_Api4_Service_Spec_Provider_UFFieldCreationSpecProvider' => 'getCiviApi4ServiceSpecProviderUFFieldCreationSpecProviderService',
            'action_object_provider' => 'getActionObjectProviderService',
            'angular' => 'getAngularService',
            'asset_builder' => 'getAssetBuilderService',
            'cache.checks' => 'getCache_ChecksService',
            'cache.community_messages' => 'getCache_CommunityMessagesService',
            'cache.contactTypes' => 'getCache_ContactTypesService',
            'cache.customData' => 'getCache_CustomDataService',
            'cache.default' => 'getCache_DefaultService',
            'cache.fields' => 'getCache_FieldsService',
            'cache.groups' => 'getCache_GroupsService',
            'cache.js_strings' => 'getCache_JsStringsService',
            'cache.long' => 'getCache_LongService',
            'cache.metadata' => 'getCache_MetadataService',
            'cache.navigation' => 'getCache_NavigationService',
            'cache.prevNextCache' => 'getCache_PrevNextCacheService',
            'cache.session' => 'getCache_SessionService',
            'cache_config' => 'getCacheConfigService',
            'civi.activity.triggers' => 'getCivi_Activity_TriggersService',
            'civi.case.staticTriggers' => 'getCivi_Case_StaticTriggersService',
            'civi.case.triggers' => 'getCivi_Case_TriggersService',
            'civi.mailing.triggers' => 'getCivi_Mailing_TriggersService',
            'civi_api_kernel' => 'getCiviApiKernelService',
            'civi_container_factory' => 'getCiviContainerFactoryService',
            'civi_token_compat' => 'getCiviTokenCompatService',
            'crm_activity_tokens' => 'getCrmActivityTokensService',
            'crm_contribute_tokens' => 'getCrmContributeTokensService',
            'crm_event_tokens' => 'getCrmEventTokensService',
            'crm_mailing_action_tokens' => 'getCrmMailingActionTokensService',
            'crm_mailing_tokens' => 'getCrmMailingTokensService',
            'crm_member_tokens' => 'getCrmMemberTokensService',
            'cxn_reg_client' => 'getCxnRegClientService',
            'dispatcher' => 'getDispatcherService',
            'httpClient' => 'getHttpClientService',
            'i18n' => 'getI18nService',
            'joiner' => 'getJoinerService',
            'magic_function_provider' => 'getMagicFunctionProviderService',
            'pear_mail' => 'getPearMailService',
            'prevnext' => 'getPrevnextService',
            'prevnext.driver.redis' => 'getPrevnext_Driver_RedisService',
            'prevnext.driver.sql' => 'getPrevnext_Driver_SqlService',
            'psr_log' => 'getPsrLogService',
            'resources' => 'getResourcesService',
            'schema_map' => 'getSchemaMapService',
            'spec_gatherer' => 'getSpecGathererService',
            'sql_triggers' => 'getSqlTriggersService',
            'themes' => 'getThemesService',
        ];
        $this->privates = [
            'cache.short' => true,
            'Civi_Api4_Event_Subscriber_ActivityPreCreationSubscriber' => true,
            'Civi_Api4_Event_Subscriber_ActivitySchemaMapSubscriber' => true,
            'Civi_Api4_Event_Subscriber_ContactPreSaveSubscriber' => true,
            'Civi_Api4_Event_Subscriber_ContributionPreSaveSubscriber' => true,
            'Civi_Api4_Event_Subscriber_CustomFieldPreSaveSubscriber' => true,
            'Civi_Api4_Event_Subscriber_CustomGroupPreCreationSubscriber' => true,
            'Civi_Api4_Event_Subscriber_IsCurrentSubscriber' => true,
            'Civi_Api4_Event_Subscriber_OptionValuePreCreationSubscriber' => true,
            'Civi_Api4_Event_Subscriber_PermissionCheckSubscriber' => true,
            'Civi_Api4_Event_Subscriber_ValidateFieldsSubscriber' => true,
            'Civi_Api4_Service_Spec_Provider_ACLCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_ActionScheduleCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_ActivityCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_AddressCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_CampaignCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_ContactCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_ContactTypeCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_ContributionCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_ContributionRecurCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_CustomFieldCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_CustomGroupCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_CustomValueSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_DefaultLocationTypeProvider' => true,
            'Civi_Api4_Service_Spec_Provider_DomainCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_EmailCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_EntityTagCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_EventCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_FieldDomainIdSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_GetActionDefaultsProvider' => true,
            'Civi_Api4_Service_Spec_Provider_GroupCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_MappingCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_NavigationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_NoteCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_OptionValueCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_PaymentProcessorCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_PaymentProcessorTypeCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_PhoneCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_PriceFieldValueCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_RelationshipTypeCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_TagCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_UFFieldCreationSpecProvider' => true,
            'civi_container_factory' => true,
            'pear_mail' => true,
        ];
        $this->aliases = [
            'cache.short' => 'cache.default',
        ];
    }

    public function getRemovedIds()
    {
        return [
            'Civi_Api4_Event_Subscriber_ActivityPreCreationSubscriber' => true,
            'Civi_Api4_Event_Subscriber_ActivitySchemaMapSubscriber' => true,
            'Civi_Api4_Event_Subscriber_ContactPreSaveSubscriber' => true,
            'Civi_Api4_Event_Subscriber_ContributionPreSaveSubscriber' => true,
            'Civi_Api4_Event_Subscriber_CustomFieldPreSaveSubscriber' => true,
            'Civi_Api4_Event_Subscriber_CustomGroupPreCreationSubscriber' => true,
            'Civi_Api4_Event_Subscriber_IsCurrentSubscriber' => true,
            'Civi_Api4_Event_Subscriber_OptionValuePreCreationSubscriber' => true,
            'Civi_Api4_Event_Subscriber_PermissionCheckSubscriber' => true,
            'Civi_Api4_Event_Subscriber_ValidateFieldsSubscriber' => true,
            'Civi_Api4_Service_Spec_Provider_ACLCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_ActionScheduleCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_ActivityCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_AddressCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_CampaignCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_ContactCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_ContactTypeCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_ContributionCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_ContributionRecurCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_CustomFieldCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_CustomGroupCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_CustomValueSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_DefaultLocationTypeProvider' => true,
            'Civi_Api4_Service_Spec_Provider_DomainCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_EmailCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_EntityTagCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_EventCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_FieldDomainIdSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_GetActionDefaultsProvider' => true,
            'Civi_Api4_Service_Spec_Provider_GroupCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_MappingCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_NavigationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_NoteCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_OptionValueCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_PaymentProcessorCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_PaymentProcessorTypeCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_PhoneCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_PriceFieldValueCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_RelationshipTypeCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_TagCreationSpecProvider' => true,
            'Civi_Api4_Service_Spec_Provider_UFFieldCreationSpecProvider' => true,
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'cache.short' => true,
            'civi_container_factory' => true,
            'pear_mail' => true,
            'schema_map_builder' => true,
        ];
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /**
     * Gets the public 'action_object_provider' shared service.
     *
     * @return \Civi\Api4\Provider\ActionObjectProvider
     */
    protected function getActionObjectProviderService()
    {
        return $this->services['action_object_provider'] = new \Civi\Api4\Provider\ActionObjectProvider();
    }

    /**
     * Gets the public 'angular' shared service.
     *
     * @return \Civi\Angular\Manager
     */
    protected function getAngularService()
    {
        return $this->services['angular'] = ${($_ = isset($this->services['civi_container_factory']) ? $this->services['civi_container_factory'] : ($this->services['civi_container_factory'] = new \Civi\Core\Container())) && false ?: '_'}->createAngularManager();
    }

    /**
     * Gets the public 'asset_builder' shared service.
     *
     * @return \Civi\Core\AssetBuilder
     */
    protected function getAssetBuilderService()
    {
        return $this->services['asset_builder'] = new \Civi\Core\AssetBuilder();
    }

    /**
     * Gets the public 'cache.checks' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_ChecksService()
    {
        return $this->services['cache.checks'] = \CRM_Utils_Cache::create(['name' => 'checks', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache']]);
    }

    /**
     * Gets the public 'cache.community_messages' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_CommunityMessagesService()
    {
        return $this->services['cache.community_messages'] = \CRM_Utils_Cache::create(['name' => 'community_messages', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache']]);
    }

    /**
     * Gets the public 'cache.contactTypes' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_ContactTypesService()
    {
        return $this->services['cache.contactTypes'] = \CRM_Utils_Cache::create(['name' => 'contactTypes', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache'], 'withArray' => 'fast']);
    }

    /**
     * Gets the public 'cache.customData' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_CustomDataService()
    {
        return $this->services['cache.customData'] = \CRM_Utils_Cache::create(['name' => 'custom data', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache'], 'withArray' => 'fast']);
    }

    /**
     * Gets the public 'cache.default' shared service.
     *
     * @return \CRM_Utils_Cache
     */
    protected function getCache_DefaultService()
    {
        return $this->services['cache.default'] = \CRM_Utils_Cache::singleton();
    }

    /**
     * Gets the public 'cache.fields' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_FieldsService()
    {
        return $this->services['cache.fields'] = \CRM_Utils_Cache::create(['name' => 'contact fields', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache'], 'withArray' => 'fast']);
    }

    /**
     * Gets the public 'cache.groups' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_GroupsService()
    {
        return $this->services['cache.groups'] = \CRM_Utils_Cache::create(['name' => 'contact groups', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache'], 'withArray' => 'fast']);
    }

    /**
     * Gets the public 'cache.js_strings' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_JsStringsService()
    {
        return $this->services['cache.js_strings'] = \CRM_Utils_Cache::create(['name' => 'js_strings', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache']]);
    }

    /**
     * Gets the public 'cache.long' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_LongService()
    {
        return $this->services['cache.long'] = \CRM_Utils_Cache::create(['name' => 'long', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache']]);
    }

    /**
     * Gets the public 'cache.metadata' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_MetadataService()
    {
        return $this->services['cache.metadata'] = \CRM_Utils_Cache::create(['name' => 'metadata', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache'], 'withArray' => 'fast']);
    }

    /**
     * Gets the public 'cache.navigation' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_NavigationService()
    {
        return $this->services['cache.navigation'] = \CRM_Utils_Cache::create(['name' => 'navigation', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache'], 'withArray' => 'fast']);
    }

    /**
     * Gets the public 'cache.prevNextCache' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_PrevNextCacheService()
    {
        return $this->services['cache.prevNextCache'] = \CRM_Utils_Cache::create(['name' => 'CiviCRM Search PrevNextCache', 'type' => [0 => 'SqlGroup']]);
    }

    /**
     * Gets the public 'cache.session' shared service.
     *
     * @return \CRM_Utils_Cache_Interface
     */
    protected function getCache_SessionService()
    {
        return $this->services['cache.session'] = \CRM_Utils_Cache::create(['name' => 'CiviCRM Session', 'type' => [0 => '*memory*', 1 => 'SqlGroup', 2 => 'ArrayCache']]);
    }

    /**
     * Gets the public 'cache_config' shared service.
     *
     * @return \ArrayObject
     */
    protected function getCacheConfigService()
    {
        return $this->services['cache_config'] = ${($_ = isset($this->services['civi_container_factory']) ? $this->services['civi_container_factory'] : ($this->services['civi_container_factory'] = new \Civi\Core\Container())) && false ?: '_'}->createCacheConfig();
    }

    /**
     * Gets the public 'civi.activity.triggers' shared service.
     *
     * @return \Civi\Core\SqlTrigger\TimestampTriggers
     */
    protected function getCivi_Activity_TriggersService()
    {
        return $this->services['civi.activity.triggers'] = new \Civi\Core\SqlTrigger\TimestampTriggers('civicrm_activity', 'Activity');
    }

    /**
     * Gets the public 'civi.case.staticTriggers' shared service.
     *
     * @return \Civi\Core\SqlTrigger\StaticTriggers
     */
    protected function getCivi_Case_StaticTriggersService()
    {
        return $this->services['civi.case.staticTriggers'] = new \Civi\Core\SqlTrigger\StaticTriggers([0 => ['upgrade_check' => ['table' => 'civicrm_case', 'column' => 'modified_date'], 'table' => 'civicrm_case_activity', 'when' => 'AFTER', 'event' => [0 => 'INSERT'], 'sql' => ''."\n".'UPDATE civicrm_case SET modified_date = CURRENT_TIMESTAMP WHERE id = NEW.case_id;'."\n".''], 1 => ['upgrade_check' => ['table' => 'civicrm_case', 'column' => 'modified_date'], 'table' => 'civicrm_activity', 'when' => 'BEFORE', 'event' => [0 => 'UPDATE', 1 => 'DELETE'], 'sql' => ''."\n".'UPDATE civicrm_case SET modified_date = CURRENT_TIMESTAMP WHERE id IN (SELECT ca.case_id FROM civicrm_case_activity ca WHERE ca.activity_id = OLD.id);'."\n".'']]);
    }

    /**
     * Gets the public 'civi.case.triggers' shared service.
     *
     * @return \Civi\Core\SqlTrigger\TimestampTriggers
     */
    protected function getCivi_Case_TriggersService()
    {
        return $this->services['civi.case.triggers'] = new \Civi\Core\SqlTrigger\TimestampTriggers('civicrm_case', 'Case');
    }

    /**
     * Gets the public 'civi.mailing.triggers' shared service.
     *
     * @return \Civi\Core\SqlTrigger\TimestampTriggers
     */
    protected function getCivi_Mailing_TriggersService()
    {
        return $this->services['civi.mailing.triggers'] = new \Civi\Core\SqlTrigger\TimestampTriggers('civicrm_mailing', 'Mailing');
    }

    /**
     * Gets the public 'civi_api_kernel' shared service.
     *
     * @return \Civi\API\Kernel
     */
    protected function getCiviApiKernelService()
    {
        $this->services['civi_api_kernel'] = $instance = ${($_ = isset($this->services['civi_container_factory']) ? $this->services['civi_container_factory'] : ($this->services['civi_container_factory'] = new \Civi\Core\Container())) && false ?: '_'}->createApiKernel(${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['magic_function_provider']) ? $this->services['magic_function_provider'] : ($this->services['magic_function_provider'] = new \Civi\API\Provider\MagicFunctionProvider())) && false ?: '_'});

        $instance->registerApiProvider(${($_ = isset($this->services['action_object_provider']) ? $this->services['action_object_provider'] : ($this->services['action_object_provider'] = new \Civi\Api4\Provider\ActionObjectProvider())) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'civi_token_compat' shared service.
     *
     * @return \Civi\Token\TokenCompatSubscriber
     */
    protected function getCiviTokenCompatService()
    {
        return $this->services['civi_token_compat'] = new \Civi\Token\TokenCompatSubscriber();
    }

    /**
     * Gets the public 'crm_activity_tokens' shared service.
     *
     * @return \CRM_Activity_Tokens
     */
    protected function getCrmActivityTokensService()
    {
        return $this->services['crm_activity_tokens'] = new \CRM_Activity_Tokens();
    }

    /**
     * Gets the public 'crm_contribute_tokens' shared service.
     *
     * @return \CRM_Contribute_Tokens
     */
    protected function getCrmContributeTokensService()
    {
        return $this->services['crm_contribute_tokens'] = new \CRM_Contribute_Tokens();
    }

    /**
     * Gets the public 'crm_event_tokens' shared service.
     *
     * @return \CRM_Event_Tokens
     */
    protected function getCrmEventTokensService()
    {
        return $this->services['crm_event_tokens'] = new \CRM_Event_Tokens();
    }

    /**
     * Gets the public 'crm_mailing_action_tokens' shared service.
     *
     * @return \CRM_Mailing_ActionTokens
     */
    protected function getCrmMailingActionTokensService()
    {
        return $this->services['crm_mailing_action_tokens'] = new \CRM_Mailing_ActionTokens();
    }

    /**
     * Gets the public 'crm_mailing_tokens' shared service.
     *
     * @return \CRM_Mailing_Tokens
     */
    protected function getCrmMailingTokensService()
    {
        return $this->services['crm_mailing_tokens'] = new \CRM_Mailing_Tokens();
    }

    /**
     * Gets the public 'crm_member_tokens' shared service.
     *
     * @return \CRM_Member_Tokens
     */
    protected function getCrmMemberTokensService()
    {
        return $this->services['crm_member_tokens'] = new \CRM_Member_Tokens();
    }

    /**
     * Gets the public 'cxn_reg_client' shared service.
     *
     * @return \Civi\Cxn\Rpc\RegistrationClient
     */
    protected function getCxnRegClientService()
    {
        return $this->services['cxn_reg_client'] = \CRM_Cxn_BAO_Cxn::createRegistrationClient();
    }

    /**
     * Gets the public 'dispatcher' shared service.
     *
     * @return \Civi\Core\CiviEventDispatcher
     */
    protected function getDispatcherService()
    {
        $this->services['dispatcher'] = $instance = ${($_ = isset($this->services['civi_container_factory']) ? $this->services['civi_container_factory'] : ($this->services['civi_container_factory'] = new \Civi\Core\Container())) && false ?: '_'}->createEventDispatcher($this);

        $instance->addSubscriber(${($_ = isset($this->services['action_object_provider']) ? $this->services['action_object_provider'] : ($this->services['action_object_provider'] = new \Civi\Api4\Provider\ActionObjectProvider())) && false ?: '_'});
        $instance->addSubscriber(${($_ = isset($this->services['Civi_Api4_Event_Subscriber_ActivityPreCreationSubscriber']) ? $this->services['Civi_Api4_Event_Subscriber_ActivityPreCreationSubscriber'] : ($this->services['Civi_Api4_Event_Subscriber_ActivityPreCreationSubscriber'] = new \Civi\Api4\Event\Subscriber\ActivityPreCreationSubscriber())) && false ?: '_'});
        $instance->addSubscriber(${($_ = isset($this->services['Civi_Api4_Event_Subscriber_ActivitySchemaMapSubscriber']) ? $this->services['Civi_Api4_Event_Subscriber_ActivitySchemaMapSubscriber'] : ($this->services['Civi_Api4_Event_Subscriber_ActivitySchemaMapSubscriber'] = new \Civi\Api4\Event\Subscriber\ActivitySchemaMapSubscriber())) && false ?: '_'});
        $instance->addSubscriber(${($_ = isset($this->services['Civi_Api4_Event_Subscriber_ContactPreSaveSubscriber']) ? $this->services['Civi_Api4_Event_Subscriber_ContactPreSaveSubscriber'] : ($this->services['Civi_Api4_Event_Subscriber_ContactPreSaveSubscriber'] = new \Civi\Api4\Event\Subscriber\ContactPreSaveSubscriber())) && false ?: '_'});
        $instance->addSubscriber(${($_ = isset($this->services['Civi_Api4_Event_Subscriber_ContributionPreSaveSubscriber']) ? $this->services['Civi_Api4_Event_Subscriber_ContributionPreSaveSubscriber'] : ($this->services['Civi_Api4_Event_Subscriber_ContributionPreSaveSubscriber'] = new \Civi\Api4\Event\Subscriber\ContributionPreSaveSubscriber())) && false ?: '_'});
        $instance->addSubscriber(${($_ = isset($this->services['Civi_Api4_Event_Subscriber_CustomFieldPreSaveSubscriber']) ? $this->services['Civi_Api4_Event_Subscriber_CustomFieldPreSaveSubscriber'] : ($this->services['Civi_Api4_Event_Subscriber_CustomFieldPreSaveSubscriber'] = new \Civi\Api4\Event\Subscriber\CustomFieldPreSaveSubscriber())) && false ?: '_'});
        $instance->addSubscriber(${($_ = isset($this->services['Civi_Api4_Event_Subscriber_CustomGroupPreCreationSubscriber']) ? $this->services['Civi_Api4_Event_Subscriber_CustomGroupPreCreationSubscriber'] : ($this->services['Civi_Api4_Event_Subscriber_CustomGroupPreCreationSubscriber'] = new \Civi\Api4\Event\Subscriber\CustomGroupPreCreationSubscriber())) && false ?: '_'});
        $instance->addSubscriber(${($_ = isset($this->services['Civi_Api4_Event_Subscriber_IsCurrentSubscriber']) ? $this->services['Civi_Api4_Event_Subscriber_IsCurrentSubscriber'] : ($this->services['Civi_Api4_Event_Subscriber_IsCurrentSubscriber'] = new \Civi\Api4\Event\Subscriber\IsCurrentSubscriber())) && false ?: '_'});
        $instance->addSubscriber(${($_ = isset($this->services['Civi_Api4_Event_Subscriber_OptionValuePreCreationSubscriber']) ? $this->services['Civi_Api4_Event_Subscriber_OptionValuePreCreationSubscriber'] : ($this->services['Civi_Api4_Event_Subscriber_OptionValuePreCreationSubscriber'] = new \Civi\Api4\Event\Subscriber\OptionValuePreCreationSubscriber())) && false ?: '_'});
        $instance->addSubscriber(${($_ = isset($this->services['Civi_Api4_Event_Subscriber_PermissionCheckSubscriber']) ? $this->services['Civi_Api4_Event_Subscriber_PermissionCheckSubscriber'] : ($this->services['Civi_Api4_Event_Subscriber_PermissionCheckSubscriber'] = new \Civi\Api4\Event\Subscriber\PermissionCheckSubscriber())) && false ?: '_'});
        $instance->addSubscriber(${($_ = isset($this->services['Civi_Api4_Event_Subscriber_ValidateFieldsSubscriber']) ? $this->services['Civi_Api4_Event_Subscriber_ValidateFieldsSubscriber'] : ($this->services['Civi_Api4_Event_Subscriber_ValidateFieldsSubscriber'] = new \Civi\Api4\Event\Subscriber\ValidateFieldsSubscriber())) && false ?: '_'});
        $instance->addListener('hook_civicrm_triggerInfo', [0 => function () {
            return ${($_ = isset($this->services['civi.mailing.triggers']) ? $this->services['civi.mailing.triggers'] : ($this->services['civi.mailing.triggers'] = new \Civi\Core\SqlTrigger\TimestampTriggers('civicrm_mailing', 'Mailing'))) && false ?: '_'};
        }, 1 => 'onTriggerInfo'], 0);
        $instance->addListener('hook_civicrm_triggerInfo', [0 => function () {
            return ${($_ = isset($this->services['civi.activity.triggers']) ? $this->services['civi.activity.triggers'] : ($this->services['civi.activity.triggers'] = new \Civi\Core\SqlTrigger\TimestampTriggers('civicrm_activity', 'Activity'))) && false ?: '_'};
        }, 1 => 'onTriggerInfo'], 0);
        $instance->addListener('hook_civicrm_triggerInfo', [0 => function () {
            return ${($_ = isset($this->services['civi.case.triggers']) ? $this->services['civi.case.triggers'] : ($this->services['civi.case.triggers'] = new \Civi\Core\SqlTrigger\TimestampTriggers('civicrm_case', 'Case'))) && false ?: '_'};
        }, 1 => 'onTriggerInfo'], 0);
        $instance->addListener('hook_civicrm_triggerInfo', [0 => function () {
            return ${($_ = isset($this->services['civi.case.staticTriggers']) ? $this->services['civi.case.staticTriggers'] : $this->getCivi_Case_StaticTriggersService()) && false ?: '_'};
        }, 1 => 'onTriggerInfo'], 0);
        $instance->addListener('civi.token.eval', [0 => function () {
            return ${($_ = isset($this->services['civi_token_compat']) ? $this->services['civi_token_compat'] : ($this->services['civi_token_compat'] = new \Civi\Token\TokenCompatSubscriber())) && false ?: '_'};
        }, 1 => 'onEvaluate'], 0);
        $instance->addListener('civi.token.render', [0 => function () {
            return ${($_ = isset($this->services['civi_token_compat']) ? $this->services['civi_token_compat'] : ($this->services['civi_token_compat'] = new \Civi\Token\TokenCompatSubscriber())) && false ?: '_'};
        }, 1 => 'onRender'], 0);
        $instance->addListener('civi.token.list', [0 => function () {
            return ${($_ = isset($this->services['crm_mailing_action_tokens']) ? $this->services['crm_mailing_action_tokens'] : ($this->services['crm_mailing_action_tokens'] = new \CRM_Mailing_ActionTokens())) && false ?: '_'};
        }, 1 => 'registerTokens'], 0);
        $instance->addListener('civi.token.eval', [0 => function () {
            return ${($_ = isset($this->services['crm_mailing_action_tokens']) ? $this->services['crm_mailing_action_tokens'] : ($this->services['crm_mailing_action_tokens'] = new \CRM_Mailing_ActionTokens())) && false ?: '_'};
        }, 1 => 'evaluateTokens'], 0);
        $instance->addListener('civi.actionSchedule.prepareMailingQuery', [0 => function () {
            return ${($_ = isset($this->services['crm_mailing_action_tokens']) ? $this->services['crm_mailing_action_tokens'] : ($this->services['crm_mailing_action_tokens'] = new \CRM_Mailing_ActionTokens())) && false ?: '_'};
        }, 1 => 'alterActionScheduleQuery'], 0);
        $instance->addListener('civi.token.list', [0 => function () {
            return ${($_ = isset($this->services['crm_activity_tokens']) ? $this->services['crm_activity_tokens'] : ($this->services['crm_activity_tokens'] = new \CRM_Activity_Tokens())) && false ?: '_'};
        }, 1 => 'registerTokens'], 0);
        $instance->addListener('civi.token.eval', [0 => function () {
            return ${($_ = isset($this->services['crm_activity_tokens']) ? $this->services['crm_activity_tokens'] : ($this->services['crm_activity_tokens'] = new \CRM_Activity_Tokens())) && false ?: '_'};
        }, 1 => 'evaluateTokens'], 0);
        $instance->addListener('civi.actionSchedule.prepareMailingQuery', [0 => function () {
            return ${($_ = isset($this->services['crm_activity_tokens']) ? $this->services['crm_activity_tokens'] : ($this->services['crm_activity_tokens'] = new \CRM_Activity_Tokens())) && false ?: '_'};
        }, 1 => 'alterActionScheduleQuery'], 0);
        $instance->addListener('civi.token.list', [0 => function () {
            return ${($_ = isset($this->services['crm_contribute_tokens']) ? $this->services['crm_contribute_tokens'] : ($this->services['crm_contribute_tokens'] = new \CRM_Contribute_Tokens())) && false ?: '_'};
        }, 1 => 'registerTokens'], 0);
        $instance->addListener('civi.token.eval', [0 => function () {
            return ${($_ = isset($this->services['crm_contribute_tokens']) ? $this->services['crm_contribute_tokens'] : ($this->services['crm_contribute_tokens'] = new \CRM_Contribute_Tokens())) && false ?: '_'};
        }, 1 => 'evaluateTokens'], 0);
        $instance->addListener('civi.actionSchedule.prepareMailingQuery', [0 => function () {
            return ${($_ = isset($this->services['crm_contribute_tokens']) ? $this->services['crm_contribute_tokens'] : ($this->services['crm_contribute_tokens'] = new \CRM_Contribute_Tokens())) && false ?: '_'};
        }, 1 => 'alterActionScheduleQuery'], 0);
        $instance->addListener('civi.token.list', [0 => function () {
            return ${($_ = isset($this->services['crm_event_tokens']) ? $this->services['crm_event_tokens'] : ($this->services['crm_event_tokens'] = new \CRM_Event_Tokens())) && false ?: '_'};
        }, 1 => 'registerTokens'], 0);
        $instance->addListener('civi.token.eval', [0 => function () {
            return ${($_ = isset($this->services['crm_event_tokens']) ? $this->services['crm_event_tokens'] : ($this->services['crm_event_tokens'] = new \CRM_Event_Tokens())) && false ?: '_'};
        }, 1 => 'evaluateTokens'], 0);
        $instance->addListener('civi.actionSchedule.prepareMailingQuery', [0 => function () {
            return ${($_ = isset($this->services['crm_event_tokens']) ? $this->services['crm_event_tokens'] : ($this->services['crm_event_tokens'] = new \CRM_Event_Tokens())) && false ?: '_'};
        }, 1 => 'alterActionScheduleQuery'], 0);
        $instance->addListener('civi.token.list', [0 => function () {
            return ${($_ = isset($this->services['crm_mailing_tokens']) ? $this->services['crm_mailing_tokens'] : ($this->services['crm_mailing_tokens'] = new \CRM_Mailing_Tokens())) && false ?: '_'};
        }, 1 => 'registerTokens'], 0);
        $instance->addListener('civi.token.eval', [0 => function () {
            return ${($_ = isset($this->services['crm_mailing_tokens']) ? $this->services['crm_mailing_tokens'] : ($this->services['crm_mailing_tokens'] = new \CRM_Mailing_Tokens())) && false ?: '_'};
        }, 1 => 'evaluateTokens'], 0);
        $instance->addListener('civi.actionSchedule.prepareMailingQuery', [0 => function () {
            return ${($_ = isset($this->services['crm_mailing_tokens']) ? $this->services['crm_mailing_tokens'] : ($this->services['crm_mailing_tokens'] = new \CRM_Mailing_Tokens())) && false ?: '_'};
        }, 1 => 'alterActionScheduleQuery'], 0);
        $instance->addListener('civi.token.list', [0 => function () {
            return ${($_ = isset($this->services['crm_member_tokens']) ? $this->services['crm_member_tokens'] : ($this->services['crm_member_tokens'] = new \CRM_Member_Tokens())) && false ?: '_'};
        }, 1 => 'registerTokens'], 0);
        $instance->addListener('civi.token.eval', [0 => function () {
            return ${($_ = isset($this->services['crm_member_tokens']) ? $this->services['crm_member_tokens'] : ($this->services['crm_member_tokens'] = new \CRM_Member_Tokens())) && false ?: '_'};
        }, 1 => 'evaluateTokens'], 0);
        $instance->addListener('civi.actionSchedule.prepareMailingQuery', [0 => function () {
            return ${($_ = isset($this->services['crm_member_tokens']) ? $this->services['crm_member_tokens'] : ($this->services['crm_member_tokens'] = new \CRM_Member_Tokens())) && false ?: '_'};
        }, 1 => 'alterActionScheduleQuery'], 0);

        return $instance;
    }

    /**
     * Gets the public 'httpClient' shared service.
     *
     * @return \CRM_Utils_HttpClient
     */
    protected function getHttpClientService()
    {
        return $this->services['httpClient'] = \CRM_Utils_HttpClient::singleton();
    }

    /**
     * Gets the public 'i18n' shared service.
     *
     * @return \CRM_Core_I18n
     */
    protected function getI18nService()
    {
        return $this->services['i18n'] = \CRM_Core_I18n::singleton();
    }

    /**
     * Gets the public 'joiner' shared service.
     *
     * @return \Civi\Api4\Service\Schema\Joiner
     */
    protected function getJoinerService()
    {
        return $this->services['joiner'] = new \Civi\Api4\Service\Schema\Joiner(${($_ = isset($this->services['schema_map']) ? $this->services['schema_map'] : $this->getSchemaMapService()) && false ?: '_'});
    }

    /**
     * Gets the public 'magic_function_provider' shared service.
     *
     * @return \Civi\API\Provider\MagicFunctionProvider
     */
    protected function getMagicFunctionProviderService()
    {
        return $this->services['magic_function_provider'] = new \Civi\API\Provider\MagicFunctionProvider();
    }

    /**
     * Gets the public 'prevnext' shared service.
     *
     * @return \CRM_Core_PrevNextCache_Interface
     */
    protected function getPrevnextService()
    {
        return $this->services['prevnext'] = ${($_ = isset($this->services['civi_container_factory']) ? $this->services['civi_container_factory'] : ($this->services['civi_container_factory'] = new \Civi\Core\Container())) && false ?: '_'}->createPrevNextCache($this);
    }

    /**
     * Gets the public 'prevnext.driver.redis' shared service.
     *
     * @return \CRM_Core_PrevNextCache_Redis
     */
    protected function getPrevnext_Driver_RedisService()
    {
        return $this->services['prevnext.driver.redis'] = new \CRM_Core_PrevNextCache_Redis(${($_ = isset($this->services['cache_config']) ? $this->services['cache_config'] : $this->getCacheConfigService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prevnext.driver.sql' shared service.
     *
     * @return \CRM_Core_PrevNextCache_Sql
     */
    protected function getPrevnext_Driver_SqlService()
    {
        return $this->services['prevnext.driver.sql'] = new \CRM_Core_PrevNextCache_Sql();
    }

    /**
     * Gets the public 'psr_log' shared service.
     *
     * @return \CRM_Core_Error_Log
     */
    protected function getPsrLogService()
    {
        return $this->services['psr_log'] = new \CRM_Core_Error_Log();
    }

    /**
     * Gets the public 'resources' shared service.
     *
     * @return \CRM_Core_Resources
     */
    protected function getResourcesService()
    {
        return $this->services['resources'] = ${($_ = isset($this->services['civi_container_factory']) ? $this->services['civi_container_factory'] : ($this->services['civi_container_factory'] = new \Civi\Core\Container())) && false ?: '_'}->createResources($this);
    }

    /**
     * Gets the public 'schema_map' shared service.
     *
     * @return \Civi\Api4\Service\Schema\SchemaMap
     */
    protected function getSchemaMapService()
    {
        return $this->services['schema_map'] = (new \Civi\Api4\Service\Schema\SchemaMapBuilder(${($_ = isset($this->services['dispatcher']) ? $this->services['dispatcher'] : $this->getDispatcherService()) && false ?: '_'}))->build();
    }

    /**
     * Gets the public 'spec_gatherer' shared service.
     *
     * @return \Civi\Api4\Service\Spec\SpecGatherer
     */
    protected function getSpecGathererService()
    {
        $this->services['spec_gatherer'] = $instance = new \Civi\Api4\Service\Spec\SpecGatherer();

        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_ACLCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_ACLCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_ACLCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ACLCreationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_ActionScheduleCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_ActionScheduleCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_ActionScheduleCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ActionScheduleCreationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_ActivityCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_ActivityCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_ActivityCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ActivityCreationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_AddressCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_AddressCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_AddressCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\AddressCreationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_CampaignCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_CampaignCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_CampaignCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\CampaignCreationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_ContactCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_ContactCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_ContactCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ContactCreationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_ContactTypeCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_ContactTypeCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_ContactTypeCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ContactTypeCreationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_ContributionCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_ContributionCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_ContributionCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ContributionCreationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_ContributionRecurCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_ContributionRecurCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_ContributionRecurCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ContributionRecurCreationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_CustomFieldCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_CustomFieldCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_CustomFieldCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\CustomFieldCreationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_CustomGroupCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_CustomGroupCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_CustomGroupCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\CustomGroupCreationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_CustomValueSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_CustomValueSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_CustomValueSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\CustomValueSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_DefaultLocationTypeProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_DefaultLocationTypeProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_DefaultLocationTypeProvider'] = new \Civi\Api4\Service\Spec\Provider\DefaultLocationTypeProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_DomainCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_DomainCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_DomainCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\DomainCreationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_EmailCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_EmailCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_EmailCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\EmailCreationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_EntityTagCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_EntityTagCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_EntityTagCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\EntityTagCreationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_EventCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_EventCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_EventCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\EventCreationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_FieldDomainIdSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_FieldDomainIdSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_FieldDomainIdSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\FieldDomainIdSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_GetActionDefaultsProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_GetActionDefaultsProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_GetActionDefaultsProvider'] = new \Civi\Api4\Service\Spec\Provider\GetActionDefaultsProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_GroupCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_GroupCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_GroupCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\GroupCreationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_MappingCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_MappingCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_MappingCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\MappingCreationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_NavigationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_NavigationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_NavigationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\NavigationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_NoteCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_NoteCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_NoteCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\NoteCreationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_OptionValueCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_OptionValueCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_OptionValueCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\OptionValueCreationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_PaymentProcessorCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_PaymentProcessorCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_PaymentProcessorCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\PaymentProcessorCreationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_PaymentProcessorTypeCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_PaymentProcessorTypeCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_PaymentProcessorTypeCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\PaymentProcessorTypeCreationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_PhoneCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_PhoneCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_PhoneCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\PhoneCreationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_PriceFieldValueCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_PriceFieldValueCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_PriceFieldValueCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\PriceFieldValueCreationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_RelationshipTypeCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_RelationshipTypeCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_RelationshipTypeCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\RelationshipTypeCreationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_TagCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_TagCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_TagCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\TagCreationSpecProvider())) && false ?: '_'});
        $instance->addSpecProvider(${($_ = isset($this->services['Civi_Api4_Service_Spec_Provider_UFFieldCreationSpecProvider']) ? $this->services['Civi_Api4_Service_Spec_Provider_UFFieldCreationSpecProvider'] : ($this->services['Civi_Api4_Service_Spec_Provider_UFFieldCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\UFFieldCreationSpecProvider())) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'sql_triggers' shared service.
     *
     * @return \Civi\Core\SqlTriggers
     */
    protected function getSqlTriggersService()
    {
        return $this->services['sql_triggers'] = new \Civi\Core\SqlTriggers();
    }

    /**
     * Gets the public 'themes' shared service.
     *
     * @return \Civi\Core\Themes
     */
    protected function getThemesService()
    {
        return $this->services['themes'] = new \Civi\Core\Themes();
    }

    /**
     * Gets the private 'Civi_Api4_Event_Subscriber_ActivityPreCreationSubscriber' shared service.
     *
     * @return \Civi\Api4\Event\Subscriber\ActivityPreCreationSubscriber
     */
    protected function getCiviApi4EventSubscriberActivityPreCreationSubscriberService()
    {
        return $this->services['Civi_Api4_Event_Subscriber_ActivityPreCreationSubscriber'] = new \Civi\Api4\Event\Subscriber\ActivityPreCreationSubscriber();
    }

    /**
     * Gets the private 'Civi_Api4_Event_Subscriber_ActivitySchemaMapSubscriber' shared service.
     *
     * @return \Civi\Api4\Event\Subscriber\ActivitySchemaMapSubscriber
     */
    protected function getCiviApi4EventSubscriberActivitySchemaMapSubscriberService()
    {
        return $this->services['Civi_Api4_Event_Subscriber_ActivitySchemaMapSubscriber'] = new \Civi\Api4\Event\Subscriber\ActivitySchemaMapSubscriber();
    }

    /**
     * Gets the private 'Civi_Api4_Event_Subscriber_ContactPreSaveSubscriber' shared service.
     *
     * @return \Civi\Api4\Event\Subscriber\ContactPreSaveSubscriber
     */
    protected function getCiviApi4EventSubscriberContactPreSaveSubscriberService()
    {
        return $this->services['Civi_Api4_Event_Subscriber_ContactPreSaveSubscriber'] = new \Civi\Api4\Event\Subscriber\ContactPreSaveSubscriber();
    }

    /**
     * Gets the private 'Civi_Api4_Event_Subscriber_ContributionPreSaveSubscriber' shared service.
     *
     * @return \Civi\Api4\Event\Subscriber\ContributionPreSaveSubscriber
     */
    protected function getCiviApi4EventSubscriberContributionPreSaveSubscriberService()
    {
        return $this->services['Civi_Api4_Event_Subscriber_ContributionPreSaveSubscriber'] = new \Civi\Api4\Event\Subscriber\ContributionPreSaveSubscriber();
    }

    /**
     * Gets the private 'Civi_Api4_Event_Subscriber_CustomFieldPreSaveSubscriber' shared service.
     *
     * @return \Civi\Api4\Event\Subscriber\CustomFieldPreSaveSubscriber
     */
    protected function getCiviApi4EventSubscriberCustomFieldPreSaveSubscriberService()
    {
        return $this->services['Civi_Api4_Event_Subscriber_CustomFieldPreSaveSubscriber'] = new \Civi\Api4\Event\Subscriber\CustomFieldPreSaveSubscriber();
    }

    /**
     * Gets the private 'Civi_Api4_Event_Subscriber_CustomGroupPreCreationSubscriber' shared service.
     *
     * @return \Civi\Api4\Event\Subscriber\CustomGroupPreCreationSubscriber
     */
    protected function getCiviApi4EventSubscriberCustomGroupPreCreationSubscriberService()
    {
        return $this->services['Civi_Api4_Event_Subscriber_CustomGroupPreCreationSubscriber'] = new \Civi\Api4\Event\Subscriber\CustomGroupPreCreationSubscriber();
    }

    /**
     * Gets the private 'Civi_Api4_Event_Subscriber_IsCurrentSubscriber' shared service.
     *
     * @return \Civi\Api4\Event\Subscriber\IsCurrentSubscriber
     */
    protected function getCiviApi4EventSubscriberIsCurrentSubscriberService()
    {
        return $this->services['Civi_Api4_Event_Subscriber_IsCurrentSubscriber'] = new \Civi\Api4\Event\Subscriber\IsCurrentSubscriber();
    }

    /**
     * Gets the private 'Civi_Api4_Event_Subscriber_OptionValuePreCreationSubscriber' shared service.
     *
     * @return \Civi\Api4\Event\Subscriber\OptionValuePreCreationSubscriber
     */
    protected function getCiviApi4EventSubscriberOptionValuePreCreationSubscriberService()
    {
        return $this->services['Civi_Api4_Event_Subscriber_OptionValuePreCreationSubscriber'] = new \Civi\Api4\Event\Subscriber\OptionValuePreCreationSubscriber();
    }

    /**
     * Gets the private 'Civi_Api4_Event_Subscriber_PermissionCheckSubscriber' shared service.
     *
     * @return \Civi\Api4\Event\Subscriber\PermissionCheckSubscriber
     */
    protected function getCiviApi4EventSubscriberPermissionCheckSubscriberService()
    {
        return $this->services['Civi_Api4_Event_Subscriber_PermissionCheckSubscriber'] = new \Civi\Api4\Event\Subscriber\PermissionCheckSubscriber();
    }

    /**
     * Gets the private 'Civi_Api4_Event_Subscriber_ValidateFieldsSubscriber' shared service.
     *
     * @return \Civi\Api4\Event\Subscriber\ValidateFieldsSubscriber
     */
    protected function getCiviApi4EventSubscriberValidateFieldsSubscriberService()
    {
        return $this->services['Civi_Api4_Event_Subscriber_ValidateFieldsSubscriber'] = new \Civi\Api4\Event\Subscriber\ValidateFieldsSubscriber();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_ACLCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\ACLCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderACLCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_ACLCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ACLCreationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_ActionScheduleCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\ActionScheduleCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderActionScheduleCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_ActionScheduleCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ActionScheduleCreationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_ActivityCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\ActivityCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderActivityCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_ActivityCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ActivityCreationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_AddressCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\AddressCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderAddressCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_AddressCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\AddressCreationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_CampaignCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\CampaignCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderCampaignCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_CampaignCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\CampaignCreationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_ContactCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\ContactCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderContactCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_ContactCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ContactCreationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_ContactTypeCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\ContactTypeCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderContactTypeCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_ContactTypeCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ContactTypeCreationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_ContributionCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\ContributionCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderContributionCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_ContributionCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ContributionCreationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_ContributionRecurCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\ContributionRecurCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderContributionRecurCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_ContributionRecurCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\ContributionRecurCreationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_CustomFieldCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\CustomFieldCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderCustomFieldCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_CustomFieldCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\CustomFieldCreationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_CustomGroupCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\CustomGroupCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderCustomGroupCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_CustomGroupCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\CustomGroupCreationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_CustomValueSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\CustomValueSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderCustomValueSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_CustomValueSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\CustomValueSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_DefaultLocationTypeProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\DefaultLocationTypeProvider
     */
    protected function getCiviApi4ServiceSpecProviderDefaultLocationTypeProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_DefaultLocationTypeProvider'] = new \Civi\Api4\Service\Spec\Provider\DefaultLocationTypeProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_DomainCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\DomainCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderDomainCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_DomainCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\DomainCreationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_EmailCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\EmailCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderEmailCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_EmailCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\EmailCreationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_EntityTagCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\EntityTagCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderEntityTagCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_EntityTagCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\EntityTagCreationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_EventCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\EventCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderEventCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_EventCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\EventCreationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_FieldDomainIdSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\FieldDomainIdSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderFieldDomainIdSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_FieldDomainIdSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\FieldDomainIdSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_GetActionDefaultsProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\GetActionDefaultsProvider
     */
    protected function getCiviApi4ServiceSpecProviderGetActionDefaultsProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_GetActionDefaultsProvider'] = new \Civi\Api4\Service\Spec\Provider\GetActionDefaultsProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_GroupCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\GroupCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderGroupCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_GroupCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\GroupCreationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_MappingCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\MappingCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderMappingCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_MappingCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\MappingCreationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_NavigationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\NavigationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderNavigationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_NavigationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\NavigationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_NoteCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\NoteCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderNoteCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_NoteCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\NoteCreationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_OptionValueCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\OptionValueCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderOptionValueCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_OptionValueCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\OptionValueCreationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_PaymentProcessorCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\PaymentProcessorCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderPaymentProcessorCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_PaymentProcessorCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\PaymentProcessorCreationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_PaymentProcessorTypeCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\PaymentProcessorTypeCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderPaymentProcessorTypeCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_PaymentProcessorTypeCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\PaymentProcessorTypeCreationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_PhoneCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\PhoneCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderPhoneCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_PhoneCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\PhoneCreationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_PriceFieldValueCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\PriceFieldValueCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderPriceFieldValueCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_PriceFieldValueCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\PriceFieldValueCreationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_RelationshipTypeCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\RelationshipTypeCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderRelationshipTypeCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_RelationshipTypeCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\RelationshipTypeCreationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_TagCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\TagCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderTagCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_TagCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\TagCreationSpecProvider();
    }

    /**
     * Gets the private 'Civi_Api4_Service_Spec_Provider_UFFieldCreationSpecProvider' shared service.
     *
     * @return \Civi\Api4\Service\Spec\Provider\UFFieldCreationSpecProvider
     */
    protected function getCiviApi4ServiceSpecProviderUFFieldCreationSpecProviderService()
    {
        return $this->services['Civi_Api4_Service_Spec_Provider_UFFieldCreationSpecProvider'] = new \Civi\Api4\Service\Spec\Provider\UFFieldCreationSpecProvider();
    }

    /**
     * Gets the private 'civi_container_factory' shared service.
     *
     * @return \Civi\Core\Container
     */
    protected function getCiviContainerFactoryService()
    {
        return $this->services['civi_container_factory'] = new \Civi\Core\Container();
    }

    /**
     * Gets the private 'pear_mail' shared service.
     *
     * @return \Mail
     */
    protected function getPearMailService()
    {
        return $this->services['pear_mail'] = \CRM_Utils_Mail::createMailer();
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [];
    private $dynamicParameters = [];

    /**
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    private $normalizedParameterNames = [];

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'civicrm_base_path' => '/home/arjun/Project/cynaweb/aaomnewcivicrm/aaom/vendor/civicrm/civicrm-core',
        ];
    }
}
