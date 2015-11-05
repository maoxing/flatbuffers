<?php
// automatically generated, do not modify

namespace MyGame\Example;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class Test extends Struct
{
    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return Test
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    /**
     * @return short
     */
    public function GetA()
    {
        return $this->bb->getShort($this->bb_pos + 0);
    }

    /**
     * @return sbyte
     */
    public function GetB()
    {
        return $this->bb->getSbyte($this->bb_pos + 2);
    }


    /**
     * @return int offset
     */
    public static function createTest(FlatBufferBuilder $builder, $a, $b)
    {
        $builder->prep(2, 4);
        $builder->pad(1);
        $builder->putSbyte($b);
        $builder->putShort($a);
        return $builder->offset();
    }
}
