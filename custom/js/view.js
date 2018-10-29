$(document).ready(function () {

  $("#editModal").on("show.bs.modal", function (event) {
    var button = $(event.relatedTarget);
    var id = button.data("id");
    $.get(
      "database.php", {
        button: "edit",
        id: id
      },
      function (data) {
        var info = JSON.parse(data);
        var modal = $(this);
        $("#id").val(info[0]);
        $("#first_name").val(info[1]);
        $("#last_name").val(info[2]);
        $("#department_id").val(info[3]);
        $("#email").val(info[4]);
        $("#mobile_no").val(info[5]);
        $("#date_of_birth").val(info[6]);
      }
    );
  });

  $("#update").click(function () {
    var id = $("#id").val();
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
    } else if (
      (mobile_no.length == 0) |
      (mobile_no < 6999999999) |
      (mobile_no > 9999999999)
    ) {
      document.getElementById("mobile_no").classList.add("is-invalid");
      document.getElementById("mobile_no").focus();
    } else if (date_of_birth.length == 0) {
      document.getElementById("date_of_birth").classList.add("is-invalid");
      document.getElementById("date_of_birth").focus();
    } else {
      $.get(
        "database.php", {
          button: "update",
          id: id,
          first_name: first_name,
          last_name: last_name,
          department_id: department_id,
          email: email,
          mobile_no: mobile_no,
          date_of_birth: date_of_birth
        },
        function (data) {
          if (data == "Success") {
            location.reload(true);
          }
        }
      );
    }
  });
});

$(document).ready(function () {
  $("#example").DataTable();
});