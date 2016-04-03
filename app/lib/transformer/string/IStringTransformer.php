<?php

namespace app\lib\transformer\string;

/**
 * Interface IStringTransformer
 * @package app\lib\transformer\string
 */
interface IStringTransformer {

    /**
     * @param string $content
     * @param mixed $options
     *
     * @return string
     */
    public function transform($content, $options);

    /**
     * @param string $content
     * @param mixed $options
     *
     * @return string
     */
    public function __invoke($content, $options);
}