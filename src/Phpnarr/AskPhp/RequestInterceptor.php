<?php

namespace Phpnarr\AskPhp;

use Phpnarr\AskPhp\ServiceRequest\RequestEnvelope;

/**
 * Class RequestInterceptor
 *
 * @package Phpnarr\AskPhp
 *
 * {
 *  "version": "string",
 *  "session": {
 *    "new": true,
 *    "sessionId": "string",
 *    "application": {
 *      "applicationId": "string"
 *    },
 *    "attributes": {
 *      "string": {}
 *    },
 *    "user": {
 *      "userId": "string",
 *      "accessToken": "string"
 *    }
 *  },
 *  "context": {
 *    "System": {
 *      "application": {
 *        "applicationId": "string"
 *      },
 *      "user": {
 *        "userId": "string",
 *        "accessToken": "string"
 *      },
 *      "device": {
 *        "supportedInterfaces": {
 *          "AudioPlayer": {}
 *        }
 *      }
 *    },
 *    "AudioPlayer": {
 *      "token": "string",
 *      "offsetInMilliseconds": 0,
 *      "playerActivity": "string"
 *    }
 *  },
 *  "request": {}
 * }
 */
class RequestInterceptor
{
    /**
     * @var RequestEnvelope
     */
    protected $requestEnvelope;


    /**
     * RequestInterceptor constructor.
     *
     * @param RequestEnvelope $requestEnvelope
     */
    public function __construct(RequestEnvelope $requestEnvelope = null)
    {
        $this->requestEnvelope = $requestEnvelope ?: new RequestEnvelope();
    }


    public static function receiveInput()
    {
        $contents = '';

        // file pointer for STDIN found
        if (0 === ftell(STDIN)) {
            // check for end of file pointer
            while (!feof(STDIN)) {
                $contents .= fread(STDIN, 1024);
            }
        }

        return $contents;
    }


    /**
     * @param string $input
     *
     * @return RequestEnvelope
     */
    public function handle($input)
    {
        $parsed = $this->parseInput($input);

        foreach ($parsed as $node => $parsedInput) {
            switch ($node) {
                case RequestEnvelope::NODE_VERSION:
                    $this->handleVersion($parsedInput);
                    break;
                case RequestEnvelope::NODE_CONTEXT:
                    $this->handleContext($parsedInput);
                    break;
                case RequestEnvelope::NODE_SESSION:
                    $this->handleSession($parsedInput);
                    break;
                case RequestEnvelope::NODE_REQUEST:
                    $this->handleRequest($parsedInput);
                    break;
                default:
                    break;
            }
        }

        return $this->requestEnvelope;
    }


    protected function parseInput($input)
    {
        return $input;
    }


    private function handleVersion($input)
    {
    }


    private function handleSession($input)
    {
    }


    private function handleContext($input)
    {
    }


    private function handleRequest($input)
    {
    }
}
