$(document).ready(function () {
    $("#teacher_btn").click(function () {
        var first_name = $("#first_name").val();
        var last_name = $("#last_name").val();
        var department_id = $("#department_id").val();
        var email = $("#email").val();
        var mobile_no = $("#mobile_no").val();
        var date_of_birth = $("#date_of_birth").val();
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (first_name.length == 0) {
            document.getElementById("first_name").classList.add("is-invalid");
            document.getElementById("first_name").focus();
        } else if (last_name.length == 0) {
            document.getElementById("last_name").classList.add("is-invalid");
            document.getElementById("last_name").focus();
        } else if (department_id.length == 0) {
            document.getElementById("department_id").classList.add("is-invalid");
            document.getElementById("department_id").focus();
        } else if (email.length == 0 | reg.test(email) == false) {
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
                "button": "teacher",
                "first_name": first_name,
                "last_name": last_name,
                "department_id": department_id,
                "email": email,
                "mobile_no": mobile_no,
                "date_of_birth": date_of_birth
            }, function (data) {
                alert("Thank you for your response!");
                $("#first_name").val("");
                document.getElementById("first_name").classList.remove("is-invalid");
                $("#last_name").val("");
                document.getElementById("last_name").classList.remove("is-invalid");
                $("#department_id").val("");
                document.getElementById("department_id").classList.remove("is-invalid");
                $("#email").val("");
                document.getElementById("email").classList.remove("is-invalid");
                $("#mobile_no").val("");
                document.getElementById("mobile_no").classList.remove("is-invalid");
                $("#date_of_birth").val("1980-01-01");
                document.getElementById("date_of_birth").classList.remove("is-invalid");
            });
        }
    });

    $("#department_btn").click(function () {
        var department = $("#department").val();
        if (department.length == 0) {
            document.getElementById("department").classList.add("is-invalid");
            document.getElementById("department").focus();
        } else {
            $.get(
                "database.php", {
                    "button": "department",
                    "department": department
                },
                function () {
                    alert("Department is succesfully registered!");;
                    location.reload(true);
                    $("#department").val("");
                    document.getElementById("department").classList.remove("is-invalid");

                }
            );
        }
    });

});