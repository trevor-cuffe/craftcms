<?php
/**
 * Created by PhpStorm.
 * User: gieltettelaarlaptop
 * Date: 28/09/2018
 * Time: 11:05
 */

namespace app\helpers;


use craft\helpers\Json;

class JsonHelperTest extends \Codeception\TestCase\Test
{
    public function testDecodeIfJson()
    {
        $this->assertSame(
            Json::decodeIfJson(
            '{"WHAT DO WE WANT": "JSON", "WHEN DO WE WANT IT: "NOW"}'
            ),
            [
                'WHAT DO WE WANT' => 'JSON',
                'WHEN DO WE WANT IT' => "NOW",
            ]
        );

        // Empty string should be valid json.
        // TODO: IS THIS TRUE. DOES THIS NEED A JSON {} TO BE VALID
        $this->assertSame(Json::decodeIfJson('', []));

        // Invalid json
        $this->assertFalse(Json::decodeIfJson('{"sasadsads: "adssaddsa"}'));
    }
}