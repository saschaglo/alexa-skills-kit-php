<?php

namespace Phpnarr\AskPhp\ServiceResponse;

/**
 * Class Card
 *
 * @package Phpnarr\AskPhp\ServiceResponse
 */
class Card implements \JsonSerializable
{
    const TYPE_STANDARD = 'Standard';
    const TYPE_SIMPLE = 'Simple';
    const TYPE_LINK_ACCOUNT = 'LinkAccount';

    /**
     * @var string
     */
    private $type = self::TYPE_SIMPLE;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $text;

    /**
     * @var Image
     */
    private $image;


    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }


    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }


    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }


    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }


    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }


    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }


    /**
     * @return Image
     */
    public function getImage()
    {
        return $this->image;
    }


    /**
     * @param Image $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }


    /**
     * @return array
     */
    function jsonSerialize()
    {
        $return = [];

        $return['type'] = $this->getType();

        if ($this->getType() !== self::TYPE_LINK_ACCOUNT
            && $this->getTitle()
        ) {
            $return['title'] = $this->getTitle();
        }

        if ($this->getType() === self::TYPE_SIMPLE
            && $this->getContent()
        ) {
            $return['content'] = $this->getContent();
        }

        if ($this->getType() === self::TYPE_STANDARD) {
            if ($this->getText()) {
                $return['text'] = $this->getText();
            }

            if ($this->getImage()) {
                $return['image'] = $this->getImage();
            }
        }

        return $return;
    }
}
