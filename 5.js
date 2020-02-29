function triangle(n) {

    var s = '';
    for (var i = 1; i < n; i++) {

        for (var j = i; j <= n; j++) {
            s += ' ';
        }
        for (var k = 1; k <= i; k++) {
            s += "*"
        }
        s += "\n"

    }
    console.log(s);
}