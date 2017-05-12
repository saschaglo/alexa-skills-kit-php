<?php

namespace Phpnarr\AskPhp\ServiceRequest;

use Phpnarr\AskPhp\AbstractEnvelope;
use Phpnarr\AskPhp\Exception\GeneralException;

/**
 * Class RequestEnvelope
 *
 * @package Phpnarr\AskPhp\ServiceRequest
 */
class RequestEnvelope extends AbstractEnvelope
{
    const NODE_VERSION = 'version';
    const NODE_SESSION = 'session';
    const NODE_CONTEXT = 'context';
    const NODE_REQUEST = 'request';

    const TYPE_LAUNCH = 1;
    const TYPE_INTENT = 2;
    const TYPE_SESSION_ENDED = 4;

    const TYPE_AUDIO_PLAYER_PLAYBACK_STARTED = 8;
    const TYPE_AUDIO_PLAYER_PLAYBACK_FINISHED = 16;
    const TYPE_AUDIO_PLAYER_PLAYBACK_STOPPED = 32;
    const TYPE_AUDIO_PLAYER_PLAYBACK_NEARLY_FINISHED = 64;
    const TYPE_AUDIO_PLAYER_PLAYBACK_FAILED = 128;

    const TYPE_PLAYBACK_CONTROLLER_NEXT_COMMAND_ISSUED = 256;
    const TYPE_PLAYBACK_CONTROLLER_PAUSE_COMMAND_ISSUED = 512;
    const TYPE_PLAYBACK_CONTROLLER_PLAY_COMMAND_ISSUED = 1024;
    const TYPE_PLAYBACK_CONTROLLER_PREVIOUS_COMMAND_ISSUED = 2048;

    const TYPE_UNKNOWN = 65536;

    /**
     * @var Version
     */
    private $version;

    /**
     * @var Session
     */
    private $session;

    /**
     * @var Context
     */
    private $context;

    /**
     * @var Request
     */
    private $request;


    /**
     * @return Version
     */
    public function getVersion()
    {
        return $this->version;
    }


    /**
     * @param Version $version
     */
    public function setVersion(Version $version)
    {
        $this->version = $version;
    }


    /**
     * @return Session
     */
    public function getSession()
    {
        return $this->session;
    }


    /**
     * @param Session $session
     */
    public function setSession(Session $session)
    {
        $this->session = $session;
    }


    /**
     * @return Context
     */
    public function getContext()
    {
        return $this->context;
    }


    /**
     * @param Context $context
     */
    public function setContext(Context $context)
    {
        $this->context = $context;
    }


    /**
     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }


    /**
     * @param Request $request
     */
    public function setRequest(Request $request)
    {
        $this->request = $request;
    }


    /**
     * @return int
     *
     * @throws GeneralException when request is not handled yet
     */
    public function getRequestType()
    {
        if (!$this->request instanceof Request) {
            throw new GeneralException(
                sprintf(
                    'Cannot determine RequestType until request is handled properly by %s.',
                    get_class($this)
                )
            );
        }

        switch ($this->request->getType()) {
            case 'LaunchRequest': // 1
                $requestType = static::TYPE_LAUNCH;
                break;
            case 'IntentRequest': // 2
                $requestType = static::TYPE_INTENT;
                break;
            case 'SessionEndedRequest': // 4
                $requestType = static::TYPE_SESSION_ENDED;
                break;
            case 'AudioPlayer.PlaybackStarted': // 8
                $requestType = static::TYPE_AUDIO_PLAYER_PLAYBACK_STARTED;
                break;
            case 'AudioPlayer.PlaybackFinished': // 16
                $requestType = static::TYPE_AUDIO_PLAYER_PLAYBACK_FINISHED;
                break;
            case 'AudioPlayer.PlaybackStopped': // 32
                $requestType = static::TYPE_AUDIO_PLAYER_PLAYBACK_STOPPED;
                break;
            case 'AudioPlayer.PlaybackNearlyFinished': // 64
                $requestType = static::TYPE_AUDIO_PLAYER_PLAYBACK_NEARLY_FINISHED;
                break;
            case 'AudioPlayer.PlaybackFailed': // 128
                $requestType = static::TYPE_AUDIO_PLAYER_PLAYBACK_FAILED;
                break;
            case 'PlaybackController.NextCommandIssued': // 256
                $requestType = static::TYPE_PLAYBACK_CONTROLLER_NEXT_COMMAND_ISSUED;
                break;
            case 'PlaybackController.PauseCommandIssued': // 512
                $requestType = static::TYPE_PLAYBACK_CONTROLLER_PAUSE_COMMAND_ISSUED;
                break;
            case 'PlaybackController.PlayCommandIssued': // 1024
                $requestType = static::TYPE_PLAYBACK_CONTROLLER_PLAY_COMMAND_ISSUED;
                break;
            case 'PlaybackController.PreviousCommandIssued': // 2048
                $requestType = static::TYPE_PLAYBACK_CONTROLLER_PREVIOUS_COMMAND_ISSUED;
                break;
            default:
                $requestType = static::TYPE_UNKNOWN;
                break;
        }

        return $requestType;
    }
}
