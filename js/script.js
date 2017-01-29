// $( document ).ready(function() {
    // console.log( 'Ready!' );
    // console.log($( "body" ).html());
    // console.log($( "label#nameLabel" ).html("First Name:"));
    // сделать выборку в контексте элемента DOM
    // var firstBodyChild = document.body.children[0];
    // $( 'li', firstBodyChild ).html();
// });

// $( '#header' ); // выбрать элемент с идентификатором header
// $( 'li' );      // выбрать все пункты списков на странице
// $( 'ul li' );   // выбрать все пункты маркированного списка
// $( '.person' ); // выбрать все элементы с классом person
//
// // сделать выборку из предыдущей
// var paragraph = $( 'p' );
// $( 'a', paragraph );



$(document).ready(function() {
    console.log($('#form').serialize());
    $("#submit").click(function() {
        var name     = $("#name").val();
        var email    = $("#email").val();
        var password = $("#password").val();
        var contact  = $("#contact").val();

        // Returns successful data submission message when the entered information is stored in database.
        var dataString = 'name1='+ name
                       + '&email1=' + email
                       + '&password1='+ password
                       + '&contact1='+ contact;

        if (name == '' || email == '' || password == '' || contact == '')
        {
            alert("Please Fill All Fields");
        }
        else
        {
        // AJAX Code To Submit Form.
            $.ajax({
                type: "POST",
                url:  "index.php",
                data: dataString,
                dataType: "json",
                cache: false,
                success: function(result) {
                    $('#name').val(result.resultString);
                    // alert(result);
                    // alert(result.resultString);
                }
            });
        }
    });
});

