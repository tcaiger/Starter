<?php
class StringFormatter extends Extension {


    /**
     * Formats string into correctly for tel links by removing
     * any characters that aren't 0-9 or +
     */
    public function TelFormat() {

        $telFormat = $this->owner->value;

        // Only allow numbers or + symbol
        $telFormat = preg_replace('/[^0-9+]/', '', $telFormat);

        return $telFormat;
    }

}
