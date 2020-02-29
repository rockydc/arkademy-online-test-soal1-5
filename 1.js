function biodata(Nama = "nama",
    umur = 0) {


    var biodata = {

        nama: Nama,
        umur: umur,
        hobbies: ['bermain musik'],
        is_married: false,
        list_school: {
            universitas: 'universitas gunadarma',
            tahun_masuk: 2015,
            tahun_lulus: 2019,
            jurusan: 'Teknik Informatika'

        },
        skill: {
            php: 'Advanced',
            javascript: 'beginner',
            python: 'advanced',
            mysql: 'advanced',
            html_css_bootstrap: 'advanced'
        },
        interest_in_coding: true




    };

    json = JSON.stringify(biodata, '', '\t');

    return json;



}