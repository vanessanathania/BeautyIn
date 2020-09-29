function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
};

$(document).ready(function() {
    var city = getUrlParameter('city');

    var data = JSON.stringify({
        "type": "search_city",
        "table": "details",
        "value": city.toLowerCase()
    });
    $.post('backend-city.php', data, function(response) {
        var result = JSON.parse(response);

        if (result.length == 0) {
            alert("Kota tidak tersedia.");
        } else {
            var content = "";
            result.forEach(element => {


                if (element.Name == "Brizia Luzule") {
                    content += '<a href="homeMuaBrizia.php?BrizaLuzule@gmail.com"><div>';
                    content += '<img id="gambar" src="../asset/S__14074947.JPG">';
                    content += '<p>' + element.Name + '</p> <button class="bton">Book Now</button></div></a>';
                } else if (element.Name == "Gaure Roseau") {
                    content += '<a href="homeMuaGaure.php?GaureRoseau@gmail.com"><div>';
                    content += '<img id="gambar" src="../asset/pic3.JPG">';
                    content += '<p>' + element.Name + '</p> <button class="bton">Book Now</button></div></a>';
                } else if (element.Name == "Mauve Yucca") {
                    content += '<a href="homeMuaMauve.php?MauveYucca@gmail.com"><div>';
                    content += '<img id="gambar" src="../asset/bbb.JPG">';
                    content += '<p>' + element.Name + '</p> <button class="bton">Book Now</button></div></a>';
                } else if (element.Name == "Acaena Bambou") {
                    content += '<a href="homeMuaAcaena.php?AcaenaBambou@gmail.com"><div>';
                    content += '<img id="gambar" src="../asset/S__14074955.JPG">';
                    content += '<p>' + element.Name + '</p> <button class="bton">Book Now</button></div></a>';
                } else if (element.Name == "Camassia Dorine") {
                    content += '<a href="homeMuaCamassia.php?CamassiaDorine@gmail.com"><div>';
                    content += '<img id="gambar" src="../asset/S__14074951.JPG">';
                    content += '<p>' + element.Name + '</p> <button class="bton">Book Now</button></div></a>';
                } else if (element.Name == "Jasmine Rusell") {
                    content += '<a href="homeMuaJasmine.php?JasmineRusell@gmail.com"><div>';
                    content += '<img id="gambar" src="../asset/S__14074961.JPG">';
                    content += '<p>' + element.Name + '</p> <button class="bton">Book Now</button></div></a>';
                } else if (element.Name == "Elyme Freesia") {
                    content += '<a href="homeMuaElyme.php?ElymeFreesia@gmail.com"><div>';
                    content += '<img id="gambar" src="../asset/S__14074963.JPG">';
                    content += '<p>' + element.Name + '</p> <button class="bton">Book Now</button></div></a>';
                } else if (element.Name == "Hosta Ismene") {
                    content += '<a href="homeMuaHosta.php?HostaIsmene@gmail.com"><div>';
                    content += '<img id="gambar" src="../asset/S__14074949.JPG">';
                    content += '<p>' + element.Name + '</p> <button class="bton">Book Now</button></div></a>';
                } else if (element.Name == "Muscari Polystic") {
                    content += '<a href="homeMuaMuscari.php?MuscariPolystic@gmail.com"><div>';
                    content += '<img id="gambar" src="../asset/S__14074960.JPG">';
                    content += '<p>' + element.Name + '</p> <button class="bton">Book Now</button></div></a>';
                } else if (element.Name == "Galane Bouteloua") {
                    content += '<a href="homeMuaGalane.php?GalaneBouteloua@gmail.com"><div>';
                    content += '<img id="gambar" src="../asset/S__14074962.JPG">';
                    content += '<p>' + element.Name + '</p> <button class="bton">Book Now</button></div></a>';
                } else if (element.Name == "Jacinthe Niveole") {
                    content += '<a href="homeMuaJacinthe.php?JacintheNiveole@gmail.com"><div>';
                    content += '<img id="gambar" src="../asset/S__14074954.JPG">';
                    content += '<p>' + element.Name + '</p> <button class="bton">Book Now</button></div></a>';
                } else if (element.Name == "Cotula Erodium") {
                    content += '<a href="homeMuaCotula.php?CotulaErodium@gmail.com"><div>';
                    content += '<img id="gambar" src="../asset/S__14074956.JPG">';
                    content += '<p>' + element.Name + '</p> <button class="bton">Book Now</button></div></a>';
                } else if (element.Name == "Prunelle Souchet") {
                    content += '<a href="homeMuaPrunelle.php?PrunelleSouchet@gmail.com"><div>';
                    content += '<img id="gambar" src="../asset/b.JPG">';
                    content += '<p>' + element.Name + '</p> <button class="bton">Book Now</button></div></a>';
                }  else if (element.Name == "Tritome Veratre") {
                    content += '<a href="homeMuaTritome.php?TritomeVeratre@gmail.com"><div>';
                    content += '<img id="gambar" src="../asset/bbbb.JPG">';
                    content += '<p>' + element.Name + '</p> <button class="bton">Book Now</button></div></a>';
                } else if (element.Name == "Niveole Rue") {
                    content += '<a href="homeMuaNiveole.php?NiveoleRue@gmail.com"><div>';
                    content += '<img id="gambar" src="../asset/bb.JPG">';
                    content += '<p>' + element.Name + '</p> <button class="bton">Book Now</button></div></a>';
                } else if (element.Name == "Brizia Luzule") {
                    content += '<a href="homeMuaBrizia.php?BrizaLuzule@gmail.com"><div>';
                    content += '<img id="gambar" src="../asset/S__14074947.JPG">';
                    content += '<p>' + element.Name + '</p> <button class="bton">Book Now</button></div></a>';
                } else {
                    content += '<a href="homeMuaBrizia.php?BrizaLuzule@gmail.com"><div>';
                    content += '<img id="gambar" src="../asset/S__14074947.JPG">';
                    content += '<p>' + element.Name + '</p> <button class="bton">Book Now</button></div></a>';
                }
            });




            $('#listmua').html(content);


        }
    });
});