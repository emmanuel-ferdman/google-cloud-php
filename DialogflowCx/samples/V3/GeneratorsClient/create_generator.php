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

// [START dialogflow_v3_generated_Generators_CreateGenerator_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Dialogflow\Cx\V3\Client\GeneratorsClient;
use Google\Cloud\Dialogflow\Cx\V3\CreateGeneratorRequest;
use Google\Cloud\Dialogflow\Cx\V3\Generator;
use Google\Cloud\Dialogflow\Cx\V3\Phrase;

/**
 * Creates a generator in the specified agent.
 *
 * @param string $formattedParent         The agent to create a generator for.
 *                                        Format: `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>`. Please see
 *                                        {@see GeneratorsClient::agentName()} for help formatting this field.
 * @param string $generatorDisplayName    The human-readable name of the generator, unique within the
 *                                        agent. The prompt contains pre-defined parameters such as $conversation,
 *                                        $last-user-utterance, etc. populated by Dialogflow. It can also contain
 *                                        custom placeholders which will be resolved during fulfillment.
 * @param string $generatorPromptTextText Text input which can be used for prompt or banned phrases.
 */
function create_generator_sample(
    string $formattedParent,
    string $generatorDisplayName,
    string $generatorPromptTextText
): void {
    // Create a client.
    $generatorsClient = new GeneratorsClient();

    // Prepare the request message.
    $generatorPromptText = (new Phrase())
        ->setText($generatorPromptTextText);
    $generator = (new Generator())
        ->setDisplayName($generatorDisplayName)
        ->setPromptText($generatorPromptText);
    $request = (new CreateGeneratorRequest())
        ->setParent($formattedParent)
        ->setGenerator($generator);

    // Call the API and handle any network failures.
    try {
        /** @var Generator $response */
        $response = $generatorsClient->createGenerator($request);
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
    $formattedParent = GeneratorsClient::agentName('[PROJECT]', '[LOCATION]', '[AGENT]');
    $generatorDisplayName = '[DISPLAY_NAME]';
    $generatorPromptTextText = '[TEXT]';

    create_generator_sample($formattedParent, $generatorDisplayName, $generatorPromptTextText);
}
// [END dialogflow_v3_generated_Generators_CreateGenerator_sync]
