$(document).on("input", ".search", function () {
    var searchTerm = $(".search").val().toLowerCase();

    // Custom jQuery expression for case-insensitive contains
    $.extend($.expr[":"], {
        containsi: function (elem, i, match, array) {
            return (
                (elem.textContent || elem.innerText || "")
                    .toLowerCase()
                    .indexOf((match[3] || "").toLowerCase()) >= 0
            );
        },
    });

    if (searchTerm === "") {
        // If the search term is empty, show all rows
        $(".results tbody tr").show().attr("visible", "true");
    } else {
        // Otherwise, hide all rows and then show only those that match the search term
        $(".results tbody tr").hide().attr("visible", "false");
        $(".results tbody tr:containsi('" + searchTerm + "')")
            .show()
            .attr("visible", "true");
    }

    // Update the counter
    var jobCount = $('.results tbody tr[visible="true"]').length;
    $(".counter").text(jobCount + " item" + (jobCount === 1 ? "" : "s")); // Correct pluralization

    // Show or hide the no-result message
    if (jobCount == 0) {
        $(".no-result").show();
    } else {
        $(".no-result").hide();
    }
});

// });
// $(document).on("change", "#simple-search", function () {
//     alert("hello");
// });
