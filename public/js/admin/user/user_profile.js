$(document).on("click", "#view-profile-tab", function () {
    $("#view-profile").removeClass("hidden");
    $("#view-profile-tab").addClass("text-mainbody-400 border-mainbody-400");
    $("#view-contact , #view-job").addClass("hidden");
    $("#view-contact-tab ,#view-job-tab").removeClass(
        "text-mainbody-400 border-mainbody-400"
    );
});
$(document).on("click", "#view-contact-tab", function () {
    $("#view-contact").removeClass("hidden");
    $("#view-contact-tab").addClass("text-mainbody-400 border-mainbody-400");
    $("#view-profile ,#view-job").addClass("hidden");
    $("#view-profile-tab ,#view-job-tab").removeClass(
        "text-mainbody-400 border-mainbody-400"
    );
});
$(document).on("click", "#view-job-tab", function () {
    $("#view-job").removeClass("hidden");
    $("#view-job-tab").addClass("text-mainbody-400 border-mainbody-400");
    $("#view-profile , #view-contact").addClass("hidden");
    $("#view-profile-tab ,#view-contact-tab").removeClass(
        "text-mainbody-400 border-mainbody-400"
    );
});
