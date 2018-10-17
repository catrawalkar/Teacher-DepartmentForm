$(document).ready(function () {
    $.get("database.php?offset=2", {
        "button": "teacher_view"
    }, function (data) {
        $("#list").html(data);
    });

    $("#editModal").on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        $.get("database.php", {
            "button": "edit",
            "id": id
        }, function (data) {
            var info = JSON.parse(data);
            var modal = $(this);
            $("#id").val(info[0]);
            $("#first_name").val(info[1]);
            $("#last_name").val(info[2]);
            $("#department_id").val(info[3]);
            $("#email").val(info[4]);
            $("#mobile_no").val(info[5]);
            $("#date_of_birth").val(info[6]);
        });
    });

    $("#update").click(function () {
        var id = $("#id").val();
        var first_name = $("#first_name").val();
        var last_name = $("#last_name").val();
        var department_id = $("#department_id").val();
        var email = $("#email").val();
        var mobile_no = $("#mobile_no").val();
        var date_of_birth = $("#date_of_birth").val();
        if (first_name.length == 0) {
            document.getElementById("first_name").classList.add("is-invalid");
            document.getElementById("first_name").focus();
        } else if (last_name.length == 0) {
            document.getElementById("last_name").classList.add("is-invalid");
            document.getElementById("last_name").focus();
        } else if (department_id.length == 0) {
            document.getElementById("department_id").classList.add("is-invalid");
            document.getElementById("department_id").focus();
        } else if (email.length == 0) {
            document.getElementById("email").classList.add("is-invalid");
            document.getElementById("email").focus();
        } else if (mobile_no.length == 0 | mobile_no < 6999999999 | mobile_no > 9999999999) {
            document.getElementById("mobile_no").classList.add("is-invalid");
            document.getElementById("mobile_no").focus();
        } else if (date_of_birth.length == 0) {
            document.getElementById("date_of_birth").classList.add("is-invalid");
            document.getElementById("date_of_birth").focus();
        } else {
            $.get("database.php", {
                "button": "update",
                "id": id,
                "first_name": first_name,
                "last_name": last_name,
                "department_id": department_id,
                "email": email,
                "mobile_no": mobile_no,
                "date_of_birth": date_of_birth
            }, function (data) {
                if (data == "Success") {
                    location.reload(true);
                }
            });
        }
    });
});

// $(document).ready(function () {
//     var i = 1;
//     while (i < 6) {
//         var value = i * 10;
//         debugger;
//         if (i == 1) {
//             $.get("database.php?offset=" + value, {
//                 "button": "teacher_view"
//             }, function (data) {
//                 alert(i);
//                 document.getElementById("p1").innerHTML = data;
//             });
//         } else if (i == 2) {
//             $.get("database.php?offset=" + value, {
//                 "button": "teacher_view"
//             }, function (data) {
//                 alert(i);
//                 document.getElementById("p2").innerHTML = data;
//             });
//         } else if (i == 3) {
//             $.get("database.php?offset=" + value, {
//                 "button": "teacher_view"
//             }, function (data) {
//                 alert(i);
//                 document.getElementById("p3").innerHTML = data;
//             });
//         } else if (i == 4) {
//             $.get("database.php?offset=" + value, {
//                 "button": "teacher_view"
//             }, function (data) {
//                 alert(i);
//                 document.getElementById("p4").innerHTML = data;
//             });
//         } else if (i == 5) {
//             $.get("database.php?offset=" + value, {
//                 "button": "teacher_view"
//             }, function (data) {
//                 alert(i);
//                 document.getElementById("p5").innerHTML = data;
//             });
//         }
//         i += 1;
//     }

// });



// $(document).ready(function () {
//     var $paginationContainer = $(".pagination-container"),
//         $pagination = $paginationContainer.find('.pagination ul');
//     // click event
//     $pagination.find("li a").on('click.pageChange', function (e) {
//         e.preventDefault();
//         // get parent li's data-page attribute and current page
//         var parentLiPage = $(this).parent('li').data("page"),
//             currentPage = parseInt($(".pagination-container div[data-page]:visible").data('page')),
//             numPages = $paginationContainer.find("div[data-page]").length;
//         // make sure they aren't clicking the current page
//         if (parseInt(parentLiPage) !== parseInt(currentPage)) {
//             // hide the current page
//             $paginationContainer.find("div[data-page]:visible").hide();
//             if (parentLiPage === '+') {
//                 // next page
//                 $paginationContainer.find("div[data-page=" + (currentPage + 1 > numPages ? numPages : currentPage + 1) + "]").show();
//             } else if (parentLiPage === '-') {
//                 // previous page
//                 $paginationContainer.find("div[data-page=" + (currentPage - 1 < 1 ? 1 : currentPage - 1) + "]").show();
//             } else {
//                 // specific page
//                 $paginationContainer.find("div[data-page=" + parseInt(parentLiPage) + "]").show();
//             }
//         }
//     });
// });