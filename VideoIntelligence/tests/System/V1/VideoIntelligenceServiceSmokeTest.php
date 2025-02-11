<?php
/*
 * Copyright 2018 Google LLC
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

namespace Google\Cloud\VideoIntelligence\Tests\System\V1;

use Google\Cloud\VideoIntelligence\V1\VideoIntelligenceServiceClient;
use Google\ApiCore\Testing\GeneratedTest;
use Google\Cloud\VideoIntelligence\V1\Feature;

/**
 * @group video-intelligence
 * @group gapic
 */
class VideoIntelligenceServiceSmokeTest extends GeneratedTest
{
    /**
     * @test
     */
    public function annotateVideoTest()
    {
        $videoIntelligenceServiceClient = new VideoIntelligenceServiceClient();
        $inputUri = 'gs://cloud-samples-data/video/cat.mp4';
        $featuresElement = Feature::LABEL_DETECTION;
        $features = [$featuresElement];
        $videoIntelligenceServiceClient->annotateVideo(['inputUri' => $inputUri, 'features' => $features]);
    }
}
