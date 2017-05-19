<?php

namespace Phpnarr\AskPhp;

use Phpnarr\AskPhp\Exception\InvalidRequestInputException;
use Phpnarr\AskPhp\ServiceRequest\Context;
use Phpnarr\AskPhp\ServiceRequest\Request;
use Phpnarr\AskPhp\ServiceRequest\RequestEnvelope;
use Phpnarr\AskPhp\ServiceRequest\Session;
use Phpnarr\AskPhp\ServiceRequest\Version;

/**
 * Class Interceptor
 *
 * @package Phpnarr\AskPhp
 */
class Interceptor
{
    /**
     * @var RequestEnvelope
     */
    protected $requestEnvelope;


    /**
     * Interceptor constructor.
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
        try {
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
        } catch (InvalidRequestInputException $exception) {
            // todo implement proper error handling
            die($exception->getMessage());
        }

        return $this->requestEnvelope;
    }


    /**
     * @param $input
     *
     * @return array
     *
     * @throws InvalidRequestInputException if input is wrong/malformed
     */
    protected function parseInput($input)
    {
        if (false === ($decoded = @json_decode($input, true))
            || !is_array($decoded)
        ) {
            throw new InvalidRequestInputException('Invalid request input. Cannot handle request.');
        }

        return $decoded;
    }


    /**
     * @param mixed $input
     */
    private function handleVersion($input)
    {
        $version = Caster::castObject(new Version(), ['version' => $input]);

        $this->requestEnvelope->setVersion($version);
    }


    /**
     * @param mixed $input
     */
    private function handleSession($input)
    {
        $session = Caster::castObject(new Session(), $input);

        $this->requestEnvelope->setSession($session);
    }


    /**
     * @param mixed $input
     */
    private function handleContext($input)
    {
        $context = Caster::castObject(new Context(), $input);

        $this->requestEnvelope->setContext($context);
    }


    /**
     * @param mixed $input
     */
    private function handleRequest($input)
    {
        $request = Caster::castObject(new Request(), $input);

        $this->requestEnvelope->setRequest($request);
    }
}
