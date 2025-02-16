<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/secretmanager/v1/service.proto

namespace GPBMetadata\Google\Cloud\Secretmanager\V1;

class Service
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Secretmanager\V1\Resources::initOnce();
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�0
+google/cloud/secretmanager/v1/service.protogoogle.cloud.secretmanager.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto-google/cloud/secretmanager/v1/resources.protogoogle/iam/v1/iam_policy.protogoogle/iam/v1/policy.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
ListSecretsRequest;
parent (	B+�A�A%#secretmanager.googleapis.com/Secret
	page_size (B�A

page_token (	B�A
filter (	B�A"z
ListSecretsResponse6
secrets (2%.google.cloud.secretmanager.v1.Secret
next_page_token (	

total_size ("�
CreateSecretRequest;
parent (	B+�A�A%#secretmanager.googleapis.com/Secret
	secret_id (	B�A:
secret (2%.google.cloud.secretmanager.v1.SecretB�A"�
AddSecretVersionRequest;
parent (	B+�A�A%
#secretmanager.googleapis.com/SecretB
payload (2,.google.cloud.secretmanager.v1.SecretPayloadB�A"M
GetSecretRequest9
name (	B+�A�A%
#secretmanager.googleapis.com/Secret"�
ListSecretVersionsRequest;
parent (	B+�A�A%
#secretmanager.googleapis.com/Secret
	page_size (B�A

page_token (	B�A
filter (	B�A"�
ListSecretVersionsResponse>
versions (2,.google.cloud.secretmanager.v1.SecretVersion
next_page_token (	

total_size ("[
GetSecretVersionRequest@
name (	B2�A�A,
*secretmanager.googleapis.com/SecretVersion"�
UpdateSecretRequest:
secret (2%.google.cloud.secretmanager.v1.SecretB�A4
update_mask (2.google.protobuf.FieldMaskB�A"^
AccessSecretVersionRequest@
name (	B2�A�A,
*secretmanager.googleapis.com/SecretVersion"�
AccessSecretVersionResponse=
name (	B/�A,
*secretmanager.googleapis.com/SecretVersion=
payload (2,.google.cloud.secretmanager.v1.SecretPayload"c
DeleteSecretRequest9
name (	B+�A�A%
#secretmanager.googleapis.com/Secret
etag (	B�A"r
DisableSecretVersionRequest@
name (	B2�A�A,
*secretmanager.googleapis.com/SecretVersion
etag (	B�A"q
EnableSecretVersionRequest@
name (	B2�A�A,
*secretmanager.googleapis.com/SecretVersion
etag (	B�A"r
DestroySecretVersionRequest@
name (	B2�A�A,
*secretmanager.googleapis.com/SecretVersion
etag (	B�A2�
SecretManagerService�
ListSecrets1.google.cloud.secretmanager.v1.ListSecretsRequest2.google.cloud.secretmanager.v1.ListSecretsResponse"_�Aparent���P/v1/{parent=projects/*}/secretsZ-+/v1/{parent=projects/*/locations/*}/secrets�
CreateSecret2.google.cloud.secretmanager.v1.CreateSecretRequest%.google.cloud.secretmanager.v1.Secret"��Aparent,secret_id,secret���`"/v1/{parent=projects/*}/secrets:secretZ5"+/v1/{parent=projects/*/locations/*}/secrets:secret�
AddSecretVersion6.google.cloud.secretmanager.v1.AddSecretVersionRequest,.google.cloud.secretmanager.v1.SecretVersion"��Aparent,payload���p",/v1/{parent=projects/*/secrets/*}:addVersion:*Z="8/v1/{parent=projects/*/locations/*/secrets/*}:addVersion:*�
	GetSecret/.google.cloud.secretmanager.v1.GetSecretRequest%.google.cloud.secretmanager.v1.Secret"]�Aname���P/v1/{name=projects/*/secrets/*}Z-+/v1/{name=projects/*/locations/*/secrets/*}�
UpdateSecret2.google.cloud.secretmanager.v1.UpdateSecretRequest%.google.cloud.secretmanager.v1.Secret"��Asecret,update_mask���n2&/v1/{secret.name=projects/*/secrets/*}:secretZ<22/v1/{secret.name=projects/*/locations/*/secrets/*}:secret�
DeleteSecret2.google.cloud.secretmanager.v1.DeleteSecretRequest.google.protobuf.Empty"]�Aname���P*/v1/{name=projects/*/secrets/*}Z-*+/v1/{name=projects/*/locations/*/secrets/*}�
ListSecretVersions8.google.cloud.secretmanager.v1.ListSecretVersionsRequest9.google.cloud.secretmanager.v1.ListSecretVersionsResponse"u�Aparent���f*/v1/{parent=projects/*/secrets/*}/versionsZ86/v1/{parent=projects/*/locations/*/secrets/*}/versions�
GetSecretVersion6.google.cloud.secretmanager.v1.GetSecretVersionRequest,.google.cloud.secretmanager.v1.SecretVersion"s�Aname���f*/v1/{name=projects/*/secrets/*/versions/*}Z86/v1/{name=projects/*/locations/*/secrets/*/versions/*}�
AccessSecretVersion9.google.cloud.secretmanager.v1.AccessSecretVersionRequest:.google.cloud.secretmanager.v1.AccessSecretVersionResponse"��Aname���t1/v1/{name=projects/*/secrets/*/versions/*}:accessZ?=/v1/{name=projects/*/locations/*/secrets/*/versions/*}:access�
DisableSecretVersion:.google.cloud.secretmanager.v1.DisableSecretVersionRequest,.google.cloud.secretmanager.v1.SecretVersion"��Aname���|"2/v1/{name=projects/*/secrets/*/versions/*}:disable:*ZC">/v1/{name=projects/*/locations/*/secrets/*/versions/*}:disable:*�
EnableSecretVersion9.google.cloud.secretmanager.v1.EnableSecretVersionRequest,.google.cloud.secretmanager.v1.SecretVersion"��Aname���z"1/v1/{name=projects/*/secrets/*/versions/*}:enable:*ZB"=/v1/{name=projects/*/locations/*/secrets/*/versions/*}:enable:*�
DestroySecretVersion:.google.cloud.secretmanager.v1.DestroySecretVersionRequest,.google.cloud.secretmanager.v1.SecretVersion"��Aname���|"2/v1/{name=projects/*/secrets/*/versions/*}:destroy:*ZC">/v1/{name=projects/*/locations/*/secrets/*/versions/*}:destroy:*�
SetIamPolicy".google.iam.v1.SetIamPolicyRequest.google.iam.v1.Policy"~���x"0/v1/{resource=projects/*/secrets/*}:setIamPolicy:*ZA"</v1/{resource=projects/*/locations/*/secrets/*}:setIamPolicy:*�
GetIamPolicy".google.iam.v1.GetIamPolicyRequest.google.iam.v1.Policy"x���r0/v1/{resource=projects/*/secrets/*}:getIamPolicyZ></v1/{resource=projects/*/locations/*/secrets/*}:getIamPolicy�
TestIamPermissions(.google.iam.v1.TestIamPermissionsRequest).google.iam.v1.TestIamPermissionsResponse"�����"6/v1/{resource=projects/*/secrets/*}:testIamPermissions:*ZG"B/v1/{resource=projects/*/locations/*/secrets/*}:testIamPermissions:*P�Asecretmanager.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
!com.google.cloud.secretmanager.v1BServiceProtoPZGcloud.google.com/go/secretmanager/apiv1/secretmanagerpb;secretmanagerpb�GSM�Google.Cloud.SecretManager.V1�Google\\Cloud\\SecretManager\\V1� Google::Cloud::SecretManager::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

