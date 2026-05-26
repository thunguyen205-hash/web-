jQuery(document).ready(function ($) {
    var el = $('.header-date');
    if (!el.length) return;

    var now = new Date();

    // Format options (browser localized)
    var options = {
        weekday: "long",
        year: "numeric",
        month: "long",
        day: "numeric"
    };

    var formatted = now.toLocaleDateString(undefined, options);

    el.text(formatted);
});
