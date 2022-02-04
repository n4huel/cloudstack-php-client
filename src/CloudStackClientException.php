<?php
/*
 * This file is part of the CloudStack PHP Client.
 *
 * (c) Quentin Pleplé <quentin.pleple@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class CloudStackClientException extends Exception {
    const ENDPOINT_EMPTY = 1000;
    const ENDPOINT_EMPTY_MSG = 'No endpoint provided.';

    const ENDPOINT_NOT_URL = 1001;
    const ENDPOINT_NOT_URL_MSG = 'The endpoint must be a URL (starting by http://): \"%s\"';

    const APIKEY_EMPTY = 1002;
    const APIKEY_EMPTY_MSG = 'No API key provided.';

    const SECRETKEY_EMPTY = 1003;
    const SECRETKEY_EMPTY_MSG = 'No secret key provided.';

    const STRTOSIGN_EMPTY = 1004;
    const STRTOSIGN_EMPTY_MSG = 'String to sign empty.';

    const NO_COMMAND = 1005;
    const NO_COMMAND_MSG = 'No command given for the request.';

    const WRONG_REQUEST_ARGS = 1006;
    const WRONG_REQUEST_ARGS_MSG = 'Arguments for the request must be in an array. Given: %s';

    const NOT_A_CLOUDSTACK_SERVER = 1006;
    const NOT_A_CLOUDSTACK_SERVER_MSG = 'The response is not a CloudStack server response. Check your endpoint. Received: %s';

    const NO_VALID_JSON_RECEIVED = 1007;
    const NO_VALID_JSON_RECEIVED_MSG = 'The server did not issue a json response.';

    const MISSING_ARGUMENT = 1008;
    const MISSING_ARGUMENT_MSG = 'Argument missing: %s';

    const NO_DATA_RECEIVED = 1009;
    const NO_DATA_RECEIVED_MSG = 'The server did not return any data';
}
