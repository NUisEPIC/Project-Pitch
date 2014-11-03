
(function() {
    $('#ss-submit').submit(function() {

    $(":text, :file, :checkbox, select, textarea").each(function() {
   if($(this).val() === "")
    alert("Empty Fields!!");
}           );
    });
})()