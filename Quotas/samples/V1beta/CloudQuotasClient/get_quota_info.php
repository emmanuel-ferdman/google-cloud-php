<?php
/*
 * Copyright 2025 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START cloudquotas_v1beta_generated_CloudQuotas_GetQuotaInfo_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\CloudQuotas\V1beta\Client\CloudQuotasClient;
use Google\Cloud\CloudQuotas\V1beta\GetQuotaInfoRequest;
use Google\Cloud\CloudQuotas\V1beta\QuotaInfo;

/**
 * Retrieve the QuotaInfo of a quota for a project, folder or organization.
 *
 * @param string $formattedName The resource name of the quota info.
 *
 *                              An example name:
 *                              `projects/123/locations/global/services/compute.googleapis.com/quotaInfos/CpusPerProjectPerRegion`
 *                              Please see {@see CloudQuotasClient::quotaInfoName()} for help formatting this field.
 */
function get_quota_info_sample(string $formattedName): void
{
    // Create a client.
    $cloudQuotasClient = new CloudQuotasClient();

    // Prepare the request message.
    $request = (new GetQuotaInfoRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var QuotaInfo $response */
        $response = $cloudQuotasClient->getQuotaInfo($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedName = CloudQuotasClient::quotaInfoName(
        '[PROJECT]',
        '[LOCATION]',
        '[SERVICE]',
        '[QUOTA_INFO]'
    );

    get_quota_info_sample($formattedName);
}
// [END cloudquotas_v1beta_generated_CloudQuotas_GetQuotaInfo_sync]
