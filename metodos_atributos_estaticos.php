<?php

class Html
{
    public static function mainTag()
    {
        return 'Tag inicial';

    }
    public static function endTag()
    {
        return 'Tag final';
    }
}

print Html::mainTag();
print Html::endTag();