function submitForm() {
    var form = document.querySelector('form');
    var formData = new FormData(form);

    fetch('add.php', {
        method: 'POST',
        body: formData
    })
    .then(function(response) {
        location.reload();
    })
    .catch(function(error) {
        console.error('Hata:', error);
    });
}
       


function validateForm() {
    var name = document.getElementById("name").value;
    var color = document.getElementById("color").value;
    var price = document.getElementById("price").value;
        
    if (name === "" || color === "" || price === "") {
        alert("Please fill in all the fields.");
        return false;
    }
    submitForm();
    return true;
}


function delform() {
    var id = document.getElementById("id").value;

    if (id === "" ) {
        alert("Please fill in all the fields.");
        return false;
    }
        
    return true;
}




function allsubmitForm() {
    var form = document.querySelector('form');
    var formData = new FormData(form);

    fetch('alldel.php', {
        method: 'POST',
        body: formData
    })
    .then(function(response) {
        location.reload();
    })
    .catch(function(error) {
        console.error('Hata:', error);
    });
}

function onesubmitForm() {
    var form = document.querySelector('form');
    var formData = new FormData(form);

    fetch('del.php', {
        method: 'POST',
        body: formData
    })
    .then(function(response) {
        location.reload();
    })
    .catch(function(error) {
        console.error('Hata:', error);
    });
}


function Delete() {
        
    var id = prompt("Please enter id: ");

    var formData = new FormData();
    formData.append('id', id);
      
    fetch('del.php', {
        method: 'POST',
        body: formData
    })
        .then(function(response) {
        location.reload();
        })
        .catch(function(error) {
        console.error('Hata:', error);
        });
}


function AllDelete() {        
    var form = document.querySelector('form');
    var formData = new FormData(form);

    fetch('alldel.php', {
         method: 'POST',
         body: formData
    })
    .then(function(response) {
        location.reload();
    })
    .catch(function(error) {
        console.error('Hata:', error);
    });
}