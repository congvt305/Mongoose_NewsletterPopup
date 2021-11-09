define([
    'jquery',
    'Magento_Ui/js/modal/modal'
], function ($, modal) {
    $.widget('newsletter_popup.form', {
        _create: function() {
            var self = this;
            var title = self.options.title;
            var options = {
                type: 'popup',
                responsive: true,
                innerScroll: true,
                title: title,
                buttons: []
            };
            setTimeout(
                function() {
                    var successUrl = self.options.successUrl;
                    $.ajax({
                        url: successUrl,
                        type: 'GET',
                        dataType: 'json',
                        success: function(response) {
                            if (response.success) {
                                $('#newsletter-popup').html(response.success);
                                var popup = modal(options, $('#newsletter-popup'));
                                $('#newsletter-popup').modal('openModal');
                            }           
                        }
                    });
                }, self.options.delay
            );            
        }
    });

    return $.newsletter_popup.form;
});
