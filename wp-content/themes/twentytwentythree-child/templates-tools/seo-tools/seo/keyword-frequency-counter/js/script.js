var undoArray = [];

function calculateFrequency ( computeFn, opts) {
    opts = opts || {};
    jQuery('#calculate').click(function () {
        var text = jQuery('#word-text-input').val();
        if (!opts.allowEmptyText) {
            if (!text.length) return;
        }
        try {
            if (opts.asyncResultFn) {
                computeFn(text, opts.asyncResultFn);
            }
            else {
                var result = computeFn(text, opts.asyncResultFn);
                jQuery('#word-text').val(result);
            }
        }
        catch (err) {
            if (opts.exceptionFn) opts.exceptionFn(err);
            return;
        }
        undoArray.push(text);
        jQuery('#word-undo').show();
    });
    undoAll();
}

jQuery(function () {
    calculateFrequency( function (text) {
        var wordStats = {};
        var words = text.split(/\s+/g);
        for (var i = 0; i < words.length; i++) {
            var word = words[i].toLowerCase();
            word = word.replace(/[,.?!]+/, '');
            if (!word.length) {
                continue;
            }
            if (wordStats[word] === undefined) {
                wordStats[word] = 1;
            }
            else {
                wordStats[word]++;
            }
        }
        var sortedWordStatsKeys = Object.keys(wordStats).sort(function (a, b) {
            return wordStats[b] - wordStats[a];
        });
        var retText = '';
        for (var i = 0; i < sortedWordStatsKeys.length; i++) {
            var key = sortedWordStatsKeys[i];
            retText += key + ": " + wordStats[key] + "\n";
        }
        return retText;
    });
});

function undoAll (toolName) {
    jQuery('#word-undo').click(function (event) {
        event.preventDefault();
        var last = undoArray.pop();
        jQuery('#word-text').val(last);
        if (undoArray.length == 0) {
            jQuery('word-undo').hide();
        }
    });
}

function copyData() {
    jQuery('#word-text').select();
    document.execCommand('copy');
}