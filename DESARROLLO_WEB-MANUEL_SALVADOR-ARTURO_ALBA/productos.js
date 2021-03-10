const productosdata = [
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

function plantillaofertas (producto) {
    return `
        <div class="col-md-4">
                <div class="card border-0" style="width: 18rem;">
                    <a href="infoproducto.html" id="${producto.ID}"><img class="card-img-top" src="${producto.Foto}"></a>
                    <div class="card-body">
                        <h5 class="card-title">${producto.Producto}</h5>
                        <p> ${producto.Precio}€</p>
                        <p class="card-text">${producto.Categoria}</p>
                        <a href="#" class="btn btn-primary">Añadir al carrito</a>
                    </div>
                </div>
            </div>
        `;
}

document.getElementById("appi").innerHTML = `
    ${productosdata.map(plantillaofertas).join("")}
`;
