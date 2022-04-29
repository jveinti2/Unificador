M.AutoInit();

document.addEventListener("DOMContentLoaded", function() {
    var options = {
        data: {
            ARMENIA: null,
            BARRANQUILLA: null,
            BELLO: null,
            BOGOTA: null,
            BUCARAMANGA: null,
            CALDAS: null,
            CALI: null,
            CARTAGENA: null,
            COPACABANA: null,
            CUCUTA: null,
            DOSQUEBRADAS: null,
            ENVIGADO: null,
            GIRARDOTA: null,
            GIRON: null,
            IBAGUE: null,
            ITAGUI: null,
            'LA CEJA': null,
            'LA ESTRELLA': null,
            MANIZALES: null,
            MEDELLIN: null,
            MONTERIA: null,
            PALMIRA: null,
            PASTO: null,
            PEREIRA: null,
            PIEDECUESTA: null,
            POPAYAN: null,
            RIONEGRO: null,
            SABANETA: null,
            SANTAMARTA: null,
            SINCELEJO: null,
            SOACHA: null,
            SOLEDAD: null,
            TULUA: null,
            TUNJA: null,
            VALLEDUPAR: null,
            VILLAVICENCIO: null,
        },
        onAutocomplete: function(res) {
            let ciudad = res

        }
    };
    var elems = document.querySelectorAll(".autocomplete");
    var instances = M.Autocomplete.init(elems, options);
});