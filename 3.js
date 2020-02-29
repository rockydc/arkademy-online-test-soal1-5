function sequence(angka = 0) {
    if (angka >= 1) {
        let arr = [angka];
        var kondisi = true;
        var i = 1;
        do {
            if (arr[i - 1] % 2 == 0) {
                arr.push(arr[i - 1] / 2);
            } else {
                arr.push(arr[i - 1] * 3 + 1);
            }

            i++;
            if (arr.includes(1)) {
                kondisi = false;
            }
        } while (kondisi);

        // for (var i = 1; i <= angka; i++) {
        //     if (arr[i - 1] % 2 == 0) {
        //         arr.push(arr[i - 1] / 2);
        //     } else {
        //         arr.push((arr[i - 1] * 3) + 1)
        //     }
        // }
        return console.log(arr + "\n count = " + arr.length);
    } else {
        return console.log("Parameter harus bilangan Positif");
    }
}