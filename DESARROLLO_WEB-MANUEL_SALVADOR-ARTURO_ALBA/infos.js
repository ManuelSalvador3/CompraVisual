const productos = [
    {
        ID: "001",
        Producto: "Msi PS321URV",
        Categoria: "Ofimática",
        Info: "32 pulgadas",
        Precio: "100",
        Foto: "imagenes/no_ofertas/msiPS321URV32.jpg",
        Texto: "Monitor perfecto para el día a día y dsfrutar de su panel IPS de gran calidad."
    },
    {
        ID: "002",
        Producto: "Ozone DSP24",
        Categoria: "Gaming",
        Info: "24 pulgadas",
        Precio: "200",
        Foto: "imagenes/no_ofertas/ozoneDSP2424.jpg",
        Texto: "Monitor perfecto para el día a día y dsfrutar de su panel IPS de gran calidad."
    },
    {
        ID: "003",
        Producto: "Philips 273V7QDSB",
        Categoria: "Diseño",
        Info: "27 pulgadas",
        Precio: "230",
        Foto: "imagenes/no_ofertas/philips273V7QDSB27.jpg",
        Texto: "Monitor perfecto para el día a día y dsfrutar de su panel IPS de gran calidad."
    },
    {
        ID: "004",
        Producto: "Samsung LS34J550WQU34",
        Categoria: "Diseño",
        Info: "Ultrawide",
        Precio: "140",
        Foto: "imagenes/no_ofertas/SamsungLS34J550WQU34.1.jpg",
        Texto: "Monitor perfecto para el día a día y dsfrutar de su panel IPS de gran calidad."
    },
    {
        ID: "005",
        Producto: "Samsung LU28E590DS",
        Categoria: "Gaming",
        Info: "28 pulgadas",
        Precio: "290",
        Foto: "imagenes/no_ofertas/samsungLU28E590DS28.jpg",
        Texto: "Monitor perfecto para el día a día y dsfrutar de su panel IPS de gran calidad."
    },
    {
        ID: "006",
        Producto: "Xiaomi MI",
        Categoria: "Diseño",
        Info: "34 pulgadas",
        Precio: "21",
        Foto: "imagenes/no_ofertas/xiaomiMi34.jpg",
        Texto: "Monitor perfecto para el día a día y dsfrutar de su panel IPS de gran calidad."
    },
    {
        ID: "007",
        Producto: "Lenovo C24",
        Categoria: "Ofimática",
        Info: "23 pulgadas",
        Precio: "80",
        Foto: "imagenes/no_ofertas/lenovoC24-2523.8.jpg",
        Texto: "Monitor perfecto para el día a día y dsfrutar de su panel IPS de gran calidad."
    },
    {
        ID: "008",
        Producto: "Samsung LF24T350F",
        Categoria: "Diseño",
        Info: "24 pulgadas",
        Precio: "140",
        Foto: "imagenes/no_ofertas/Samsung LF24T350FHUXEN24.jpg",
        Texto: "Monitor perfecto para el día a día y dsfrutar de su panel IPS de gran calidad."
    },
    {
        ID: "009",
        Producto: "BenQ ZOWIE XL2411K",
        Categoria: "Gaming",
        Info: "24 pulgadas",
        Precio: "140",
        Foto: "imagenes/no_ofertas/benqZOWIEXL2411K24.jpg",
        Texto: "Monitor perfecto para el día a día y dsfrutar de su panel IPS de gran calidad."
    }
];

function plantillainfo (producto) {
    return `
        <div class="container">
        	<div class="row">
               <div class="col-xs-4 item-photo">
                    <img style="max-width:100%;" src="${producto.Foto}" />
                </div>
                <div class="col-xs-5" style="border:0px solid gray">
                    <h3>${producto.Producto}</h3>

                    <h6 class="title-price"><small>PRECIO</small></h6>
                    <h3 style="margin-top:0px;">${producto.Precio}€</h3>
        
                    <div class="section">
                        <h6 class="title-attr" style="margin-top:15px;" ><small>${producto.Texto}€</small></h6>                    
                    </div>            

                    <div class="section" style="padding-bottom:20px;">
                        <button class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Agregar al carrito</button>
                    </div>                                        
                </div>                              
            </div>
        </div>
    `;
}

document.getElementById("infos").innerHTML = `
    ${productos.map(plantillainfo).join("")}
`;
