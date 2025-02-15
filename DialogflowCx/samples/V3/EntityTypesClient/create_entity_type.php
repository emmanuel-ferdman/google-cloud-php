<?php
/*
 * Copyright 2023 Google LLC
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

// [START dialogflow_v3_generated_EntityTypes_CreateEntityType_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Dialogflow\Cx\V3\Client\EntityTypesClient;
use Google\Cloud\Dialogflow\Cx\V3\CreateEntityTypeRequest;
use Google\Cloud\Dialogflow\Cx\V3\EntityType;
use Google\Cloud\Dialogflow\Cx\V3\EntityType\Kind;

/**
 * Creates an entity type in the specified agent.
 *
 * Note: You should always train a flow prior to sending it queries. See the
 * [training
 * documentation](https://cloud.google.com/dialogflow/cx/docs/concept/training).
 *
 * @param string $formattedParent       The agent to create a entity type for.
 *                                      Format: `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>`. Please see
 *                                      {@see EntityTypesClient::agentName()} for help formatting this field.
 * @param string $entityTypeDisplayName The human-readable name of the entity type, unique within the
 *                                      agent.
 * @param int    $entityTypeKind        Indicates the kind of entity type.
 */
function create_entity_type_sample(
    string $formattedParent,
    string $entityTypeDisplayName,
    int $entityTypeKind
): void {
    // Create a client.
    $entityTypesClient = new EntityTypesClient();

    // Prepare the request message.
    $entityType = (new EntityType())
        ->setDisplayName($entityTypeDisplayName)
        ->setKind($entityTypeKind);
    $request = (new CreateEntityTypeRequest())
        ->setParent($formattedParent)
        ->setEntityType($entityType);

    // Call the API and handle any network failures.
    try {
        /** @var EntityType $response */
        $response = $entityTypesClient->createEntityType($request);
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
    $formattedParent = EntityTypesClient::agentName('[PROJECT]', '[LOCATION]', '[AGENT]');
    $entityTypeDisplayName = '[DISPLAY_NAME]';
    $entityTypeKind = Kind::KIND_UNSPECIFIED;

    create_entity_type_sample($formattedParent, $entityTypeDisplayName, $entityTypeKind);
}
// [END dialogflow_v3_generated_EntityTypes_CreateEntityType_sync]
