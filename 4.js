function randomize(n) {
    var arr = [];
    var random_arr = [];
    for (var i = 1; i < 30; i++) {
        if (i == 2) {
            arr.push(i);
        }
        for (var j = 1; j < i; j++) {
            if (i % j == 0) {
                i++;
            }
        }
        arr.push(i);
    }
    for (var j = 1; j <= n; j++) {
        random_arr.push(arr[Math.floor(Math.random() * arr.length)]);

    }
    var arrsum = random_arr.reduce((a, b) => a + b, 0);
    return console.log(random_arr + "\n sum = " + arrsum);

}

// for (var i = 1; i < (maxNumber - 1); i++) {
//     if (i == 2) {
//         console.log(i);
//     }
//     for (var j = 1; j < i; j++) {

//         if (i % j == 0) {
//             i++;
//         }

//         // console.log(i);
//     }

//     console.log(i);
// }