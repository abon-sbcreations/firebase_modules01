var fireData = firebase.database();
var userId = '';
var existingUserName = '';
$(document).on('submit', "#idUserForm", function (event) {
    if ($("#username").val().length === 0) {
        $("#iddivuname").addClass('warning');
    } else {
        $("#idUserForm").hide();
        var user_name = $("#username").val();
        
        fireData.ref('users').orderByChild("user_name").equalTo(user_name).on('value', function (snapshot) {
            console.log(snapshot);
        });        
        userId = fireData.ref().child('users').push().key;
        var updates = {};
        updates['/users/' + userId] = {
            userid:userId,
            user_name:user_name
        };
        firebase.database().ref().update(updates);
    }
    event.preventDefault();
});

fireData.ref("users/").on('child_added', function (snapshot) {
    
});

