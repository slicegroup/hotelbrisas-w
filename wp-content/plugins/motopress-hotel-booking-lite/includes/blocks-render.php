<?php

namespace MPHB;

use MPHB\Utils\DateUtils;

class BlocksRender
{
    public function renderSearch($atts)
    {
        return $this->renderShortcode(MPHB()->getShortcodes()->getSearch(), $atts);
    }

    public function renderAvailabilityCalendar($atts)
    {
        return $this->renderShortcode(MPHB()->getShortcodes()->getAvailabilityCalendar(), $atts);
    }

    public function renderSearchResults($atts)
    {
        return $this->renderShortcode(MPHB()->getShortcodes()->getSearchResults(), $atts);
    }

    public function renderRooms($atts)
    {
        return $this->renderShortcode(MPHB()->getShortcodes()->getRooms(), $atts);
    }

    public function renderServices($atts)
    {
        return $this->renderShortcode(MPHB()->getShortcodes()->getServices(), $atts);
    }

    public function renderRoom($atts)
    {
        return $this->renderShortcode(MPHB()->getShortcodes()->getRoom(), $atts);
    }

    public function renderCheckout($atts)
    {
        return $this->renderShortcode(MPHB()->getShortcodes()->getCheckout(), $atts);
    }

    public function renderBookingForm($atts)
    {
        return $this->renderShortcode(MPHB()->getShortcodes()->getBookingForm(), $atts);
    }

    public function renderRoomRates($atts)
    {
        return $this->renderShortcode(MPHB()->getShortcodes()->getRoomRates(), $atts);
    }

    public function renderBookingConfirmation($atts)
    {
        return $this->renderShortcode(MPHB()->getShortcodes()->getBookingConfirmation(), $atts);
    }

    protected function renderShortcode($shortcode, $atts)
    {
        $atts = $this->filterAtts($atts);
        mphb_fix_blocks_autop();
        return $shortcode->render($atts, '', $shortcode->getName());
    }

    protected function filterAtts($atts)
    {
        $atts = array_filter($atts, function ($value) {
            return $value !== '';
        });

        $class = '';

        if (isset($atts['className'])) {
            $class .= $atts['className'];
            unset($atts['className']);
        }

        if (isset($atts['alignment'])) {
            $class .= ' align' . $atts['alignment'];
            unset($atts['alignment']);
        }

        if (!empty($class)) {
            $atts['class'] = trim($class);
        }

        $dateFormat = MPHB()->settings()->dateTime()->getDateFormat();
        $dateRegex = DateUtils::dateFormatToRegex($dateFormat);

        foreach (array('check_in_date', 'check_out_date') as $attrName) {
            if (!isset($atts[$attrName])) {
                continue;
            }

            $isValid = (bool)preg_match($dateRegex, $atts[$attrName]);

            if (!$isValid) {
                unset($atts[$attrName]);
            }
        }

        return $atts;
    }
}
