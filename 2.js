function validasi_username(username) {
    var rules = /^[/da-z/d][a-z][5]$/m;
    return rules.test(username)
}

if (validasi_username("1brah1")) {
    alert("username valid")
} else {
    alert('username is invalid');
}