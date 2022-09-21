// All Scripts
$(".dropdownOpen").mouseenter(function () {
	$("#OnhoverShow").css({
		display: "block",
		transition: " 0.5s",
	});
	$(".dropdownOpen").addClass("active");
});
$("body").click(function () {
	$("#OnhoverShow").css("display", "none");
	$(".dropdownOpen").removeClass("active");
});
// Milestone Js

function asd() {
	"use strict";
	var i = 1;

	if (i == 1) {
		function count($this) {
			var current = parseInt($this.html(), 10);
			current = current + 10; /* Where 50 is increment */
			$this.html(++current);
			if (current > $this.data("count")) {
				$this.html($this.data("count"));
			} else {
				setTimeout(function () {
					count($this);
				}, 50);
			}
		}
		$(".count").each(function () {
			$(this).data("count", parseInt($(this).html(), 10));
			$(this).html("0");
			count($(this));
		});
	}
}
document.getElementById;
$(document).ready(function () {
	var tester = document.getElementById("counter");

	var p;
	var n = 0;

	window.onscroll = function () {
		p = checkVisible(tester);

		if (p == true && n == 0) {
			asd();
			n = 1;
		}
	};
});

function checkVisible(elm) {
	var rect = elm.getBoundingClientRect();
	var viewHeight = Math.max(
		document.documentElement.clientHeight,
		window.innerHeight,
	);
	return !(rect.bottom < 0 || rect.top - viewHeight >= 0);
}
// Milestone Js
