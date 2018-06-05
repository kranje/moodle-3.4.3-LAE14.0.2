/**
 * Prepares for hiding of the Site Key setting since you cannot modify attributes and such in Moodle.
 */
(function ($) {
    $(document).ready(function () {
        if (!window.HVPSettingsHideKey) {
            return;
        }

        var $input = $('#' + HVPSettingsHideKey.input);
        if (!$input.length) {
            return;
        }

        $input.attr('maxlength', 36)
            .attr('placeholder', $input.val() || HVPSettingsHideKey.value ? HVPSettingsHideKey.placeholder : HVPSettingsHideKey.empty)
            .data('value', HVPSettingsHideKey.value)
            .val('');

        $('<button/>', {
            'type': 'button',
            'class': 'h5p-reveal-value',
            'text': HVPSettingsHideKey.reveal,
            'data': {
                'control': HVPSettingsHideKey.input,
                'hide': HVPSettingsHideKey.hide
            },
            insertAfter: $input
        });
    });
})(H5P.jQuery);
