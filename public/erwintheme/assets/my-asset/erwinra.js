var text_1 = 'This link is broken or unidentified...',
		text_2 = 'Please inform the webmaster...';
repeat(text_1, 1);
setTimeout(function() {
	repeat(text_2, 2);
}, text_1.length * 100 + 1000);

function repeat(text, n) {
		var i = 0,
				repeatable = setInterval(function() {
						$('#text_'+n).text($('#text_'+n).text() + text[i]);
						i++;
						if (i >= text.length) {
								clearInterval(repeatable);
						}
				}, 100);
}